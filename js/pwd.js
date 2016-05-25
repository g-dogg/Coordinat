$(document).ready(function() {
    $(function(){
        var field = new Array("oldPassword", "newPassword", "confirmNewPassword");//поля обязательные
        $("form").submit(function() {// обрабатываем отправку формы
            var error=0; // индекс ошибки
            $("form").find(":input").each(function() {// проверяем каждое поле в форме
                for(var i=0;i<field.length;i++){ // если поле присутствует в списке обязательных
                    if($(this).attr("name")==field[i]){ //проверяем поле формы на пустоту
                        if(!$(this).val()){// если в поле пустое
                            $(this).css('border-bottom', 'red 1px solid');// устанавливаем рамку красного цвета
                            error=1;// определяем индекс ошибки
                        }
                        else{
                            $(this).css('border-bottom', 'green 1px solid');// устанавливаем рамку обычного цвета
                        }
                    }
                }
           })
            if(field[1] != field[2]){
                var err_text = "Введенные пароли не совпадают!";
                $(".message").html(err_text);
                $(".message").fadeIn("slow");
            }
            if(error==0){ // если ошибок нет то отправляем данные
                return true;
            }
            else{
                if(error==1) var err_text = "Не все обязательные поля заполнены!";
                $(".message").html(err_text);
                $(".message").fadeIn("slow");
                return false; //если в форме встретились ошибки , не  позволяем отослать данные на сервер.
            }
        });
    });
 });