
// MENU DELETE
function menu_delete(id)
{	
	var x = confirm("Are you sure to delete a menu permanently?");
	if(x)
	{
		sub_product_categories_delete_action(id);
	}
}

function sub_product_categories_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="sub_product_categories_delete_action.php?id="+id;
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
				HandleAjaxResponse_sub_product_categories_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_sub_product_categories_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	alert(xmlT);
	location.replace("index.php");
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