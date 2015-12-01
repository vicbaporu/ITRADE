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
           
       };
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;
        
        /*
        * Private methods
        */

       
       /*
        * Public methods
        */
        
        plugin.init = function(){
            
            settings = plugin.settings = $.extend({}, defaults, options);
            
            
            
        }
        
        plugin.formBind = function(){
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
        }

        /*
        * Plugin initializing
        */
        
        //plugin.init();
       
    }
    
    
    
})( jQuery );


