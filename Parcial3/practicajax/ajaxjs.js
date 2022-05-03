$(document).ready( function() {
$("#ajax").click(presionBoton);

function presionBoton() {
    var parnum = $("#num").val();
    $.get("ajaxphp.php", {num: parnum}, llegadaDatos);
}

function llegadaDatos(datos) {
    $('#resultado').html('<h3>Tu edad es '+datos+'</h3>');
}
});
