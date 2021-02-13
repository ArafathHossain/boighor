/* KEY VELIDATION */
function OnlyNumberKey(evt)
{	
	var charCode = (evt.which) ? evt.which : event.keyCode
	
	if ((charCode < 48 || charCode > 57) && (charCode !== 8) && (charCode !== 9) && (charCode !== 46))
	
         return false;
}
// MENU SERIAL UP DOWN

function category_sl_updown(id,arrow)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
	var url="category_sl_updown_action.php?id="+id+"&arrow="+arrow;
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
			HandleAjaxResponse_category_sl_updown(xmlRequest);
		}
	};
		xmlRequest.send(null);
		return false;
}

function HandleAjaxResponse_category_sl_updown(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("category.php");
}

/* Root Category Check*/

function root_category_chk()
{
	var root_cat_name = document.getElementById('root_cat_name').value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
	return;
		
	var url = "root_category_chk.php?root_cat_name="+root_cat_name;
	
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
				HandleAjaxResponse_root_category_chk(xmlRequest);
			}
	};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_root_category_chk(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT == 1)
	{
		document.getElementById('root_cat_chk').innerHTML = 'Root Category Already Exist.';
	}
	else
	{
		document.getElementById('root_cat_chk').innerHTML = '';
	}
	document.getElementById('root_cat_field_chk').value = xmlT;
	return false;
}

/* Root Category Serial Check*/

function root_category_serial_chk()
{
	var sl_no = document.getElementById('sl_no').value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
	return;
		
	var url = "root_category_chk.php?sl_no="+sl_no;
	
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
				HandleAjaxResponse_root_category_serial_chk(xmlRequest);
			}
	};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_root_category_serial_chk(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT == 2)
	{
		document.getElementById('root_cat_serial_chk').innerHTML = 'Serail No. Already Exist.';
	}
	else
	{
		document.getElementById('root_cat_serial_chk').innerHTML = '';
	}
	document.getElementById('root_cat_serial_chk').value = xmlT;
	return false;
}

/* Category Check*/

function category_chk()
{
	var category_name = document.getElementById('category_name').value;
	var root_cat_id = document.getElementById('root_cat_id').value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
	return;
		
	var url = "category_chk.php?category_name="+category_name+"&root_cat_id="+root_cat_id;
	
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
				HandleAjaxResponse_category_chk(xmlRequest);
			}
	};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_category_chk(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT == 1)
	{
		document.getElementById('cat_chk').innerHTML = 'Category Already Exist.';
	}
	else
	{
		document.getElementById('cat_chk').innerHTML = '';
	}
	document.getElementById('cat_field_chk').value = xmlT;
	return false;
}

/* Category Serial Check*/

function category_serial_chk()
{
	var sl_no = document.getElementById('sl_no').value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
	return;
		
	var url = "category_chk.php?sl_no="+sl_no;
	
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
				HandleAjaxResponse_category_serial_chk(xmlRequest);
			}
	};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_category_serial_chk(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT == 2)
	{
		document.getElementById('cat_serial_chk').innerHTML = 'Serail No. Already Exist.';
	}
	else
	{
		document.getElementById('cat_serial_chk').innerHTML = '';
	}
	document.getElementById('cat_serial_chkf').value = xmlT;
	return false;
}
/*Root Category Edit Form Validation*/

function root_cat_edit_form_validation()
{
	var root_cat_name = document.getElementById('root_cat_name').value;
	if(root_cat_name == "") {  alert("Please Enter Root Category Name.");  return false;   }
	
	var category_status = document.getElementById('category_status').value;
	if(category_status == "") {  alert("Please Select Category Status.");  return false;   }
	
	var sl_no = document.getElementById('sl_no').value;
	if(sl_no == "") {  alert("Please Enter Serial No.");  return false;   }
		
	var status = document.getElementById('status').value;
	if(status == "") {  alert("Please Select Menu Status.");  return false;   }
	
	var product_page_status = document.getElementById('product_page_status').value;
	if(product_page_status == "") {  alert("Please Select Product Page Status.");  return false;   }
	
	var product_up_page_status = document.getElementById('product_up_page_status').value;
	if(product_up_page_status == "") {  alert("Please Select Product Upload Page Status.");  return false;   }
}

/*Root Category Insert*/

function root_cat_insert()
{
	var root_cat_name = document.getElementById('root_cat_name').value;
	if(root_cat_name == "") {  alert("Please Enter Root Category Name.");  return false;   }
	
	var category_status = document.getElementById('category_status').value;
	if(category_status == "") {  alert("Please Select Category Status.");  return false;   }
	
	var sl_no = document.getElementById('sl_no').value;  
	
	
	var description = document.getElementById('description').value;	
	if(description == "") {  alert("Please Select description description.");  return false;   }
		
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
	return;
	
	var url="root_category_insert.php?root_cat_name="+root_cat_name+"&sl_no="+sl_no+"&category_status="+category_status+"&description="+description; 

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
				HandleAjaxResponse_root_cat_insert(xmlRequest);
			}
	};
xmlRequest.send(null);
return false;
}	

function HandleAjaxResponse_root_cat_insert(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT == 1) { alert('Root Category Already Exist'); }
	else if(xmlT == 2) { alert('Serial Already Exist'); }
	else { alert('Root Category Added Successful Done'); 	
	location.replace("root_category.php");
	}
return false;
}

/* Category Insert*/

function cat_insert()
{
	var root_cat_id = document.getElementById('root_cat_id').value;
	if(root_cat_id == "") {  alert("Please Select Root Category Name.");  return false;   }
	
	var category_name = document.getElementById('category_name').value;
	if(category_name == "") {  alert("Please Enter Category Name.");  return false;   }
	
	var sl_no = document.getElementById('sl_no').value;
	if(sl_no == "") {  alert("Please Enter Serial No.");  return false;   }
	
	var sub_cat_stauts = document.getElementById('sub_cat_stauts').value;
	if(sub_cat_stauts == "") {  alert("Please Select Sub Category Status.");  return false;   }
		
	var status = document.getElementById('status').value;
	if(status == "") {  alert("Please Select Menu Status.");  return false;   }
		
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
	return;
	
	var url="category_insert.php?root_cat_id="+root_cat_id+"&category_name="+category_name+"&sl_no="+sl_no+"&sub_cat_stauts="+sub_cat_stauts+"&status="+status; 

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
				HandleAjaxResponse_cat_insert(xmlRequest);
			}
	};
xmlRequest.send(null);
return false;
}	

function HandleAjaxResponse_cat_insert(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT == 1) { alert('Category Already Exist'); }
	else if(xmlT == 2) { alert('Serial No. Already Exist'); }
	else { alert('Category Added Successful Done'); 	
	location.replace("category.php");
	}
return false;
}

///////// PASSWORD CHANGE/////////////////

function pass_chk()
{
	var old_password = document.getElementById("old_password").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;

		var url="old_pass_validation.php?old_password="+old_password;
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
				HandleAjaxResponse_old_pass_validation(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_old_pass_validation(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	document.getElementById('old_pass_validation').innerHTML = xmlT;
}

// PASSWORD CHANGE
function check_verify_pass()
{
	var new_password = document.getElementById("new_password").value;
	if(new_password == "") {  alert("Enter New Password."); return false;		} 
	
	var verify_new_password = document.getElementById("verify_new_password").value;
	
	if(new_password)
	{
		if(new_password == verify_new_password)
		{
			document.getElementById('check_verify_pass').innerHTML = '<img src="../site_content/theme/images/green_tick.png" width="15" height="15" />';
		} else {
			
			document.getElementById('check_verify_pass').innerHTML = '<img src="../site_content/theme/images/cross_red.png" width="15" height="15" />';
		}
	}
}

// SUB CATEGROY FIELD VALIDATION
function sub_cat_field()
{	
	var menu_id = document.getElementById("menu_id").value;
	if(menu_id == "") {	alert("Please Select Root Category."); return false;	}
	
	var sub_menu_id = document.getElementById("sub_menu_id").value;
	if(sub_menu_id == "") {	alert("Please Select Category ."); return false;	}
	
	var menu_id = document.getElementById("menu_id").value;
	if(menu_id == "") {	alert("Please Enter Sub Category Name."); return false;	}
	
	var status = document.getElementById("status").value;
	if(status == "") {	alert("Please Select Menu Status."); return false;	}

}

// PRODUCT UPLOAD FIELD VALIDATION
function field_validation()
{	
	var root_cat_id = document.getElementById("root_cat_id").value;
	if(root_cat_id == "") {	alert("Please Select Root Category."); return false;	}
	
	//var cat_id = document.getElementById("cat_id").value;
	//if(cat_id == "") {	alert("Please Select Category."); return false;	}
	
	//var submenu_id = document.getElementById("submenu_id").value;
	//if(submenu_id == "") {	alert("Please Select Sub Category."); return false;	}
	
	//var product_type = document.getElementById("product_type").value;
	//if(product_type == "") {	alert("Please Select Product Type."); return false;	}
	
	var product_name = document.getElementById("product_name").value;
	if(product_name == "") {	alert("Please Enter Product Name."); return false;	}
	
	var price = document.getElementById("price").value;
	if(price == "") {	alert("Please Enter Item Price."); return false;	}
	
	var size = document.getElementById("size").value;
	if(size == "") {	alert("Please Enter Size."); return false;	}
	
	var brand = document.getElementById("brand").value;
	if(brand == "") {	alert("Please Select Brand."); return false;	}
	
	var fabrics = document.getElementById("fabrics").value;
	if(fabrics == "") {	alert("Please Enter Fabrics."); return false;	}
	
	var fabrication = document.getElementById("fabrication").value;
	if(fabrication == "") {	alert("Please Enter Fabrication."); return false;	}
	
	var quantity = document.getElementById("quantity").value;
	if(quantity == "") {	alert("Please Enter Product Quantity."); return false;	}
		
	var description = document.getElementById("description").value;
	if(description == "") {	alert("Please Enter Description."); return false;	}
	
}
// PRODUCT VIEW CATEGORY WISE
function category_view()
{	
	var product_category = document.getElementById("product_category").value;
	if(product_category == "") {	alert("Please Select Category."); return false;	}
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="category_view.php?product_category="+product_category;
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
				HandleAjaxResponse_category_view(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_category_view(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;
	return false;
}



// PRODUCT Delevery SHOW
function pro_delevery_show()
{	
	var delevery_status = document.getElementById("delevery_status").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="delevery_order_show?delevery_status="+delevery_status;
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
				HandleAjaxResponse_pro_delevery_show(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_pro_delevery_show(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	document.getElementById("div_for_view_delevery").innerHTML=xmlT;
	return false;
}


// PRODUCT ORDER SHOW
function pro_order_show()
{
	var order_status = document.getElementById("order_status").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="pro_order_show.php?order_status="+order_status;
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
				HandleAjaxResponse_pro_order_show(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_pro_order_show(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	document.getElementById("div_for_view_order").innerHTML=xmlT;
	return false;
}
// PRODUCT ORDER SHOW DATE WISE
function pro_order_show_date_wise()
{	
	var from_date = document.getElementById("from_date").value;
	if(from_date == "") {	alert("Please Enter From Date."); return false;	}
	
	var to_date = document.getElementById("to_date").value;
	if(to_date == "") {	alert("Please Enter To Date."); return false;	}
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="pro_order_show_date_wise.php?from_date="+from_date+"&to_date="+to_date;
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
				HandleAjaxResponse_pro_order_show_date_wise(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_pro_order_show_date_wise(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	document.getElementById("div_for_view_order").innerHTML=xmlT;
	return false;
}

// PRODUCT ORDER DELETE
function product_order_delete(uniq_id)

{	

	var x = confirm("Are you sure to Delete Product Details Permanently?");
	if(x)
	{
		product_order_delete_action(uniq_id);
	}
}

function product_order_delete_action(uniq_id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="product_order_delete_action.php?uniq_id="+uniq_id;
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
				HandleAjaxResponse_product_order_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_product_order_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	alert(xmlT);
	location.replace("product_order.php");
	return false;
}

//  PRODUCT VIEW MENU WISE
function menu_wise_product_view()
{
	var menu_id = document.getElementById("menu_id").value;
	if(menu_id == "") {alert("Pleas Select Menu Name."); return false; }
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="menu_wise_product.php?menu_id="+menu_id;
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
				HandleAjaxResponse_menu_wise_product_view(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_menu_wise_product_view(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;
}


// OPENPOPUP FILE  
function popUp(URL) {
	day = new Date();
	id = day.getTime();
	eval("page" + id + " = window.open(URL, '" + id + "', 	'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=700,height=500');");
}
// PRODUCT DELETE FUNCTION
function product_delete(id)
{
	var x = confirm("Are you sure to delete this permanently?");
	if(x)
	{
		products_delete_action(id);
	}
}

function products_delete_action(id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="product_manage_delete.php?id="+id;
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
				HandleAjaxResponse_products_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_products_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("product_manage.php");
}

// NEW ARRIVAL PRODUCT DELETE FUNCTION
function new_arrival_product_delete(id)
{
	var x = confirm("Are you sure to delete this product permanently?");
	if(x)
	{
		new_arrival_product_delete_action(id);
	}
}

function new_arrival_product_delete_action(id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="new_arrival_product_delete.php?id="+id;
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
				HandleAjaxResponse_new_arrival_product_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_new_arrival_product_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("new_arrival_pro.php");
}

// SPECIAL PRODUCT DELETE FUNCTION
function special_product_delete(id)
{
	var x = confirm("Are you sure to delete this product permanently?");
	if(x)
	{
		special_product_delete_action(id);
	}
}

function special_product_delete_action(id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="special_product_delete.php?id="+id;
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
				HandleAjaxResponse_special_product_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_special_product_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("special_pro.php");
}


// UPCOMING PRODUCT DELETE FUNCTION
function upcoming_product_delete(id)
{
	var x = confirm("Are you sure to delete this product permanently?");
	if(x)
	{
		upcoming_product_delete_action(id);
	}
}

function upcoming_product_delete_action(id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="upcoming_product_delete.php?id="+id;
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
				HandleAjaxResponse_upcoming_product_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_upcoming_product_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("upcomming_pro.php");
}

// HOT DEALS PRODUCT DELETE FUNCTION
function hot_product_delete(id)
{
	var x = confirm("Are you sure to delete this product permanently?");
	if(x)
	{
		hot_product_delete_action(id);
	}
}

function hot_product_delete_action(id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="hot_product_delete.php?id="+id;
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
				HandleAjaxResponse_hot_product_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_hot_product_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("hot_deals_pro.php");
}

// HOT DEALS PRODUCT DELETE FUNCTION
function sale_product_delete(id)
{
	var x = confirm("Are you sure to delete this product permanently?");
	if(x)
	{
		sale_product_delete_action(id);
	}
}

function sale_product_delete_action(id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="sale_product_delete.php?id="+id;
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
				HandleAjaxResponse_sale_product_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_sale_product_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("sale_product.php");
}
// ADMIN USER DELETE FUNCTION
function category_delete(id)
{
	var x = confirm("Are you sure to delete this permanently?");
	if(x)
	{
		category_delete_action(id);
	}
}

function category_delete_action(id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="category_delete.php?id="+id;
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
				HandleAjaxResponse_category_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_category_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("product_category_manage.php");
}

// MENU WISE SUB MENU SHOW
function menu_wise_sub_menu()
{	
	var menu_id = document.getElementById("menu_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "menu_wise_sub_menu.php?menu_id="+menu_id;
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
					HandleAjaxResponse_menu_wise_sub_menu(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_menu_wise_sub_menu(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;
	return false;
}

/* Root category wise Category view*/

function root_cat_wise_cat_view()
{	
	var root_cat_id = document.getElementById("root_cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "root_cat_wise_cat_view.php?root_cat_id="+root_cat_id;
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
					HandleAjaxResponse_root_cat_wise_cat_view(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_root_cat_wise_cat_view(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_viewr").innerHTML=xmlT;
	return false;
}



// JOURNAL ROOT CATEGORY WISE CATEGORY SHOW
function j_root_cat_wise_cat()
{	
	var j_root_cat_id = document.getElementById("j_root_cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "j_root_cat_wise_cat.php?j_root_cat_id="+j_root_cat_id;
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
					HandleAjaxResponse_j_root_cat_wise_cat(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_j_root_cat_wise_cat(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("j_root_to_category_view").innerHTML=xmlT;
	root_cat_wise_sub_cat();
}



// ROOT CATEGORY WISE CATEGORY SHOW
function root_cat_wise_cat()
{	
	var root_cat_id = document.getElementById("root_cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "root_cat_wise_cat.php?root_cat_id="+root_cat_id;
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
					HandleAjaxResponse_root_cat_wise_cat(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_root_cat_wise_cat(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("root_to_category_view").innerHTML=xmlT;
	root_cat_wise_sub_cat();
}

// ROOT CATEGORY WISE CATEGORY SHOW
function root_cat_wise_cat_pro()
{	
	var root_cat_id = document.getElementById("root_cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "root_cat_wise_cat.php?root_cat_id="+root_cat_id;
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
					HandleAjaxResponse_root_cat_wise_cat_pro(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_root_cat_wise_cat_pro(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;
	root_cat_wise_pro();
}

// JOUNAL ROOT CATEGORY WISE CATEGORY SHOW
function j_root_cat_wise_cat_pro()
{	
	var j_root_cat_id = document.getElementById("j_root_cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "j_root_cat_wise_cat.php?j_root_cat_id="+j_root_cat_id;
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
					HandleAjaxResponse_j_root_cat_wise_cat_pro(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_j_root_cat_wise_cat_pro(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;
	root_cat_wise_pro();
}

// ROOT CATEGORY WISE CATEGORY SHOW
function root_cat_wise_pro()
{	
	var root_cat_id = document.getElementById("root_cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "root_cat_wise_pro.php?root_cat_id="+root_cat_id;
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
					HandleAjaxResponse_root_cat_wise_pro(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_root_cat_wise_pro(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view_pro").innerHTML=xmlT;
}

/*Category wise sub category*/
function cat_wise_sub_category()
{	
	var cat_id = document.getElementById("cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "cat_wise_sub_category.php?cat_id="+cat_id;
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
					HandleAjaxResponse_cat_wise_sub_category(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_cat_wise_sub_category(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("cat_wise_sub_category").innerHTML=xmlT;
}




//journal sub category

function j_cat_wise_sub_category()
{	
	var j_cat_id = document.getElementById("j_cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "j_cat_wise_sub_category.php?j_cat_id="+j_cat_id;
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
					HandleAjaxResponse_j_cat_wise_sub_category(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_j_cat_wise_sub_category(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("cat_wise_sub_category").innerHTML=xmlT;
}

// ROOT CATEGORY WISE SUB CATEGORY SHOW
function root_cat_wise_sub_cat()
{	
	var root_cat_id = document.getElementById("root_cat_id").value;
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
		return;
		
	var url = "root_cat_wise_sub_cat.php?root_cat_id="+root_cat_id;
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
					HandleAjaxResponse_root_cat_wise_sub_cat(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}

function HandleAjaxResponse_root_cat_wise_sub_cat(xmlRequest)
{	
	var xmlT=xmlRequest.responseText;
	document.getElementById("div_for_view").innerHTML=xmlT;
	return false;
}


// SLIDE  SERIAL UP DOWN
function slide_sl_updown(id,arrow)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
	var url="slide_sl_updown_action.php?id="+id+"&arrow="+arrow;
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
			HandleAjaxResponse_slide_sl_updown(xmlRequest);
		}
	};
		xmlRequest.send(null);
		return false;
}

function HandleAjaxResponse_slide_sl_updown(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("slide_manage.php");
}



// MENU DELETE
function menu_delete(id)
{	
	var x = confirm("Are you sure to delete a menu permanently?");
	if(x)
	{
		menu_delete_action(id);
	}
}

function menu_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="sub_menu_delete_action.php?id="+id;
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
				HandleAjaxResponse_menu_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_menu_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("sub_menu_manager.php");
}

/* ROOT CATEGORY DELETE*/
function root_category_delete(aa)
	{
 		var x=confirm("Sure to Delete the Root Category Permanently!");
 	if(x)
	{
		var val = aa;
		root_category_delete_action(val);
 	}
}

function root_category_delete_action(url)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
            	
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
					HandleAjaxResponse_root_category_delete_action(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}
			
function HandleAjaxResponse_root_category_delete_action(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT==1){alert("Sorry, At First You Delete Product Under the Root Category Then You Delete Root Category.") }
	else if(xmlT==2){alert("Sorry, At First You Delete Category Under the Category Then You Delete Root Category.") }
	else if(xmlT==3){alert("Sorry, At First You Delete Sub Category Under the Category Then You Delete Root Category.") }
	location.replace("root_category.php");
	return false;
 }

/* CATEGORY DELETE*/
function category_delete(aa)
	{
 		var x=confirm("Sure to Delete the Category Permanently!");
 	if(x)
	{
		var val = aa;
		category_delete_action(val);
 	}
}

function category_delete_action(url)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
            	
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
					HandleAjaxResponse_category_delete_action(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}
			
function HandleAjaxResponse_category_delete_action(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT==1){alert("Sorry, At First You Delete Product Under the Category Then You Delete Category.") }
	else if(xmlT==2){alert("Sorry, At First You Delete Sub Category Under the Category Then You Delete Category.") }
	location.replace("category.php");
	return false;
 }

/* SUB CATEGORY DELETE*/
function sub_category_delete(aa)
	{
 		var x=confirm("Sure to Delete the Sub Category Permanently!");
 	if(x)
	{
		var val = aa;
		sub_category_delete_action(val);
 	}
}

function sub_category_delete_action(url)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
            	
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
					HandleAjaxResponse_sub_category_delete_action(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}
			
function HandleAjaxResponse_sub_category_delete_action(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT==1){alert("Sorry, At First You Delete Product Under the Sub Category Then You Delete Sub Category.") }
	location.replace("sub_category.php");
	return false;
 }
 
 /* BRAND DELETE*/
function brand_delete(aa)
	{
 		var x=confirm("Sure to Delete the Brand Permanently!");
 	if(x)
	{
		var val = aa;
		brand_delete_action(val);
 	}
}

function brand_delete_action(url)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
            	
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
					HandleAjaxResponse_brand_delete_action(xmlRequest);
				}
		};
	xmlRequest.send(null);
	return false;
}
			
function HandleAjaxResponse_brand_delete_action(xmlRequest)
{
	var xmlT=parseInt(xmlRequest.responseText);
	if(xmlT==1){alert("Sorry, At First You Delete Product Under the Brand Then You Delete This Brand.") }
	location.replace("brand.php");
	return false;
 }

// MENU DELETE
function slide_delete(id)
{	
	var x = confirm("Are you sure to delete the Image permanently?");
	if(x)
	{
		slide_delete_action(id);
	}
}

function slide_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="slide_delete_action.php?id="+id;
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
				HandleAjaxResponse_slide_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_slide_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("slide_manage.php");
}


// MENU DELETE
function sub_menu_view()
{
	var menu_id = document.getElementById("menu_id").value;
	if(menu_id == "") {alert("Pleas Select Menu Name."); return false; }
	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="sub_menu_view.php?menu_id="+menu_id;
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
				HandleAjaxResponse_sub_menu_view(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_sub_menu_view(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	document.getElementById("sub_menu").innerHTML=xmlT;
	menu_wise_product_view();
}

// CATEGORY WISE SUB CATEGORY
function cat_wise_sub_cat()
{
	var cat_id = document.getElementById("cat_id").value;

	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="cat_wise_sub_cat.php?cat_id="+cat_id;
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
				HandleAjaxResponse_cat_wise_sub_cat(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_cat_wise_sub_cat(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	document.getElementById("div_sub_cat").innerHTML=xmlT;
}





// AUTHOR DELETE
function author_delete(id)
{	
	var x = confirm("Are you sure to delete this permanently?");
	if(x)
	{
		author_delete_action(id);
	}
}

function author_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="author_delete_action.php?id="+id;
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
				HandleAjaxResponse_author_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_author_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	alert(xmlT);
	location.replace("author_manage.php");
}
 
 
 
 
 
 // OSDER BRANCH DELETE
function osder_outlet_delete(id)
{	
	var x = confirm("Are you sure to delete this permanently?");
	if(x)
	{
		osder_outlet_delete_action(id);
	}
}

function osder_outlet_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="osder_outlet_delete_action.php?id="+id;
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
				HandleAjaxResponse_osder_outlet_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_osder_outlet_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	alert(xmlT);
	location.replace("osder_outlet_manage.php");
}
 
 
 
// DELIVERY INFO DELETE FUNCTION
function delivery_delete(id)
{
	var x = confirm("Are you sure to delete this permanently?");
	if(x)
	{
		delivery_delete_action(id);
	}
}

function delivery_delete_action(id)
{	
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;			
	
		var url="delivery_delete.php?id="+id;
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
				HandleAjaxResponse_delivery_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_delivery_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	location.replace("delivery.php");
}
 
 
 
 
// CONTENT DELETE
function content_delete(id)
{	
	var x = confirm("Are you sure to delete this permanently?");
	if(x)
	{
		content_delete_action(id);
	}
}

function content_delete_action(id)
{
	var xmlRequest = GetXmlHttpObject();
	if (xmlRequest == null)
    return;
	
		var url="content_delete_action.php?id="+id;
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
				HandleAjaxResponse_content_delete_action(xmlRequest);
			}
		};
			xmlRequest.send(null);
			return false;
}

function HandleAjaxResponse_content_delete_action(xmlRequest)
{
	var xmlT = xmlRequest.responseText;
	alert(xmlT);
	location.replace("content_manage.php");
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