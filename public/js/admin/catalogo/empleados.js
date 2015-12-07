(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.empleados = function(data){
        var _this = $(this);
        var plugin = _this.data('empleados');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.empleados(this, data);
            
            _this.data('empleados', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.empleados = function(container, options){
        
        var plugin = this;
        
        /* 
        * Default Values
        */ 
       
       var defaults = {
           successMessages:new Array(),
       };
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        var $table;
        
        
        /*
        * Private methods
        */

       
       /*
        * Public methods
        */
       
        plugin.list = function(){
            
            //RESPONSIVIDAD
            var responsiveHelper = undefined;
            var breakpointDefinition = {
                tablet: 1024,
                phone : 480
            };   
            var tableElement = $('#example');

//    tableElement.dataTable( {
//		"sDom": "<'row'<'col-md-6'l T><'col-md-6'f>r>t<'row'<'col-md-12'p i>>",
//			"oTableTools": {
//			"aButtons": [
//				{
//					"sExtends":    "collection",
//					"sButtonText": "<i class='fa fa-cloud-download'></i>",
//					"aButtons":    [ "csv", "xls", "pdf", "copy"]
//				}
//			]
//		},
//		"sPaginationType": "bootstrap",
//		 "aoColumnDefs": [
//          { 'bSortable': false, 'aTargets': [ 0 ] }
//		],
//		"aaSorting": [[ 1, "asc" ]],
//		"oLanguage": {
//			"sLengthMenu": "_MENU_ ",
//			"sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
//		},
//		 bAutoWidth     : false,
//        fnPreDrawCallback: function () {
//            // Initialize the responsive datatables helper once.
//            if (!responsiveHelper) {
//                responsiveHelper = new ResponsiveDatatablesHelper(tableElement, breakpointDefinition);
//            }
//        },
//        fnRowCallback  : function (nRow) {
//            responsiveHelper.createExpandIcon(nRow);
//        },
//        fnDrawCallback : function (oSettings) {
//            responsiveHelper.respond();
//        }
//	});

            //INICILIZAMOS NUNESTRA TABLA
            $.ajax({
                 url: '/json/datatable/lang_es.json',
                 async:false,
                 success: function (data) {
                    $table = $container.find('table').DataTable({
                         autoWidth: false,
                         serverSide: true,
                         processing: true,
                         language:data,
                         iDisplayLength:25,
                         order:[],
                         columns: [
                            { data: "empleado_nombre" },
                            { data: "empleado_email" },
                            { data: "empleado_celular" },
                            { data: "empleado_rol" },
                            { data: "empleado_options",bSearchable: false, bSortable: false, className:'options'},
                        ],
                        ajax: {
                            url: '/catalogo/empleados/serverside',
                            type: 'POST',
                        },
                        fnDrawCallback : function (oSettings) {
                 
                            //responsiveHelper.respond();
                        },
                        fnRowCallback  : function (nRow) {
                            
                            //responsiveHelper.createExpandIcon(nRow);
                        },
                        
                    });
                    //INICIALIZAMOS NUESTROS SELECT
                    $container.find("select").select2({
                        minimumResultsForSearch: -1
                    });
                    
                 }
            });
            
            
            
        }
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            $.each(settings.successMessages,function(){
                Messenger().post({
                    message: this,
                    type: 'success',
                    showCloseButton: true,
                });	
            });
            
            
            
            
        }
        
        plugin.formBind = function(edit,entity){
            
            var edit = typeof edit != 'undefined' ? true : false;
  
            //INICIALIZAMOS NUESTROS SELECT
            $container.find("select").select2({
                placeholder: "Select a state",
                allowClear: true,
                language: "es"
            });

            //INICIALIZAMOS NUESTRO CALENDARIO
            $container.find('.input-append.date').datepicker({
                autoclose: true,
                todayHighlight: true,
                format:'dd/mm/yyyy'
            });
            
            //FOTOGRAFIA
            $container.find('img.empleado_foto').on('click',function(){
                $container.find('input[name=empleado_foto]').trigger('click');
            });
            
            $container.find('input[name=empleado_foto]').on('change',function(){
                var $input = $(this);
                var photo =  $container.find('img.empleado_foto');
                var inputFiles = this.files;
                
                $container.find('input[name=empleado_foto_submit]').val('');
                
                if(inputFiles == undefined || inputFiles.length == 0) return;
                
                var inputFile = inputFiles[0];
                var reader = new FileReader();
                
                reader.onload = function(event) {
                    
                    $container.find('img.empleado_foto').attr("src", event.target.result);
                };
                
                if($container.find('input[name=empleado_foto]').val() != ''){
                    $container.find('p#eliminar_imagen').show();
                }
                
                reader.readAsDataURL(inputFile);

            });
            
            $container.find('p#eliminar_imagen').on('click',function(){
                $container.find('img.empleado_foto').attr("src", '/img/admin/profiles/avatar_default.jpg');
                $container.find('input[name=empleado_foto]').val('');
                $container.find('input[name=empleado_foto_submit]').val('delete');
                $container.find('p.eliminar_imagen').hide();
            });
            
            if(edit){
            
                //SETIAMOS LA CONTRASEÑA
                if(entity.empleado_foto != null){
                    $container.find('img.empleado_foto').attr('src',entity.empleado_foto);
                    $container.find('p#eliminar_imagen').show();
                }
                
                //QUITAMOS EL CAMPO CONTRASEÑA COMO REQUERIDO
                $container.find('input[name=empleado_password]').prop('required',false); 
                $container.find('input[name=empleado_email]').removeClass('validate-ajax');
                
                //SETIAMOS LA FECHA 
                if(typeof entity.empleado_iniciocontrato != 'undefined' && entity.empleado_iniciocontrato != ''){
                     var empleado_iniciocontrato = moment(entity.empleado_iniciocontrato,'MM/DD/YY');
                     empleado_iniciocontrato = empleado_iniciocontrato.toDate();
                     $( ".input-append.date" ).datepicker( "setDate",empleado_iniciocontrato);
                }
               
                
            }
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


