var contador;

$(document).ready(function(){
    //cargarmensajes();
    setInterval("cargarMensajes()",500);
});

function registrarMensajes(){
    var frm = $("#formchat").serialize();
    $("#mensaje").val("");

    $.ajax({
        type: "POST",
        url: "DB/registrar.php",
        data: frm
    }).done(function(info){
        console.log(info);
        scroll();
    });

    return false;
}

function cargarMensajes(){
    $.ajax({
        type: "GET",
        url: "DB/conseguirConversacion.php",
    }).done(function(info){
        $("#conversacion").html(info);

        if(contador != info.length){
            contador = info.length;
            scroll();
        }
    });   
}

function scroll(){
    var altura = $("#conversacion").prop("scrollHeight");
    $("#conversacion").scrollTop(altura);
}

function borrarConversacion(){
    $.ajax({
        type: "GET",
        url: "DB/borrarConversacion.php",
    }).done(function(info){
        $("#conversacion").html(info);

        window.location = "index.php";
    });   
}