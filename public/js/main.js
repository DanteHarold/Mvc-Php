const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton => {

    boton.addEventListener("click", function(){
        const matricula = this.dataset.matricula;
        const confirm = window.confirm("¿Deseas eliminar al alumno " + matricula + "?");

        if(confirm){
            // solicitud AJAX
            httpRequest("http://localhost/Mvc-Php/consulta/eliminarAlumno/" + matricula, function(){
                console.log(this.responseText);
               // document.querySelector("#respuesta").innerHTML = this.responseText;

                const tbody = document.getElementById('tbody-alumnos');
                const fila  = document.getElementById(`fila-${matricula}`);
                console.log(fila);
                tbody.removeChild(fila);
            });
        }else{
            console.log("Error");
        }
    });
});

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}