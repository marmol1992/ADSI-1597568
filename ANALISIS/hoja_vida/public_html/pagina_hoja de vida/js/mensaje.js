alert("Welcome ");


   
function ConfirmDemo(){
//Ingresamos un mensaje a mostrar
var mensaje = confirm("Before you start¿You're the instructor, Julian?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
alert("¡Welcome instructor JULIAN!");
}
//Detectamos si el usuario denegó el mensaje
else {
cierra_ventana();    
alert("¡This site will be closed !");
}
}
function cierra_ventana()
{
window.open('','_parent','');
window.close(); 
}


              