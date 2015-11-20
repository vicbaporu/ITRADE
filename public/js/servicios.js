$( document ).ready(function() 
{

  //Codigo para mandar la entrada de la transición de detalle
  $(function() 
  {
    // run the currently selected effect
    function runEffect(component, dir) 
    {
      // get effect type from
      var selectedEffect = "drop";
  
      // most effect types need no options passed by default
      
      options = { direction: dir };
 
      // run the effect
      $( "#"+ component).toggle( selectedEffect, options, 400 );
    };
 
    //Efecto maritimo
    $( "#btnMaritimo" ).click(function() {
      runEffect("detalleMaritimo","left");
    });
    $( "#maritimoClose" ).click(function() {
      $( "#btnMaritimo" ).click();
    });

    //Efecto Aereo
    $( "#btnAereo" ).click(function() {
      runEffect("detalleAereo","up");
    });
    $( "#aereoClose" ).click(function() {
      $( "#btnAereo" ).click();
    });

    $( "#btnTerrestre" ).click(function() {
      runEffect("detalleTerrestre","right");
    });
    $( "#terrestreClose" ).click(function() {
      $( "#btnTerrestre" ).click();
    });

    $( "#btnAduana" ).click(function() {
      runEffect("detalleAduana","left");
    });
    $( "#aduanaClose" ).click(function() {
      $( "#btnAduana" ).click();
    });


    $( "#btnLogistica" ).click(function() {
      runEffect("detalleLogistica","right");
    });
    $( "#logisticaClose" ).click(function() {
      $( "#btnLogistica" ).click();
    });



  });


  //Codigo para setear la posición de cuadro de detalle
  var width = $("#imgTransportes").width();
  var height = $("#imgTransportes").height();

  $("#detalleMaritimo").css("display","none"); 
  $("#detalleMaritimo").css("position","relative");
  $("#detalleMaritimo").css("background-color","rgba(0,0,0,.8)");
  $("#detalleMaritimo").css("color","white");
  $("#detalleMaritimo").css("opacity","1");

  $("#detalleMaritimo").css("bottom",height);
  $("#detalleMaritimo").css("margin-bottom",-height);
  $("#detalleMaritimo").css("left",width/3);

  $("#detalleMaritimo").css("height",height);
  $("#detalleMaritimo").css("width", (width/3)*2  );


  $("#detalleTerrestre").css("display","none"); 
  $("#detalleTerrestre").css("position","relative");
  $("#detalleTerrestre").css("background-color","rgba(0,0,0,.8)");
  $("#detalleTerrestre").css("color","white");
  $("#detalleTerrestre").css("opacity","1");

  $("#detalleTerrestre").css("bottom",height);
  $("#detalleTerrestre").css("margin-bottom",-height);
  $("#detalleTerrestre").css("right",0);

  $("#detalleTerrestre").css("height",height);
  $("#detalleTerrestre").css("width", (width/3)*2  );


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


  $("#detalleLogistica").css("display","none"); 
  $("#detalleLogistica").css("position","relative");
  $("#detalleLogistica").css("background-color","rgba(0,0,0,.8)");
  $("#detalleLogistica").css("color","white");
  $("#detalleLogistica").css("opacity","1");

  $("#detalleLogistica").css("bottom",height);
  $("#detalleLogistica").css("margin-bottom",-height);

  $("#detalleLogistica").css("height",height);
  $("#detalleLogistica").css("width", (width/3)*2  );

  $("#detalleAereo").css("display","none"); 
  $("#detalleAereo").css("position","relative");
  $("#detalleAereo").css("background-color","rgba(0,0,0,.9)");
  $("#detalleAereo").css("color","white");
  $("#detalleAereo").css("opacity","1");

  //$("#detalleAereo").css("bottom",height);
  //$("#detalleAereo").css("margin-bottom",-height);

  $("#detalleAereo").css("height",height);
  $("#detalleAereo").css("width", width );

});