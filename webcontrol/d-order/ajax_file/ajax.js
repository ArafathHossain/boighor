$(".datewise").on('click', function(){
	var dateid = $("#dateid").val();
	var url = "date_idbyresult.php";
	$.ajax({
		url:url,
		type:"POST",
		data:{dateid:dateid},
		success:function(data){
			$("#div_for_view_order").html(data);	
		}
	});
	
});