function createAcc(form){
	var url = wwwroot+"createacc/send/";
	var dataType = "json";
	$.ajax({
		type: "get",
		url: url,
		data: form,
		success: function(response){
			if(response.status=="error" || response.status=="size" || response.status=="exists")
				checkError(response.status,response.field);
			else
				$("#frm-cadastro").html("Conta criada com sucesso!<br /><a href='/'>HOME</a>");
		},
		dataType: dataType
	});
}

$(document).ready(function(){
    $("#btn-cadastro").on("click",function(){
        var form = $("#frm-cadastro").serialize();
        createAcc(form);
    });
});