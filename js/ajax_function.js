

/*ADD TO TEMP CARD*/
function add_temp_card(pro_id, pro_price, pro_name)
{		
	var quantity = document.getElementById("quantity").value;
	if(quantity == "") { alert("Please Enter Quantity. ");					quantity.focus();		return false; }
	if(quantity < 1) { alert("Please Enter Quantity Minimum 1 yrd. ");		quantity.focus();		return false; }

	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url = "add_temp_card.php?quantity="+quantity+"&pro_id="+pro_id+"&pro_price="+pro_price;
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
				HandleAjaxResponse_add_temp_card(xmlRequest, pro_name);
			}
		};
			xmlRequest.send(null);
			return false; 
} 
function HandleAjaxResponse_add_temp_card(xmlRequest, pro_name)
{
	var xmlT=xmlRequest.responseText;
	var alertmessage = pro_name + " Added to cart.";
	//alert(alertmessage);
	location.replace("check_out.php");	
	document.getElementById("add_temp_card").innerHTML=xmlT;
	return false;
}

/*DELETE PRODUCT FROM CART*/
function remove_product(pro_id)
{
	var yn = confirm("Are you sure to Delete this Product from the list?");
	if(yn)
	{
		remove_product_action(pro_id);	
	} else {		
		return false;	
	}	
}

function remove_product_action(pro_id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="remove_product.php?pro_id="+pro_id;
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
				HandleAjaxResponse_remove_product_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false; 
} 
function HandleAjaxResponse_remove_product_action(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	location.replace("check_out.php");	
	return false;
}


/*DELETE PRODUCT FROM CART*/
function remove_product_from_proceed(pro_id)
{
	var yn = confirm("Are you sure to Delete this Product from the list?");
	if(yn)
	{
		remove_product_from_proceed_action(pro_id);	
	} else {		
		return false;	
	}	
}

function remove_product_from_proceed_action(pro_id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="remove_product.php?pro_id="+pro_id;
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
				HandleAjaxResponse_remove_product_from_proceed_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false; 
} 
function HandleAjaxResponse_remove_product_from_proceed_action(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	location.replace("check_out.php");	
	return false;
}

/* OBJECT FUNCTION */
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
