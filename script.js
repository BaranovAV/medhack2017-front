$("#contactForm").submit(function(event){
	//$( "#succesMessage" ).removeClass( "hidden" );
    // отменяет отправку данных формы
    event.preventDefault();
    submitStartForm();
});

function submitStartForm(){
    // Инициируем переменную с содержимым формы
    var name = $("#inputName3").val();
    var email = $("#inputEmail3").val();
    var passwd = $("#inputPassword3").val();


    $.ajax({
        type: "POST",
        url: "process.php",
        data: "name=" + name + "&email=" + email + "&password=" + passwd,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
    formSuccess();
}
function formSuccess(){
    $( "#succesMessage" ).removeClass( "hidden" );
    //wait
    setTimeout('document.location.replace("proceed.html")', 1000);
}