$( document ).ready(function() 
{

  //Codigo para transicion propuesta en detalle
  //$('#collapsibleUno').collapse();
  $('#detalleAduanaMaritimo').on("click",function()
  {
    if(!$('#collapsiblePanel').hasClass('alert-maritimo') )
    {
        $('#collapsiblePanel').removeClass();
        $('#collapsiblePanel').addClass(
          " alert alert-maritimo"
          );
        if(!$("#collapsibleUno").hasClass('in'))
          $('#collapsibleUno').collapse('toggle');

          var src = $("#imgTransportes").attr('src');

          if(src == "/img/Servicios/maritimoFocus.jpg")
            $("#imgTransportes").attr("src","/img/Servicios/Servicios-transporte.jpg");
          else
            $("#imgTransportes").attr("src","/img/Servicios/maritimoFocus.jpg");
        
    }
    else
    {
        $('#collapsibleUno').collapse('toggle');

        var src = $("#imgTransportes").attr('src');
          if(src == "/img/Servicios/maritimoFocus.jpg")
            $("#imgTransportes").attr("src","/img/Servicios/Servicios-transporte.jpg");
          else
            $("#imgTransportes").attr("src","/img/Servicios/maritimoFocus.jpg");
    }

  });

  $('#detalleAduanaAereo').on('click',function()
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




  //Codigo para mandar la entrada de la transición de detalle
  $(function() 
  {
    // run the currently selected effect
    function runEffect() 
    {
      // get effect type from
      var selectedEffect = "drop";
 
      // most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 0 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }
 
      // run the effect
      $( "#detalleAduana" ).toggle( selectedEffect, options, 500 );
    };
 
    // set effect from select menu value
    $( "#btnAduana" ).click(function() {
      runEffect();
    });
    $( "#aduanaClose" ).click(function() {
      $( "#btnAduana" ).click();
    });
  });
  //Codigo para setear la posición de cuadro de detalle
  var width = $("#imgTransportes").width();
  var height = $("#imgTransportes").height();

  $("#detalleAduana").css("display","none"); 
  $("#detalleAduana").css("position","relative");
  $("#detalleAduana").css("background-color","rgba(0,0,0,.8)");
  $("#detalleAduana").css("color","white");
  $("#detalleAduana").css("opacity","1");

  $("#detalleAduana").css("bottom",height);
  $("#detalleAduana").css("margin-bottom",-height);
  $("#detalleAduana").css("left",width/3);

  $("#detalleAduana").css("height",height);
  $("#detalleAduana").css("width", (width/3)*2  );
  $("#detalleAduana").css("marginleft"," 24em");

});