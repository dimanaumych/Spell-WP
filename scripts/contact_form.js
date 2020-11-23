jQuery(document).ready(function($) {
    //использование jQuery как $

    // $('#form-one .form-button').prop('disabled', true);
    // $('#form-one .form-button').css('opacity', 0.4);


    // function checkInputs(){
    //     let name = $('#user-name').val();
    //     let phone = $('#user-phone').val();
    //     let additional_info = $('#additional_info').val();
    //     let x = 0;
    //     // let last = phone.slice(-1);
    //     for(let i = 0; i < phone.length; i++){
    //         if(isNaN(phone[i]) == false){
    //             x++;
    //         }
    //     }
    //     // console.log(isNaN(last));
    //     if(name !== '' && x == 13 && phone!=='') {
    //         $('#form-one button').removeAttr('disabled');
    //         $('#form-one button').css('opacity', 1);
    //     }else{
    //         $('#form-one button').prop('disabled', true);
    //         $('#form-one button').css('opacity', 0.4);
    //     }
    //
    // }
    // $('#user-name-one').keyup(()=> {
    //     checkInputs();
    // });
    // $('#user-phone-one').keyup(()=> {
    //     checkInputs()
    // });

    $('#call-back-form').submit(function (e) {
        if($('#user-name').val() == '' || $('#user-phone').val() == '' ){
            alert('Одно из полей не заполнено!');
        }
        else {
            $('#call-back-form button').prop('disabled', false);
            let input_value_name = $('#user-name').val();
            let client_name = input_value_name;
            let input_value_phone = $('#user-phone').val();
            let input_value_additional_info = $('#user-additional-info').val();
            input_value_name = '1) Заявку оставил клиент с именем: ' + input_value_name
            + '\n2) Номер телефона: ' + input_value_phone +
            '\n3)' + input_value_additional_info;

            console.log(input_value_name);
            $.ajax({
                type: 'POST',
                url: '/wp-content/themes/twt/mail.php',
                data: 'contact=' + input_value_name,
            }).done(function (data) {
                $('#user-name').val('');
                $('#user-phone').val('');
                $('#user-additional-info').val('');
                alert('Спасибо за обращение, ' + client_name + ', ваша заявка приянта в обработку');
                console.log(data);
            }).fail(function (data) {
                console.log(data);
            });
            //отмена действия по умолчанию для кнопки submit
            e.preventDefault();
        }
    });

});