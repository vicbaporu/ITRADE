$( document ).ready(function() 
{
    var pathname = window.location.pathname;
    if(pathname == "/")
    {
        deleteActive();
        $("#navInicio").addClass("active");
    }
    else if(pathname.indexOf("/servicios") != -1)
    {
        deleteActive();
        $("#navServicios").addClass("active");
    }
    /*
    else if(pathname.indexOf("/recursos") != -1)
    {
        deleteActive();
        $("#navServicios").addClass("active");
    }
    */
    else if(pathname.indexOf("/contacto") != -1)
    {
        deleteActive();
        $("#navContacto").addClass("active");
    }
});

function deleteActive()
{
    $("#navInicio").removeClass("active");
    $("#navServicios").removeClass("active");
    $("#navRecursos").removeClass("active");
    $("#navContacto").removeClass("active");
}

