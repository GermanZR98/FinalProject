$(function(){

});

function leer(){
    $.ajax({
        type:"POST",
        url:"leer.php",
        data:{"dato":dato},
        success:function(r){
            $("#respuesta").html(r);
        }
    });
}