(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.expediente = function(data){
        var _this = $(this);
        var plugin = _this.data('expediente');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.expediente(this, data);
            
            _this.data('expediente', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.expediente = function(container, options){
        
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
            
            var idcliente = $container.find('input[name=idcliente]').val();
            
            var edit = typeof edit != 'undefined' ? true : false;
            
            //INICIALIZAMOS NUESTROS SELECT
            $container.find("select").select2({
                allowClear: true,
                language: "es"
            });
            
            $container.find('select[name=expediente_tipo]').select2().on('change',function(e){
                
                $container.find('select[name=idconsignatarioembarcador] option:not(:first-child)').remove();
                $("select[name=idconsignatarioembarcador]").select2("val", "");
                
                var type = e.val;
                var _this = $(this);
                if($.inArray(type,['importacion','exportacion']) >=0){
                    $.ajax({
                        dataType:'json',
                        url:'/clientes/ver/'+idcliente+'/expedientes/getproveedores',
                        data:{idcliente:idcliente,type:type},
                        success:function(data){
                            $.each(data,function(){
                                var option = $('<option>').text(this.proveedorcliente_nombre);
                                option.attr('value',this.idproveedorcliente)
                                $container.find('select[name=idconsignatarioembarcador]').append(option);
                            });
                            $container.find('select[name=idconsignatarioembarcador]').select2("enable",true);
                            
                        }
                    });
                }else{
                  
                    $container.find('select[name=idconsignatarioembarcador]').select2("enable",false);

                }
            });

        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


