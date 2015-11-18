$( document ).ready(function() 
{

  $('#collapsibleUno').collapse();
  

  $('#detalleMaritimo').on("click",function()
  {
    if(!$('#collapsiblePanel').hasClass('alert-maritimo') )
    {
        $('#collapsiblePanel').removeClass();
        $('#collapsiblePanel').addClass(
          " alert alert-maritimo"
          );
        if(!$("#collapsibleUno").hasClass('in'))
          $('#collapsibleUno').collapse('toggle');
    }
    else
    {
        $('#collapsibleUno').collapse('toggle');
    }

  });

  $('#detalleAereo').on('click',function()
  {
    if(!$('#collapsiblePanel').hasClass('alert-aereo') )
    {
        $("#imgTransportes").attr("src","/img/Servicios/aereoFocus.jpg");
        $('#collapsiblePanel').removeClass();
        $('#collapsiblePanel').addClass(
          " alert alert-aereo"
          );
        if(!$("#collapsibleUno").hasClass('in'))
        {
          $('#collapsibleUno').collapse('toggle');

          var src = $("#imgTransportes").attr('src');
          if(src != "/img/Servicios/aereoFocus.jpg")
            $("#imgTransportes").attr("src","/img/Servicios/Servicios-transporte.jpg");
          else
            $("#imgTransportes").attr("src","/img/Servicios/aereoFocus.jpg");
            
        }
    }
    else
    {
      
      $('#collapsibleUno').collapse('toggle');

      var src = $("#imgTransportes").attr('src');
      if(src == "/img/Servicios/aereoFocus.jpg")
        $("#imgTransportes").attr("src","/img/Servicios/Servicios-transporte.jpg");
      else
        $("#imgTransportes").attr("src","/img/Servicios/aereoFocus.jpg");

        
    }

  });

  $('#detalleTerrestre').on('click',function()
  {
    if(!$('#collapsiblePanel').hasClass('alert-terrestre') )
    {
        $('#collapsiblePanel').removeClass();
        $('#collapsiblePanel').addClass(
          " alert alert-terrestre"
          );
         
        if(!$("#collapsibleUno").hasClass('in'))
          $('#collapsibleUno').collapse('toggle');
    }
    else
    {
        $('#collapsibleUno').collapse('toggle');
    }

  });

});



