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
        
        plugin.formBind = function(files){

         //EL ID DEL PROVEEDOR
         var id = $container.find('input[name=idproveedoritrade]').val();
         

        Dropzone.autoDiscover = false;  
        
         var myDropzone = new Dropzone("#mydropzone", { 
             url: "/catalogo/proveedores/dropzone",
             addRemoveLinks: true,
             dictRemoveFile:'Eliminar',
             removedfile: function(file) {
                $.ajax({
                    type: 'POST',
                    url: '/catalogo/proveedores/dropzonedelete',
                    data: {id:file.id},
                    dataType: 'json',
                    success:function(data){
                        
                        if(data){
                            var _ref;
                            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                        }
                        
                    }
                    
                });
             },
            addedfile: function (file) {
      
                var _this = this;
                
                file.previewElement = Dropzone.createElement(this.options.previewTemplate);
                file.previewTemplate = file.previewElement;
                this.previewsContainer.appendChild(file.previewElement);
                file.previewElement.querySelector("[data-dz-name]").textContent = file.name;
                file.previewElement.querySelector("[data-dz-size]").innerHTML = this.filesize(file.size);
                if (this.options.addRemoveLinks && typeof file.status == 'undefined') {
                    file._removeLink = Dropzone.createElement("<a class=\"dz-remove\" href=\"javascript:undefined;\">" + this.options.dictRemoveFile + "</a>");
                    file._downloadLink = Dropzone.createElement("<a class=\"dz-download\" href="+file.status+"><i class=\"fa fa-download\"></i></a>");
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
                            url: '/catalogo/proveedores/dropzonedownload',
                            data: {id: file.id},
                            dataType: 'json',
                            success: function (base64) {

                                download("data:"+base64.type+";base64,"+base64.base64,base64.name,base64.type);

                            }

                        });
                         
                     });
                    file.previewElement.appendChild(file._removeLink);
                    file.previewElement.appendChild(file._downloadLink);
                }
                return this._updateMaxFilesReachedClass();
            },
         });
         
         
         myDropzone.autoDiscover = false;

         myDropzone.on('sending', function(file, xhr, formData){
            formData.append('id', id);
        });
        

        
        
        $.each(files,function(key,value){
            
            
            var mockFile = { id:value.id,name: value.name, size: value.size, url:'/Applications/AMPPS/www/itrade' }; 
            
            myDropzone.options.addedfile.call(myDropzone, mockFile); 
            
            //SI ES IMAGEN AGREGAMOS EL THUMBNAIL
            if(value.type.indexOf('image') >= 0){
                myDropzone.emit("thumbnail", mockFile, '/files/proveedores/'+id+'/'+value.name);
            }
            
            
        });
        
        
//       
//       $container.find('#mydropzone').dropzone({ url: "/catalogo/proveedores/dropzone" }).on('sending', function(file, xhr, formData){
//            console.log(formData);
//        });
       
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


