$( document ).ready(function() 
{
	var entroEng = false;
	var entroEsp = false;

	$("#imgEng").mouseover(function() 
	{
		var src = $('#imgEng').attr('src');
		if(src == "/img/inglesH.png")
		{
  			$("#imgEng").attr("src","/img/ingles.png")
  			entroEng = true;
  		}
	});
	$("#imgEng").mouseleave(function() {
  		var src = $('#imgEng').attr('src');
		if(src == "/img/ingles.png" && entroEng == true)
  			$("#imgEng").attr("src","/img/inglesH.png")
	});

	$("#imgEsp").mouseover(function() 
	{
		var src = $('#imgEsp').attr('src');
		if(src == "/img/españolH.png")
		{
  			$("#imgEsp").attr("src","/img/español.png")
  			entroEsp = true;
  		}
	});
	$("#imgEsp").mouseleave(function() {
  		var src = $('#imgEsp').attr('src');
		if(src == "/img/español.png" && entroEsp == true)
  			$("#imgEsp").attr("src","/img/españolH.png")
	});

    if(getLang("es"))
    {
        $("#imgEsp").attr("src","/img/español.png");
        $("#imgEng").attr("src","/img/inglesH.png");
    }
    else if(getLang("en"))
    {
        $("#imgEsp").attr("src","/img/españolH.png");
        $("#imgEng").attr("src","/img/ingles.png");
    }


});

function getLang(VarSearch)
{
    var SearchString = window.location;

        
    var VariableArray = SearchString.toString().split("/");
    
    for(var c=0; c< VariableArray.length; c++)
    {
        if(VariableArray[c] == VarSearch)
            return true;
    }
    
}



