(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.servicios = function(data){
        var _this = $(this);
        var plugin = _this.data('servicios');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.servicios(this, data);
            
            _this.data('servicios', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.servicios = function(container, options){
        
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
                            { data: "servicio_nombre" },
                            { data: "servicio_tipo" },
                            { data: "servicio_medio" },
                            { data: "servicio_options",bSearchable: false, bSortable: false, className:'options'},
                        ],
                        ajax: {
                            url: '/catalogo/servicios/serverside',
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
                                    url:'/catalogo/servicios/eliminar',
                                    data:{id:id},
                                    success:function(source){
                                        source = $('<div>'+source+'</div>');
                                        source.find('button[btn-action=eliminar]').on('click',function(){
                                            $.ajax({
                                                url:'/catalogo/servicios/eliminar',
                                                type:'POST',
                                                dataType:'json',
                                                data:{id:id},
                                                success:function(data){
                                                    if(data){
                                                        window.location.replace('/catalogo/servicios');
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

        }
        
        plugin.formBind = function(edit,entity){
            
            var edit = typeof edit != 'undefined' ? true : false;
  
            //INICIALIZAMOS NUESTROS SELECT
            $container.find("select").select2({
                placeholder: "Select a state",
                allowClear: true,
                language: "es"
            });

        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


