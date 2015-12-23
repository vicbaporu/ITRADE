$( document ).ready(function() 
{
  if($("#txtPass").val() != "" && $("#txtUser").val() != "")
  {
    alert('hi');
    $("#plhPass").addClass("iconButton");
    $("#plhPass").attr("src", "/img/passH.png");
  }

  $("#txtPass").keyup(function()
  {
    
    if($("#txtPass").val() != "" && $("#txtUser").val())
    {
      $("#plhPass").addClass("iconButton");
      $("#plhPass").attr("src", "/img/passH.png");
    }
    else
    {
      $("#plhPass").removeClass("iconButton");
      $("#plhPass").attr("src", "/img/pass.png");
    }
  });

  $("#txtUser").keyup(function()
  {
    
    if($("#txtPass").val() != "" && $("#txtUser").val())
    {
      $("#plhPass").addClass("iconButton");
      $("#plhPass").attr("src", "/img/passH.png");
    }
    else
    {
      $("#plhPass").removeClass("iconButton");
      $("#plhPass").attr("src", "/img/pass.png");
    }
  });

  $("#plhPass").on("click",function()
  {
    
    if($("#txtPass").val() != "" && $("#txtUser").val())
    {
      $("#btnLogin").click();
    }
  });


});



