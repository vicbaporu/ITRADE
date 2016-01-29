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
        
        plugin.formBind = function(edit,files){
            
            var idcliente = $container.find('input[name=idcliente]').val();
            var idexpediente = $container.find('input[name=idexpediente]').val();
            
            var edit = typeof edit != 'undefined' ? true : false;

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
            
            if(edit){
            
                //DROPZONE
                Dropzone.autoDiscover = false; 
                var myDropzone = new Dropzone("#mydropzone", {
                        url: "/clientes/ver/"+idcliente+"/expedientes/ver/"+idexpediente+"/dropzone",
                        addRemoveLinks: true,
                        dictRemoveFile:'Eliminar',
                        autoProcessQueue:true,
                        addedfile:function(file){    
    
                            var _this = this;
    
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
                                        url: "/clientes/ver/"+idcliente+"/expedientes/ver/"+idexpediente+"/dropzonedownload",
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
                                url: "/clientes/ver/"+idcliente+"/expedientes/ver/"+idexpediente+"/dropzonedelete",
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
                $.each(files, function (key, value) {


                    var mockFile = {id: value.id, name: value.name, size: value.size, url: '/Applications/AMPPS/www/itrade'};

                    myDropzone.options.addedfile.call(myDropzone, mockFile);

                    //SI ES IMAGEN AGREGAMOS EL THUMBNAIL
                    if (value.type.indexOf('image') >= 0) {
                        myDropzone.emit("thumbnail", mockFile, '/files/expedientes/' + idexpediente + '/' + value.name);
                    }


                });
                
                //NUEVO CARGO
                $container.find('a#nuevo_cargo_mxn,a#nuevo_cargo_usd').on('click',function(){
                    var id = $(this).attr('id');
                    var moneda = id.split('nuevo_cargo_');
                    var moneda = moneda[1];
                    $.ajax({
                            url:'/clientes/ver/'+idcliente+'/expedientes/ver/'+idexpediente+'/nuevocargo',
                            data:{id:idexpediente,moneda:moneda},
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
                
                //EDITAR CARGO
                $container.find('a.editar_cargo').on('click',function(){
                    var id = $(this).closest('tr').attr('id');
                    $.ajax({
                        url:'/clientes/ver/'+idcliente+'/expedientes/ver/'+idexpediente+'/editarcargo',
                        data:{id:id},
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
                
                //ELIMINAR CARGO
                $container.find('a.eliminar_cargo').on('click',function(){
                    
                    var id = $(this).closest('tr').attr('id');
                    $.ajax({
                        url:'/clientes/ver/'+idcliente+'/expedientes/ver/'+idexpediente+'/eliminarcargo',
                        data:{id:id},
                        success: function (source) {
                            source = $('<div>'+source+'</div>');
                            source.find('button[btn-action=eliminar]').on('click', function () {
                                $.ajax({
                                    url:'/clientes/ver/'+idcliente+'/expedientes/ver/'+idexpediente+'/eliminarcargo',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: {id: id},
                                    success: function (data) {
                                        if (data) {
                                            window.location.replace('/clientes/ver/'+idcliente+'/expedientes/ver/'+idexpediente);
                                        }
                                    }
                                });
                            });
                            $container.append(source);
                            source.find('.modal').modal();
                        }
                    });
                    
                });
                
                //DATATABLE FACTURACION

               /*
                * Insert a 'details' column to the table
                */

                $('#table_facturacion tr.details table tbody tr').filter(function(){

                    var id = $(this).closest('tr').attr('id');
                    var comprobante = $(this).find('td').eq('4').text();

                    if(comprobante == ""){
                        $(this).find('td').eq('4').text('N/D');
                    }else{
                        var file_icon = $('<a href="javascript:;"><i class="fa fa-file"></i></a>');
                        $(this).find('td').eq('4').html(file_icon);

                        //El evento click del archivo
                        file_icon.on('click',function(){
                            $.ajax({
                                url:'/clientes/ver/'+idcliente+'/expedientes/ver/'+idexpediente+'/getcomprobantefacturacion',
                                dataType:'json',
                                data:{id:id},
                                success:function(base64){
                                    download("data:"+base64.type+";base64,"+base64.base64,base64.name,base64.type);
                                }
                            });
                        });

                    }

                    var comprobante = $(this).find('td').eq('5').text();
                    if(comprobante == ""){
                        $(this).find('td').eq('5').text('N/D');
                    }
                });

                $('#table_facturacion tbody td i.collapse').css('cursor','pointer');
                $('#table_facturacion tbody td i.collapse').live('click', function () {

                    var tr = $(this).parents('tr')[0];
                    var nTr = $(tr).next('tr');
                    var visible = nTr.css('display');

                    if(visible == 'none'){
                        nTr.slideDown();
                        $(tr).find('i').removeClass('fa fa-plus-circle');
                        $(tr).find('i').addClass('fa fa-minus-circle');
                    }else{
                        nTr.slideUp();
                        $(tr).find('i').removeClass('fa fa-minus-circle');
                        $(tr).find('i').addClass('fa fa-plus-circle');
                    }

                });

                 
            }
            
            //INICIALIZAMOS NUESTROS SELECT
            $container.find("select").select2({
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


