(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.proveedor = function(data){
        var _this = $(this);
        var plugin = _this.data('proveedor');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.proveedor(this, data);
            
            _this.data('proveedor', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.proveedor = function(container, options){
        
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
            
            var tableElement = $('#table_proveedores');

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
                            { data: "proveedoritrade_nombre" },
                            { data: "proveedor_nombrecontacto" },
                            { data: "proveedoritrade_telefono" },
                            { data: "empleado_options",bSearchable: false, bSortable: false, className:'options'},
                        ],
                        ajax: {
                            url: '/catalogo/proveedores/serverside',
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
                                    url:'/catalogo/proveedores/eliminar',
                                    data:{id:id},
                                    success:function(source){
                                        source = $('<div>'+source+'</div>');
                                        source.find('button[btn-action=eliminar]').on('click',function(){
                                            $.ajax({
                                                url:'/catalogo/proveedores/eliminar',
                                                type:'POST',
                                                dataType:'json',
                                                data:{id:id},
                                                success:function(data){
                                                    if(data){
                                                        window.location.replace('/catalogo/proveedores');
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
        
        plugin.formBind = function(){
            
          $container.find('#proveedoritrade_comprobantedatosbancarios').dropzone({ url: "/file/post" });
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


