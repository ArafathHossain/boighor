// SUB MENU MANAGE SEARCE 
function search_reg_field()
{
	var search_field = document.getElementById("search_field").value;
	if(search_field == "Search")
	{
		document.getElementById("search_field").value = "";
	}
	
	
	if(search_field == "")
	{
		document.getElementById("search_field").value = "Search";
	}
}

// SUB MENU MANAGE SEARCE
function left_search_view()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "left_search_view.php?search_field="+search_field;
	
	var browser=navigator.appName;
	if (browser=="Microsoft Internet Explorer")
		{
			xmlRequest.open("POST",url, true);
		}
	else
		{
			xmlRequest.open("GET",url, true);
		}
	xmlRequest.setRequestHeader("Content-Type", "application/x-www-formurlencoded");
	xmlRequest.onreadystatechange =function()
		{
			if(xmlRequest.readyState==4)
				{							
					HandleAjaxResponse_left_search_view(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_left_search_view(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}




// OBJECT FUNCTION
function GetXmlHttpObject()
{		
	var xmlHttp=null;
	try
	{
	   xmlHttp=new XMLHttpRequest();
	}
	catch (e)
	{
		// Internet Explorer
		try
			{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
		catch (e)
			{
				xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
			}
	}
	return xmlHttp;  
}