
function createAcc(form){

    var url = wwwroot+"admin/neighborhoods/synonymousnotfound/";
	var dataType = "html";

	$.ajax({
		type: "POST",
		url: url,
		data: {"id":idNaoEncontrado,"neighborhood_id":idBairro},
		success: function(response){

			console.log("Sinônimo saassacadastrado");
		},
		dataType: dataType
	});
}



$(document).ready(function(){
    $("#btn-cadastro").on("click",function(){
        var form = $("#frm-cadastro").serialize();
        console.log(wwwroot);
    });
});