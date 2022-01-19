
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })    
    })
  
  
    /*==================================================================
    [ Validate ]*/
    var subjects = $('.validate-input input[name="subjects"]');
    var copiesAva = $('.validate-input input[name="copiesAva"]');
    var refbook = $('.validate-input input[name="refbook"]');
    var percentage = $('.validate-input input[name="percentage"]');
    var copiesReq = $('.validate-input input[name="copiesReq"]');
    


    $('.validate-form').on('submit',function(){
        var check = true;

        if($(subjects).val().trim() == ''){
            showValidate(subjects);
            check=false;
        }

        if($(refbook).val().trim() == ''){
            showValidate(refbook);
            check=false;
        }

        if($(copiesAva).val().trim() == ''){
            showValidate(copiesAva);
            check=false;
        }

        if($(percentage).val().trim() == ''){
            showValidate(percentage);
            check=false;
        }

        if($(copiesReq).val().trim() == ''){
            showValidate(copiesReq);
            check=false;
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);