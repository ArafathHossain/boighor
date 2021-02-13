
// PURCHASE ENTRY SEARCE
function oder_status_view()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "purchase_entry_search.php?search_field="+search_field;
	
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
					HandleAjaxResponse_oder_status_view(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_oder_status_view(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}
// PRODUCT MANAGE SEARCE 
function product_manage_field()
{
	var search_field = document.getElementById("search_field").value;
	if(search_field == "Search Product Manage")
	{
		document.getElementById("search_field").value = "";
	}
	
	
	if(search_field == "")
	{
		document.getElementById("search_field").value = "Search Product Manage";
	}
}

// PRODUCT MANAGE SEARCE
function product_manage_search()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "product_manage_search.php?search_field="+search_field;
	
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
					HandleAjaxResponse_product_manage_search(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_product_manage_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}


// PAYMENT TO SUPPLIER SEARCE
function payment_to_supplier_search()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "payment_to_supplier_search.php?search_field="+search_field;
	
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
					HandleAjaxResponse_payment_to_supplier_search(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_payment_to_supplier_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}

// SUPPLIER MANAGE SEARCE 
function supplier_manage_search_field()
{
	var search_field = document.getElementById("search_field").value;
	if(search_field == "Search Merchant Company")
	{
		document.getElementById("search_field").value = "";
	}
	
	
	if(search_field == "")
	{
		document.getElementById("search_field").value = "Search Merchant Company";
	}
}

// SUPPLIER MANAGE SEARCE
function supplier_manage_search()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "supplier_manage_search.php?search_field="+search_field;
	
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
					HandleAjaxResponse_supplier_manage_search(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_supplier_manage_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}

// EXPENSE TRANSACTION SEARCH FIELD SET
function expense_transction_search_field()
{
	var search_field = document.getElementById("search_field").value;
	if(search_field == "Search Item Transction")
	{
		document.getElementById("search_field").value = "";
	}
	
	
	if(search_field == "")
	{
		document.getElementById("search_field").value = "Search Item Transction";
	}
}

// SEARCH EXPENSE TRANSACTION LIST
function expense_item_transction_search()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "expense_item_transction_search.php?search_field="+search_field;
	
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
					HandleAjaxResponse_expense_item_transction_search(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_expense_item_transction_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_item").innerHTML=xmlT;		
	return false;
}
// EXPENSE SEARCH FIELD SET
function expense_search_field()
{
	var search_field = document.getElementById("search_field").value;
	if(search_field == "Search Expense Item")
	{
		document.getElementById("search_field").value = "";
	}
	
	
	if(search_field == "")
	{
		document.getElementById("search_field").value = "Search Expense Item";
	}
}

// SEARCH EXPENSE LIST
function expense_search()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "expense_search.php?search_field="+search_field;
	
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
					HandleAjaxResponse_expense_search(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_expense_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}
// PARTY/CUSTOMER MANAGE SEARCE 
function party_customer_search_field()
{
	var search_field = document.getElementById("search_field").value;
	if(search_field == "Search Party/Customer Manage")
	{
		document.getElementById("search_field").value = "";
	}
	
	
	if(search_field == "")
	{
		document.getElementById("search_field").value = "Search Party/Customer Manage";
	}
}
//PARTY/CUSTOMER MANAGE SEARCE
function party_customer_search()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "purty_customer_manage_search.php?search_field="+search_field;
	
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
					HandleAjaxResponse_party_customer_search(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_party_customer_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}

//PRODUCT DISTRIBUTE SEARCH
function product_distribute_search_field()
{
	var search_field = document.getElementById("search_field").value;
	if(search_field == "Search Product Distribute")
	{
		document.getElementById("search_field").value = "";
	}
	
	
	if(search_field == "")
	{
		document.getElementById("search_field").value = "Search Product Distribute";
	}
}

// PRODUCT DISTRIBUTE SEARCH


// PRODUCT Name Search
function seller_wise_product()
{
	var brance_name = document.getElementById("brance_name").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "seller_wise_product_view.php?brance_name="+brance_name;
	
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
					HandleAjaxResponse_seller_wise_product(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_seller_wise_product(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_seller_product_view").innerHTML=xmlT;		
	return false;
}




// USER MANAGE SEARCE 
function user_manage_search_field()
{
	var search_field = document.getElementById("search_field").value;
	if(search_field == "Search User Manage")
	{
		document.getElementById("search_field").value = "";
	}
	
	
	if(search_field == "")
	{
		document.getElementById("search_field").value = "Search User Manage";
	}
}

// USER MANAGE SEARCE
function user_manage_search()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "user_manage_search.php?search_field="+search_field;
	
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
					HandleAjaxResponse_user_manage_search(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_user_manage_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}

// profit Loss calculation
function profit_loss_report_view()
{
	var brance_name = document.getElementById("brance_name").value;
	var from_date = document.getElementById("from_date").value;
	if(from_date == ""){alert("Please Enter From Date "); return false;}
	
	var to_date = document.getElementById("to_date").value;
	if(to_date == ""){alert("Please Enter To Date"); return false;}
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
	
	var url = "profit_loss_report_view.php?brance_name="+brance_name+"&from_date="+from_date+"&to_date="+to_date;
	
	
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
					HandleAjaxResponse_profit_loss_report_view(xmlRequest);
				}
		};
	xmlRequest.send(null);			

	return false;
}

function HandleAjaxResponse_profit_loss_report_view(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_profit_loss_view").innerHTML=xmlT;		
	return false;
}



function profit_loss_report_user_wise_view()
{
	var user_name = document.getElementById("user_name").value;
	var from_date = document.getElementById("from_date").value;
	if(from_date == ""){alert("Please Enter From Date "); return false;}
	
	var to_date = document.getElementById("to_date").value;
	if(to_date == ""){alert("Please Enter To Date"); return false;}
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
	
	var url = "profit_loss_report_user_wise_view.php?user_name="+user_name+"&from_date="+from_date+"&to_date="+to_date;
	
	
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
					HandleAjaxResponse_profit_loss_report_user_wise_view(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_profit_loss_report_user_wise_view(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("profit_loss_report_user_wise_view").innerHTML=xmlT;		
	return false;
}



// EXPENSE REPORT DATE WISE VIEW
function expen_report_date_wise_view()
{
	var brance_name = document.getElementById("brance_name").value;
	var from_date = document.getElementById("from_date").value;
	var to_date = document.getElementById("to_date").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
	
	var url = "expen_report_date_wise_view.php?brance_name="+brance_name+"&from_date="+from_date+"&to_date="+to_date;
	
	
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
					HandleAjaxResponse_expen_report_date_wise_view(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_expen_report_date_wise_view(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_expen_report_date_wise_view").innerHTML=xmlT;		
	return false;
}



//EXPENSE ITEM MANAGE DELETE
function expense_item_manage_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		expense_item_manage_delete_action(id);
	}
}

function expense_item_manage_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="expense_item_manage_delete_action.php?id="+id;
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
				HandleAjaxResponse_expense_item_manage_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}



//mother_com_due_amount
function mother_com_due_amount()
{
	var mother_com_id = document.getElementById("mother_com_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "mother_com_due_amount.php?mother_com_id="+mother_com_id;
	
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
					HandleAjaxResponse_sasadsadsdt(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_sasadsadsdt(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_mother_com_due_amount").innerHTML=xmlT;		
	return false;
}

//EXPENSE ITEM TRANSCTION DELETE
function expense_item_transaction_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		expense_item_transaction_delete_action(id);
	}
}

function expense_item_transaction_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="expense_item_transaction_delete_action.php?id="+id;
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
				HandleAjaxResponse_expense_item_transaction_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}



//EXPENSE REPORT ITEM WISE DELETE
function expense_report_item_wise_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		expense_report_item_wise_delete_action(id);
	}
}

function expense_report_item_wise_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="expense_report_item_wise_delete_action.php?id="+id;
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
				HandleAjaxResponse_expense_report_item_wise_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

//USER MANAGE DELETE
function user_manage_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		user_manage_delete_action(id);
	}
}

function user_manage_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="user_manage_delete_action.php?id="+id;
    	
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
				HandleAjaxResponse_user_manage_delete_action(xmlRequest);
			}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_user_manage_delete_action(xmlRequest)
{
	var xmlT=xmlRequest.responseText;			
	location.replace("user_manage.php");				
	return false;
}

//EXPENSE REPORT DATE WISE DELETE
function expense_report_date_wise_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		expense_report_date_wise_delete_action(id);
	}
}

function expense_report_date_wise_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="expense_report_date_wise_delete_action.php?id="+id;
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
				HandleAjaxResponse_expense_report_date_wise_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

//SUPPLIER MANAGE DELETE

function supplier_manage_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		supplier_manage_delete_action(id);
	}
}

function supplier_manage_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="supplier_manage_delete_action.php?id="+id;
    	
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
				HandleAjaxResponse_supplier_manage_delete_action(xmlRequest);
			}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_supplier_manage_delete_action(xmlRequest)
{
	var xmlT=xmlRequest.responseText;			
	location.replace("supplier_manage.php");				
	return false;
}

//PARTY CUSTOMER MANAGE DELETE
function party_customer_manage_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		party_customer_manage_delete_action(id);
	}
}

function party_customer_manage_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="party_customer_manage_delete_action.php?id="+id;
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
				HandleAjaxResponse_party_customer_manage_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

// SEARCH product_distribute_search LIST
function product_distribute_search()
{
	var brance_name = document.getElementById("brance_name").value;
	var product_name = document.getElementById("product_name").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "product_distribute_search.php?brance_name="+brance_name+"&product_name="+product_name;
	
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
					HandleAjaxResponse_product_distribute_search(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_product_distribute_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}



//PRODUCT MANAGE DELETE
function product_manage_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		product_manage_delete_action(id);
	}
}

function product_manage_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="product_manage_delete_action.php?id="+id;
    	
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
				HandleAjaxResponse_product_manage_delete_action(xmlRequest);
			}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_product_manage_delete_action(xmlRequest)
{
	var xmlT=xmlRequest.responseText;			
	location.replace("product_manage.php");				
	return false;
}

///purchase_entry_delete DELETE
function purchase_entry_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		purchase_entry_delete_action(id);
	}
}

function purchase_entry_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="purchase_entry_delete_action.php?id="+id;
    	
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
				HandleAjaxResponse_purchase_entry_delete_action(xmlRequest);
			}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_purchase_entry_delete_action(xmlRequest)
{
	var xmlT=xmlRequest.responseText;			
	location.replace("purchase_entry.php");				
	return false;
}
//Selling INFORMATION DELETE
function selling_information_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		selling_information_delete_action(id);
	}
}

function selling_information_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="selling_information_delete_action.php?id="+id;
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
				HandleAjaxResponse_selling_information_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}




//PAYMENT TO SUPPLIER DELETE
function payment_to_supplier_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		payment_to_supplier_delete_action(id);
	}
}

function payment_to_supplier_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="payment_to_supplier_delete.php?id="+id;
    	
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
				HandleAjaxResponse_payment_to_supplier_delete_action(xmlRequest);
			}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_payment_to_supplier_delete_action(xmlRequest)
{
	var xmlT=xmlRequest.responseText;			
	location.replace("payment_to_supplier.php");				
	return false;
}

//MONEY RECEIVE MANAGE DELETE
function money_receive_manage_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		money_receive_manage_delete_action(id);
	}
}

function money_receive_manage_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="money_receive_manage_delete_action.php?id="+id;
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
				HandleAjaxResponse_money_receive_manage_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

//SELLING REPORTPARTY MANAGE DELETE
function selling_report_party_customer_wise_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		selling_report_party_customer_wise_delete_action(id);
	}
}

function selling_report_party_customer_wise_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="selling_report_party_customer_wise_delete_action.php?id="+id;
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
				HandleAjaxResponse_selling_report_party_customer_wise_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}
//PRODUCT DISTRIBUTE DELETE
function product_distribute_delete(id)
{	
	var x = confirm("Are you sure to delete permanently?");
	if(x)
	{
		product_distribute_delete_action(id);
	}
}

function product_distribute_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="product_distribute_delete_action.php?id="+id;
    	
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
				HandleAjaxResponse_product_distribute_delete_action(xmlRequest);
			}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_product_distribute_delete_action(xmlRequest)
{
	var xmlT=xmlRequest.responseText;			
	location.replace("product_distribute.php");				
	return false;
}
// SEARCH EXPENSE ITEM LIST

function expense_item_search_field()
{
	var search_field = document.getElementById("search_field").value;
	if(search_field == "Search Here")
	{
		document.getElementById("search_field").value = "";
	}
	
	if(search_field == "")
	{
		document.getElementById("search_field").value = "Search Here";
	}
}

// SEARCH EXPENSE ITEM TRANSACTION LIST
function expense_item_transction_search()
{
	var search_field = document.getElementById("search_field").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "expense_item_transction_search.php?search_field="+search_field;
	
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
					HandleAjaxResponse_expense_item_transction_search(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_expense_item_transction_search(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;		
	return false;
}

//PURCHASE ENTRY purchase_entry_product_sell_price_View
function purchase_entry_product_sell_price_View()
{
	var product_code_id = document.getElementById("product_code_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "purchase_entry_product_sell_price_View.php?product_code_id="+product_code_id;
	
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
					HandleAjaxResponse_purchase_entry_product_sell_price_View(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_purchase_entry_product_sell_price_View(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_product_purse_price").innerHTML=xmlT;		
	return false;
}


//PURCHASE ENTRY purchase_entry_product_sell_price_View
function purchase_entry_product_buy_price_View()
{
	var product_code_id = document.getElementById("product_code_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "purchase_entry_product_buy_price_View.php?product_code_id="+product_code_id;
	
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
					HandleAjaxResponse_purchase_entry(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_purchase_entry(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_purchase_entry_product_buy_price_View").innerHTML=xmlT;		
	return false;
}

//PURCHASE ENTRY purchase_entry_product_serial_View
function purchase_entry_product_serial_View()
{
	var product_code_id = document.getElementById("product_code_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "purchase_entry_product_serial_View.php?product_code_id="+product_code_id;
	
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
					HandleAjaxResponse_purchase_entry_product_serial_View(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_purchase_entry_product_serial_View(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_sl").innerHTML=xmlT;		
	return false;
}

// PURCHASE ENTRY purchase_entry_product_name_View View LIST
function purchase_entry_product_name_View()
{
	var product_code_id = document.getElementById("product_code_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "purchase_entry_product_name_View.php?product_code_id="+product_code_id;
	
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
					HandleAjaxResponse_purchase_entry_product_name_View(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_purchase_entry_product_name_View(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_product_name").innerHTML=xmlT;		
	return false;
}

//PURCHASE ENTRY Total amount View
function total_Amnt_View()
{
	var pro_buy_price = document.getElementById("pro_buy_price").value;
	var product_quantity = document.getElementById("product_quantity").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "purchase_entry_total_amount_view.php?pro_buy_price="+pro_buy_price+"&product_quantity="+product_quantity;
	
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
					HandleAjaxResponse_total_Amnt_View(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_total_Amnt_View(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("totleAmountView").innerHTML=xmlT;		
	return false;
}

function total_Amnt_View()
{
var pro_buy_price = document.getElementById("pro_buy_price").value; 
var product_quantity = document.getElementById("product_quantity").value; 
var total_amount = pro_buy_price * product_quantity; 

document.getElementById("amount").value = total_amount;
}

function total_dis_amount()
{
var discount = document.getElementById("discount").value; 
var amount = document.getElementById("amount").value; 
var discount_amount = (amount * discount)/100;
var total_amount = (amount - discount_amount);

document.getElementById("total_amount").value = total_amount;
}

function due_amount_total()
{
var total_amount = document.getElementById("total_amount").value; 
var paid_amount = document.getElementById("paid_amount").value; 
var due_amount = (total_amount-paid_amount);

document.getElementById("due_amount").value = due_amount;
}


//PRODUCT DISTRIBUTE product_code_View
function product_code_View()
{
	var product_dis_code = document.getElementById("product_dis_code").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "product_distribution_product_code_View.php?product_dis_code="+product_dis_code;
	
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
					HandleAjaxResponse_product_code_View(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_product_code_View(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_product_code").innerHTML=xmlT;		
	return false;
}




//PRODUCT DISTRIBUTE product_selling_price_View
function product_selling_price_View()
{
	var product_dis_code = document.getElementById("product_dis_code").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "product_distribution_product_selling_price_View.php?product_dis_code="+product_dis_code;
	
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
					HandleAjaxResponse_product_selling_price_View(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_product_selling_price_View(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_product_selling_pric").innerHTML=xmlT;		
	return false;
}


//PRODUCT DISTRIBUTE product_band_View
function product_stock()
{
	var product_dis_code = document.getElementById("product_dis_code").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "product_distribution_product_band_View.php?product_dis_code="+product_dis_code;
	
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
					HandleAjaxResponse_product_stock(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_product_stock(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_product_stock").innerHTML=xmlT;		
	return false;
}
//Selling information product_selling_price_View LIST


//Selling information party_customer_addres_View LIST
function party_customer_addres_View()
{
	var part_cus_name_id = document.getElementById("part_cus_name_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "product_wise_party_customer_address_view.php?part_cus_name_id="+part_cus_name_id;
	
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
					HandleAjaxResponse_party_customer_addres_View(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_party_customer_addres_View(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_address").innerHTML=xmlT;		
	return false;
}

//Mony payment manage mother_com_voucher_View LIST
function mother_com_voucher_View()
{
	var mother_com_id = document.getElementById("mother_com_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "mother_com_voucher_view.php?mother_com_id="+mother_com_id;
	
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
					HandleAjaxResponse_mother_com_voucher_View(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_mother_com_voucher_View(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_voucher_no").innerHTML=xmlT;		
	return false;
}

//Mony payment manage mother_com_amount_View LIST
function mother_com_amount_View()
{
	var mother_com_id = document.getElementById("mother_com_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "money_receive_manage_amount_view.php?mother_com_id="+mother_com_id;
	
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
					HandleAjaxResponse_mother_com_amount_View(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_mother_com_amount_View(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_amount").innerHTML=xmlT;		
	return false;
}


////////////////////////////////////////////////......ITEM WIEW.......//////////////////////////////////////////


// purcheseReportView LIST
function purcheseReportView()
{
	//var product = document.getElementById("product").value;
	var from_date = document.getElementById("from_date").value;
	var to_date = document.getElementById("to_date").value;
	
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "pursease_report_view.php?from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_purcheseReportView(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_purcheseReportView(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_report_report").innerHTML=xmlT;		
	return false;
}

// sellingReportView LIST
function sellingReportView()
{
	var brance_name = document.getElementById("brance_name").value;
	var product_name = document.getElementById("product_name").value;
	var from_date = document.getElementById("from_date").value;
	var to_date = document.getElementById("to_date").value;
	
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "selling_report_view.php?brance_name="+brance_name+"&product_name="+product_name+"&from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_sellingReportView(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_sellingReportView(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_selling_report").innerHTML=xmlT;		
	return false;
}

// PurseReportViewSuppComWise LIST
function PurseReportViewSuppComWise()
{
	var party_customer    = document.getElementById("party_customer").value;
	var from_date         = document.getElementById("from_date").value;
	var to_date           = document.getElementById("to_date").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "purchase_report_view_report.php?party_customer="+party_customer+"&from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_PurseReportViewSuppComWise(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_PurseReportViewSuppComWise(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_PURSE_report_supplier_company_wise").innerHTML=xmlT;		
	return false;
}

// supper_company_ledger_view_report LIST
function supper_company_ledger_view_report()
{
	
	var brance_name        = document.getElementById("brance_name").value;
	var company_name_id    = document.getElementById("company_name_id").value;
	var from_date          = document.getElementById("from_date").value;
	var to_date            = document.getElementById("to_date").value;
	
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "supper_company_ledger_view_report.php?brance_name="+brance_name+"&company_name_id="+company_name_id+"&from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_supper_company_ledger_view_report(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_supper_company_ledger_view_report(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_supplier_company_ledger").innerHTML=xmlT;		
	return false;
}

// party_customer_ledger_view_report LIST
function party_customer_ledger_view_report()
{
	
	var brance_name    = document.getElementById("brance_name").value;
	var company_name_id    = document.getElementById("company_name_id").value;
	var from_date          = document.getElementById("from_date").value;
	var to_date            = document.getElementById("to_date").value;
	
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "party_customer_ledger_view_report.php?brance_name="+brance_name+"&company_name_id="+company_name_id+"&from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_party_customer_ledger_view_report(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_party_customer_ledger_view_report(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_party_customer_ledger_view_report").innerHTML=xmlT;		
	return false;
}

// EXPENSE REPORT ITEM WISE VIEW LIST
function expen_report_item_wise_view_report()
{
	
	var brance_name        = document.getElementById("brance_name").value;
	var expane_item        = document.getElementById("expane_item").value;
	var from_date          = document.getElementById("from_date").value;
	var to_date            = document.getElementById("to_date").value;
	
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
	
		var url = "expen_report_item_wise_view.php?brance_name="+brance_name+"&expane_item="+expane_item+"&from_date="+from_date+"&to_date="+to_date;
	
	
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
					HandleAjaxResponse_expen_report_item_wise_view_report(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_expen_report_item_wise_view_report(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_expen_report_item_wise_view_report").innerHTML=xmlT;		
	return false;
}


// selling_report_party_customer_wise_view LIST
function selling_report_party_customer_wise_view()
{
	
	var brance_name = document.getElementById("brance_name").value;
	var from_date = document.getElementById("from_date").value;
	var to_date = document.getElementById("to_date").value;
	
	
	
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "selling_report_branch_wise_view.php?brance_name="+brance_name+"&from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_selling_report_party_customer_wise_view(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_selling_report_party_customer_wise_view(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_selling_report_branch_wise_view").innerHTML=xmlT;		
	return false;
}

// PRODUCT DISTRIBUTE REPORT VIEW
function product_distribute_report_view()
{
	
	var brance_name = document.getElementById("brance_name").value;
	var from_date = document.getElementById("from_date").value;
	var to_date = document.getElementById("to_date").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "product_distribute_report_view.php?brance_name="+brance_name+"&from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_product_distribute_report_view(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_product_distribute_report_view(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_product_distribute_report_view").innerHTML=xmlT;		
	return false;
}


// PRODUCT DISTRIBUTE REPORT VIEW
function payment_report_supplier_wise()
{
	
	var party_customer = document.getElementById("party_customer").value;
	var from_date = document.getElementById("from_date").value;
	var to_date = document.getElementById("to_date").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "payment_report_supplier_wise_view.php?party_customer="+party_customer+"&from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_payment_report_supplier_wise(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_payment_report_supplier_wise(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_payment_report_supplier_wise").innerHTML=xmlT;		
	return false;
}



// product_stock_report_company_wise
function product_stock_report_company_wise()
{
	var brance_name       = document.getElementById("brance_name").value;
	var party_customer    = document.getElementById("party_customer").value;
	var from_date         = document.getElementById("from_date").value;
	var to_date           = document.getElementById("to_date").value;
	
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "product_stock_report_company_wise_view.php?brance_name="+brance_name+"&party_customer="+party_customer+"&from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_product_stock_report_company_wise(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_product_stock_report_company_wise(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_product_stock_report_supplier_company_wise").innerHTML=xmlT;		
	return false;
}

// product_stock_report_view
function product_stock_report_view()
{
	var brance_name       = document.getElementById("brance_name").value;
	var from_date         = document.getElementById("from_date").value;
	var to_date           = document.getElementById("to_date").value;
	
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "pro_order_show.php?brance_name="+brance_name+"&from_date="+from_date+"&to_date="+to_date;
	
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
					HandleAjaxResponse_product_stock_report_view(xmlRequest);
				}
		};
	xmlRequest.send(null);			
	return false;
}

function HandleAjaxResponse_product_stock_report_view(xmlRequest)
{
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_product_stock_report_view").innerHTML=xmlT;		
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