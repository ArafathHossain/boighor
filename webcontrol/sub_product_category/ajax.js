// SUB MENU MANAGE SEARCE
function datewise()
{
	var cat_id = document.getElementById("cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "date_idbyresult.php?cat_id="+cat_id;
	
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
					HandleAjaxResponse_datewise(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_datewise(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}
/////////////////// OBJECT FUNCTION ////////////////////////
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