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
            var idexpediente = $container.find('input[name=idexpediente]').val();
            
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
            
            //DROPZONE
            Dropzone.autoDiscover = false; 
            var myDropzone = new Dropzone("#mydropzone", {
                    url: "/clientes/ver/"+idcliente+"/expedientes/ver/1/dropzone",
                    addRemoveLinks: true,
                    dictRemoveFile:'Eliminar',
                    autoProcessQueue:false,
                    addedfile:function(file){    
                        $('.modal').remove();
                        var _this = this;
                        if(_this.files.length > 0){
                            $.ajax({
                                url:'/clientes/selectfile',
                                success:function(source){
                                     source = $('<div>'+source+'</div>');
                                     $container.append(source);
                                     source.find('.modal').modal();

                                     //EL EVENTO DE NUESTROS BOTONES
                                     source.find('.btn-default').on('click',function(){
                                         _this.removeFile(file);
                                          $('.modal').modal('toggle');
                                     });
                                     source.find('.btn-success').on('click',function(){

                                        var id = $container.find('input[name=idcliente]').val();
                                        var file_name = 'cliente_'+ source.find('input[name=optionyes]:checked').val();

                                        myDropzone.on('sending', function(file, xhr, formData){
                                            formData.append('idcliente', id);
                                            formData.append('file_name', file_name);
                                        });
                                        
                                        myDropzone.processQueue();
                                        $('.modal').modal('toggle');
                                        $container.find('#'+file_name).find('i').removeClass('fa-times-circle').addClass('fa-check');
                                        $container.find('#'+file_name).find('span').removeClass('notyet').addClass('ok');
                                        
                                     });

                                }
                            });
                        }

                        file.previewElement = Dropzone.createElement(_this.options.previewTemplate);
                        file.previewTemplate = file.previewElement;
                        _this.previewsContainer.appendChild(file.previewElement);
                        file.previewElement.querySelector("[data-dz-name]").textContent = file.name;
                        file.previewElement.querySelector("[data-dz-size]").innerHTML = _this.filesize(file.size);
                        
                        if (this.options.addRemoveLinks && typeof file.status == 'undefined') {
                            file._removeLink = Dropzone.createElement("<a class=\"dz-remove\" href=\"javascript:undefined;\">" + this.options.dictRemoveFile + "</a>");
                            file._downloadLink = Dropzone.createElement("<a class=\"dz-download\" href=" + file.status + "><i class=\"fa fa-download\"></i></a>");
                            //file._downloadLink = Dropzone.createElement("<a class=\"btn\" id=\"bt-down\" style=\"margin-left:5px; cursor:pointer;\" href=\"javascript:Download('"+file.name+"');\" title=\"Download\" data-dz-download><i class=\"fa fa-download\"></i></a>");
                            file._removeLink.addEventListener("click", function (e) {
                                e.preventDefault();
                                e.stopPropagation();
                                if (file.status === Dropzone.UPLOADING) {
                                    return Dropzone.confirm(_this.options.dictCancelUploadConfirmation, function () {
                                        return _this.removeFile(file);
                                    });
                                } else {
                                    if (_this.options.dictRemoveFileConfirmation) {
                                        return Dropzone.confirm(_this.options.dictRemoveFileConfirmation, function () {
                                            return _this.removeFile(file);
                                        });
                                    } else {
                                        return _this.removeFile(file);
                                    }
                                }
                            });
                            file._downloadLink.addEventListener("click", function (e) {
                                e.preventDefault();
                                e.stopPropagation();
                                //HACEMOS LA PETICION AJAX PARA OBTENER EL BASE64
                                $.ajax({
                                    type: 'POST',
                                    url: '/clientes/legaldropzonedownload',
                                    data: {idcliente:idcliente,id: file.id},
                                    dataType: 'json',
                                    success: function (base64) {

                                        download("data:" + base64.type + ";base64," + base64.base64, base64.name, base64.type);

                                    }

                                });

                            });
                            file.previewElement.appendChild(file._removeLink);
                            file.previewElement.appendChild(file._downloadLink);
                        }
                        return this._updateMaxFilesReachedClass();
                    },
                    removedfile: function (file) {
                        $.ajax({
                            type: 'POST',
                            url: '/clientes/legaldropzonedelete',
                            data: {idcliente:idcliente,id: file.id},
                            dataType: 'json',
                            success: function (data) {
                                if (data) {
                                    var _ref;
                                    $container.find('#'+file.id).find('i').removeClass('fa-check').addClass('fa-times-circle');
                                    $container.find('#'+file.id).find('span').removeClass('ok').addClass('notyet');
                                    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                                }

                            }

                        });
                    },
                });
            myDropzone.autoDiscover = false;
            
            //NUEVO CARGO
            $container.find('a#nuevo_cargo').on('click',function(){
               
                $.ajax({
                        url:'/clientes/ver/'+idcliente+'/expedientes/ver/'+idexpediente+'/nuevocargo',
                        data:{id:idexpediente},
                        success:function(source){
                             source = $('<div>'+source+'</div>');
                             
                             //SELECT 2 DEL MODAL
                             source.find("select").select2({
                                placeholder: "Select a state",
                                allowClear: true,
                                language: "es"
                            });
                            
                            source.find('select[name=idcategoriagasto]').select2().on('change', function (e) {
                                
                                $container.find('select[name=idgastofacturacion] option:not(:first-child)').remove();
                                $("select[name=idgastofacturacion]").select2("val", "");
                
                                var idcategoriagasto = e.val;
                                
                                if(idcategoriagasto != ""){
                                    
                                    $.ajax({
                                        dataType:'json',
                                        url:'/clientes/ver/'+idcliente+'/expedientes/ver/'+idexpediente+'/getcargos',
                                        data:{idcategoria:idcategoriagasto},
                                        success:function(data)
                                        {
                                            $.each(data,function(){
                                                var option = $('<option>').text(this.gastofacturacion_nombre);
                                                option.attr('value',this.idgastofacturacion)
                                                source.find('select[name=idgastofacturacion]').append(option);
                                            });
                                            source.find('select[name=idgastofacturacion]').select2("enable",true);
                                        }
                                    });
                                }else {

                                    source.find('select[name=idgastofacturacion]').select2("enable", false);

                                }
                            });
                            
                            //NUMERIC DEL CAMPO MONTO
                            source.find('input[name=expedientegasto_monto]').numeric();
                            
                            //INICIALIZAMOS NUESTRO CALENDARIO
                            console.log(source.find('.input-append.date'));
                            source.find('.input-append.date').datepicker({
                                autoclose: true,
                                todayHighlight: true,
                                format:'dd/mm/yyyy'
                            });
            
            
                             $container.append(source);
                             source.find('.modal').modal();
                        }
                    });     
    
            });

        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


