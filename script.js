$(document).ready(function(){ // Форма отправки отзыва у элемента
    $('#learning-hunter-form').submit(function(){
        setTimeout(function(){
            if(!$('input').is('.error')) {
                var name    = $('input[name="globalcontactform-name"]').val();
                var phone   = $('input[name="globalcontactform-phone"]').val();
                var email   = $('input[name="globalcontactform-email"]').val();
                var comment = $('textarea[name="globalcontactform-comment"]').val();
                var param   = "fio="+name+"&phone="+phone+"&email="+email+"&comment="+comment;
                $.ajax({
                    url:     '/local/ajax/learning.php', //url страницы
                    type:     "POST", //метод отправки
                    dataType: "html", //формат данных
                    data: param,
                    success: function(response) { //Данные отправлены успешно
                        var result = $.parseJSON(response);
                        if(result == 1){
                            $('#feedback-submit').prop('disabled', true);
                            $('#feedback-submit').val('Отзыв отправлен!');
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        console.log('Error: '+ errorThrown); //debug
                    }
                 });
            }
        }, 100);
        return false;
    });
});
