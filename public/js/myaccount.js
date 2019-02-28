function saveCharacter(form){
	var url = wwwroot+"create-character/save";
	var dataType = "json";
	$.ajax({
		type: "get",
		url: url,
		data: form,
		success: function(response){
			if(response.status=="size-player" || response.status=="exists")
				checkError(response.status,response.field);
			else
			    $("#frm-create-player").html("Character criado com sucesso!<br /><a href='/myaccount'>HOME</a>");
		},
		dataType: dataType
	});
}
function deleteCharacter(form){
	var url = wwwroot+"delete-character/save";
	var dataType = "json";
	$.ajax({
		type: "get",
		url: url,
		data: form,
		success: function(response){
        if(response.status=="size-player")
            checkError(response.status,response.field);
        else
            $("#frm-delete-player").html("Deletado com sucesso!<br /><a href='/myaccount'>HOME</a>");
		},
		dataType: dataType
	});
}

$(document).ready(function(){
    $("#frm-login").html('<a href="/myaccount"><input type="button" class="btn-padrao" value="MyAccount"></a><br><a href="/logout"><input type="button" class="btn-padrao btn-logout" value="Deslogar"></a>');
    $("#btn-create-character").on("click",function(){
        location.href="/create-character";
    });

    $("#character-name").click(function(){
        $(this).css("background","");
    });
    $("#btn-delete-character").click(function(){
        location.href="/delete-character";
    });
    $("#btn-deleted-character").on("click",function(){
        if(!$("#character-name").val()){
            error =1;
            $("#character-name").css("background","red");
        }
        else{
            error =0;
            $("#character-name").css("background","");
        }
        if(error == 0){ 
            var form = $("#frm-delete-player").serialize();
            deleteCharacter(form);
        }
    });

    $("#btn-send-character").on("click",function(){
        var gender = $("input[name='gender']:checked").val();
        var vocation = $("input[name='vocation']:checked").val();

        if(!gender){
            error =1;
            $("#gender").css("background","red");
        }
        else{
            error =0;
            $("#gender").css("background","");
        }
        if(!vocation){
            error=1;
            $("#vocation").css("background","red");
        }
        else{
            error=0
            $("#vocation").css("background","");
        }
        if(error ==0){
            var form = $("#frm-create-player").serialize();
            saveCharacter(form);
        }
    });
});