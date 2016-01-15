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
                
                //HACEMOS LA VALIDACION DEL LISTADO DEL PERFIL LEGAL

                if(entity.cliente_padronimportador !== null){
                    $container.find('#cliente_padronimportador').find('i').addClass('fa fa-check');
                    $container.find('#cliente_padronimportador').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_padronimportador').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_padronimportador').find('span').addClass('notyet');
                }
                
                if(entity.cliente_encargadoconferido !== null){
                    $container.find('#cliente_encargadoconferido').find('i').addClass('fa fa-check');
                    $container.find('#cliente_encargadoconferido').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_encargadoconferido').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_encargadoconferido').find('span').addClass('notyet');
                }
                
                if(entity.cliente_r1 !== null){
                    $container.find('#cliente_r1').find('i').addClass('fa fa-check');
                    $container.find('#cliente_r1').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_r1').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_r1').find('span').addClass('notyet');
                }
                
                if(entity.cliente_r2 !== null){
                    $container.find('#cliente_r2').find('i').addClass('fa fa-check');
                    $container.find('#cliente_r2').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_r2').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_r2').find('span').addClass('notyet');
                }
                
                if(entity.cliente_identificacionrepresentantelegal !== null){
                    $container.find('#cliente_identificacionrepresentantelegal').find('i').addClass('fa fa-check');
                    $container.find('#cliente_identificacionrepresentantelegal').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_identificacionrepresentantelegal').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_identificacionrepresentantelegal').find('span').addClass('notyet');
                }
                
                if(entity.cliente_rfcrepresentantelegal !== null){
                    $container.find('#cliente_rfcrepresentantelegal').find('i').addClass('fa fa-check');
                    $container.find('#cliente_rfcrepresentantelegal').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_rfcrepresentantelegal').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_rfcrepresentantelegal').find('span').addClass('notyet');
                }
                
                if(entity.cliente_podernotarial !== null){
                    $container.find('#cliente_podernotarial').find('i').addClass('fa fa-check');
                    $container.find('#cliente_podernotarial').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_podernotarial').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_podernotarial').find('span').addClass('notyet');
                }
                
                if(entity.cliente_cartaencomienda !== null){
                    $container.find('#cliente_cartaencomienda').find('i').addClass('fa fa-check');
                    $container.find('#cliente_cartaencomienda').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_cartaencomienda').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_cartaencomienda').find('span').addClass('notyet');
                }
                
                if(entity.cliente_actaconstitutiva !== null){
                    $container.find('#cliente_actaconstitutiva').find('i').addClass('fa fa-check');
                    $container.find('#cliente_actaconstitutiva').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_actaconstitutiva').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_actaconstitutiva').find('span').addClass('notyet');
                }

                if(entity.cliente_comprobantedomicilio !== null){
                    $container.find('#cliente_comprobantedomicilio').find('i').addClass('fa fa-check');
                    $container.find('#cliente_comprobantedomicilio').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_comprobantedomicilio').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_comprobantedomicilio').find('span').addClass('notyet');
                }
                
                if(entity.cliente_archivoszip !== null){
                    $container.find('#cliente_fotografiasdomicilio').find('i').addClass('fa fa-check');
                    $container.find('#cliente_fotografiasdomicilio').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_fotografiasdomicilio').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_fotografiasdomicilio').find('span').addClass('notyet');
                }
                
                if(entity.cliente_archivoszip !== null){
                    $container.find('#cliente_archivoszip').find('i').addClass('fa fa-check');
                    $container.find('#cliente_archivoszip').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_archivoszip').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_archivoszip').find('span').addClass('notyet');
                }
                
                if(entity.cliente_fotografiasdomicilio !== null){
                    $container.find('#cliente_fotografiasdomicilio').find('i').addClass('fa fa-check');
                    $container.find('#cliente_fotografiasdomicilio').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_fotografiasdomicilio').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_fotografiasdomicilio').find('span').addClass('notyet');
                }
                
                if(entity.cliente_comprobanteclabe !== null){
                    $container.find('#cliente_comprobanteclabe').find('i').addClass('fa fa-check');
                    $container.find('#cliente_comprobanteclabe').find('span').addClass('ok');
                }else{
                    $container.find('#cliente_comprobanteclabe').find('i').addClass('fa fa-times-circle');
                    $container.find('#cliente_comprobanteclabe').find('span').addClass('notyet');
                }

                //TERMINA VALIDACION LISTADO PERFIL LEGAL
                
                //NUESTRO DROPZONE DEL PERFIL LEGAL
                Dropzone.autoDiscover = false; 
                
                var myDropzone = new Dropzone("#mydropzone", {
                    url: "/clientes/legaldropzone",
                    addRemoveLinks: true,
                    dictRemoveFile:'Eliminar',
                    addedfile:function(data){            
                        $.ajax({
                        url:'/clientes/selectfile',
                            success:function(source){
                                 source = $('<div>'+source+'</div>');
                                 $container.append(source);
                                 source.find('.modal').modal();
                            }
                        });
                    }
                });
                
                $container.find('input[name=cliente_email]').removeClass('validate-ajax');
                                
                //EL EVENTO CAMBIAR CONTRASEÑA
                $container.find('a#change_password').on('click',function(){
                    var id = $container.find('input[name=idcliente]').val();
                    $.ajax({
                        url:'/clientes/changepassword',
                        data:{id:id},
                        success:function(source){
                             source = $('<div>'+source+'</div>');
                             $container.append(source);
                             source.find('.modal').modal();
                        }
                    });
                });
                
                myDropzone.autoDiscover = false
                
            }
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


