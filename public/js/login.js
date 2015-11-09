$( document ).ready(function() 
{
  $("#txtPass").keyup(function()
  {
    
    if($("#txtPass").val() != "" && $("#txtUser").val())
    {
      $("#plhPass").addClass("iconButton"); 
    }
    else
    {
      $("#plhPass").removeClass("iconButton");
    }
  });

  $("#txtUser").keyup(function()
  {
    
    if($("#txtPass").val() != "" && $("#txtUser").val())
    {
      $("#plhPass").addClass("iconButton"); 
    }
    else
    {
      $("#plhPass").removeClass("iconButton");
    }
  });

  $("#plhPass").on("click",function()
  {
    
    if($("#txtPass").val() != "" && $("#txtUser").val())
    {
      alert('Mando log in');
    }
  });


});



