(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.clientes = function(data){
        var _this = $(this);
        var plugin = _this.data('clientes');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.clientes(this, data);
            
            _this.data('clientes', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.clientes = function(container, options){
        
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
                            { data: "cliente_razonsocial" },
                            { data: "cliente_nombrecontacto" },
                            { data: "cliente_email" },
                            { data: "cliente_telefono" },
                            { data: "cliente_ciudad" },
                            { data: "cliente_pais" },
                            { data: "cliente_options",bSearchable: false, bSortable: false, className:'options'},
                        ],
                        ajax: {
                            url: '/clientes/serverside',
                            type: 'POST',
                            async:false,
                        },
                        fnDrawCallback : function (oSettings) {

                            
                                                    
                        },
                        fnRowCallback  : function (nRow) {
                            
                            //DELETE MODAL
                            $(nRow).find('td.options a.delete').on('click',function(){
                                var id = $(this).closest('tr').attr('id');
                                $.ajax({
                                    url:'/clientes/eliminar',
                                    data:{id:id},
                                    success:function(source){
                                        source = $('<div>'+source+'</div>');
                                        source.find('button[btn-action=eliminar]').on('click',function(){
                                            $.ajax({
                                                url:'/clientes/eliminar',
                                                type:'POST',
                                                dataType:'json',
                                                data:{id:id},
                                                success:function(data){
                                                    if(data){
                                                        window.location.replace('/clientes');
                                                    }
                                                }
                                            });
                                        });
                                        
                                        $container.append(source);
                                        
                                        source.find('.modal').modal();
                                  
                                    }
                                });
                                
                            });
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
            
            //INICIALIZAMOS EL FUNCIONAMIENTO DE NUESTRAS TABS
            var $tabs = $container.find('#myTab');
            
            $tabs.find('a').on('click',function(e){
                e.preventDefault();
                var href = $(this).attr('href');
               
                //OCULTAMOS Y MOSTRAMOS LAS PESTAÑAS
                $tabs.find('li').removeClass('active');
                $(this).closest('li').addClass('active');
                //OCULTAMOS Y MOSTRAMOS LOS PANELES
                $container.find('.tab-pane').hide();
                $container.find('.tab-pane'+href).show();
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

              
            if(edit){
                                
            }
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


