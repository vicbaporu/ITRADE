$(document).ready(function(){
    
    //Validate requiered fields
    
    
    $('form').delegate('button[btn_action=submit]','click',function(e){
        
        var $form = $(this).closest('form');

//        var empty = false;
//        var error = false;
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


   $form.validate({
           errorElement: 'span', 
           errorClass: 'error', 
           focusInvalid: false, 
           ignore: "",
           rules: {
               form1Email: {
                   required: true,
                   email: true
               },
           },

           invalidHandler: function (event, validator) {
//display error alert on form submit    
           },

           errorPlacement: function (error, element) { // render error placement for each input type
               var icon = $(element).parent('.input-with-icon').children('i');
               var parent = $(element).parent('.input-with-icon');
               icon.removeClass('icon-ok').addClass('icon-exclamation');  
               parent.removeClass('success-control').addClass('error-control');  
           },

           highlight: function (element) { // hightlight error inputs

           },

           unhighlight: function (element) { // revert the change done by hightlight
               
           },

           success: function (label, element) {
               var icon = $(element).parent('.input-with-icon').children('i');
var parent = $(element).parent('.input-with-icon');
               icon.removeClass("icon-exclamation").addClass('icon-ok');
parent.removeClass('error-control').addClass('success-control'); 
           },

           submitHandler: function (form) {
           
           }
       });

        
    });

    
});

