//
// $(document).ready(function () {
//
//
// $('.phone-span').hide();
// $('.name-validation').hide();
// var errorName = false;
//
// $('.myname').blur(function () {
//     name();
// });
//
// function name() {
//     var name_input = $('.myname').val();
//     if (name_input === '') {
//         $('.name-validation').text('ادخل اسمك').css('color','red');
//         $('.name-validation').show();
//         $('.myname').addClass('box');
//          errorName = true;
//     } else {
//         $('.name-validation').hide();
//         $('.myname').removeClass('box');
//     }
// }
//
// $('.register-form-validation').submit(function (event) {
//     var myPhone = $('.phone').val();
//
//     var myRegPhone = /^((012)|(010)|(011)|(015))[0-9]{8}$/;
//
//     errorName = false;
//     name();
//
//     if (myRegPhone.test(myPhone) && errorName === false) {
//         return true;
//     }
//
//     else if (!myRegPhone.test(myPhone)) {
//             $('.phone-span').text('ادخل رقم محمول صحيح').css('color','red');
//             $('.phone-span').show();
//             $('.phone').addClass('box');
//             return false;
//         }
//
//         else if (errorName === true){
//             return false;
//         }
//
//
//
//     // event.preventDefault();
//
//
//
// });
//
// });

$(function () {



    $.validator.setDefaults({
       highlight: function (element) {
           $(element).closest('.form-group').addClass('has-error');
       }
    });

    $.validator.setDefaults({
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error');
        }
    });

    $.validator.addMethod('Phone',function (value, element) {
        return this.optional(element)
            || value.length >= 11 && /((012)|(010))[0-9]{8}/.test(value);

    },'Enter a valid Phone');

    $.validator.addMethod('noNumbers',function (value, element) {
        return this.optional(element)
            || value.length >= 2 && /^[a-zA-Z\u0621-\u064A]+$/.test(value);

    },'Enter a valid Name');

    $.validator.addMethod('noNumbersUserName',function (value, element) {
        return this.optional(element)
            || value.length >= 4;

    },'Enter a valid Name');
    
    $.validator.addMethod('strongPassword',function (value,element) {
       return this.optional(element)
        || value.length >= 6
        && /\d/.test(value)
        && /[a-z]/i.test(value);
    },'Your Password must be at least 6 characters long and contain at least 1 number and one char');

    $('.register-form-validation').validate({
        rules: {
            name: {
                noNumbers: true
            },
            username: {
                noNumbersUserName:true,
            },
            phone_number :{
                Phone: true,
            },

            password: {
                strongPassword: true,
            },

            password_confirmation: {
                equalTo: '#password'
            },
            email: {
                // remote: {
                //     url: '{{url("checkemail")}}',
                //     // type: "POST",
                //     // data: {
                //     //     /*email was the action and it will be sent as request key name*/
                //     //     email: function() {
                //     //         return $( "#email" ).val(); //your email field
                //     //     }
                //     // }
                // }
            }
        },

        messages: {
            name: {
              noNumbers: 'ادخل حروف فقط',
                required: 'الحقل فارغ'
            },

            username: {
                noNumbersUserName:'طول الاسم يجب ان يكون 4 حروف او اكثر',
                required: 'الحقل فارغ'
            },

            phone_number: {
                Phone: '<span class="phone-span">ادخل رقم صحيح</span>',
                required: 'الحقل فارغ'
            },
            password: {
                required: 'الحقل فارغ',
                strongPassword: 'كلمة السر يجب ان تكون 6 حروف او ارقام(على الاقل حرف و رقم)',
            },

            password_confirmation: {
                equalTo: 'تاكد من تكرار كلمة السر',
                required: 'الحقل فارغ'
            },
            email:{
                required: 'الحقل فارغ',
                email: 'ادخل بريد الكترونى صحيح',
                // remote: 'هذا البريد الاكترونى مسجل لدينا'
            },
        }
    });



    // Create flat form

    $('.create-form-validation').validate({

       rules: {
           flat_location: {
               required: true
           },

           flat_address: {
               required: true
           },

           book_duration: {
               required: true
           },

           flat_price: {
               required: true
           },

           bed_price: {
               required: true
           },

           flat_description: {
               required: true
           }
       },

        messages: {
            flat_location: {
                required: 'الحقل فارغ',
            },

            flat_address: {
                required: 'الحقل فارغ'
            },

            book_duration: {
                required: 'الحقل فارغ'
            },

            flat_price: {
                required: 'الحقل فارغ'
            },

            bed_price: {
                required: 'الحقل فارغ'
            },

            flat_description: {
                required: 'الحقل فارغ'
            }
        }

    });


    // function duplicateEmail(element){
    //     var email = $(element).val();
    //     $.ajax({
    //         type: "POST",
    //         url: '{{url('checkemail')}}',
    //         data: {email:email},
    //         dataType: "json",
    //         success: function(res) {
    //             if(res.exists){
    //                 alert('true');
    //             }else{
    //                 alert('false');
    //             }
    //         },
    //         error: function (jqXHR, exception) {
    //
    //         }
    //     });
    // }



});