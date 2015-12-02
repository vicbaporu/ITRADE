$(document).ready(function(){
    
    //Validate requiered fields
    
    
    $('form').delegate('button[btn_action=submit]','click',function(e){
        
        var $form = $(this).closest('form');
        var empty = false;
        var error = false;
        
        $form.find('.error-control').removeClass('error-control');
        $form.find('span.error').html('');
        $form.find('i.fa-exclamation').removeClass('fa fa-exclamation');
        
        /*
         * VALIDACIONES DE CAMPOS VACIOS
         */
        
        //Validacion de campos vacios input
        $form.find('input[required]').each(function(){
            if($(this).val() == ""){
                empty = true;
                
                $(this).closest('div').addClass('error-control');
                $(this).siblings('i').addClass('fa fa-exclamation');
                $(this).closest('div').siblings('span.error').text('Este campo no puede ir vacío');
            }
        });
        
        //Validacion de campos vacios select
        $form.find('select[required]').each(function(){
            if($(this).val() == ""){
                empty = true;
                
                $(this).closest('div').addClass('error-control');
                //$(this).siblings('i').addClass('fa fa-exclamation');
                $(this).closest('div').siblings('span.error').text('Debe de seleccionar una opción');
            }
        });
        
        
        if(!empty){
            
            
                //LAS VALIDACIONES AJAX
               $form.find('input.validate-ajax').each(function(){

                   var url = $(this).attr('dirname');

                   var field = $(this).attr('name');
                   var value = $(this).val();

                   $.ajax({

                       url:url+'/validateajax',
                       type:'POST',
                          async: false,
                       data:{field:field,value:value},
                       success:function(data){
                          if(data.exist){
                              error = true;
                              $(this).closest('div').addClass('error-control');
                              $(this).siblings('i').addClass('fa fa-exclamation');
                              $(this).closest('div').siblings('span.error').text(data.msj);
                          }
                       }
                   });

               });
            
            console.log(empty);
            console.log(error);
            if(empty || error){
                e.preventDefault();
            }else{
                $form.submit();
            }
            
            
            
            
            
            
        }
        
        
        
        
        
        
    });
            
//        console.log($form);return;
//        $form.find('span.error').remove();
//        $form.find('[required]').removeClass('input-error');
//        
//        $form.find('[required]').each(function(){
//            if($(this).val() == ""){
//                empty = true;
//                $(this).addClass('input-error');
//                var $span = $(this).siblings('span.req');
//                $span.after('<span class="error"> campo obligatorio</span>');
//                return;
//            }
//            if($(this).hasClass('confirm')){
//                
//                var value = $(this).val();
//                var confirm_with = $(this).attr('for');
//                var $confirm_with = $form.find('[name="'+confirm_with+'"]');
//                var confirm_value = $confirm_with.val();
//               
//                if(value != confirm_value){
//                    error=true;
//                    $(this).addClass('input-error');
//                    var $span = $(this).siblings('span.req');
//                    $span.after('<span class="error"> Los campos no coinciden</span>');
//                    return;
//                }
//            }
//            
//        });
//        
//
//        if(empty || error){
//            e.preventDefault();
//        }




    
});


