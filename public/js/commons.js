var wwwroot = window.location.protocol + "//" + window.location.host + "/";

/**
 * Retorna mensagem com tipo de erro no field
 * @param string type 
 * @param string field 
 */
function checkError(type=null,field){
    if(type){
        if(type == "size"){
            $(".error").html("Mínimo 06 caracteres");
        }
        else{
            $(".error").html("");
        }
        if(type == "size-player"){
            $("#"+field).css("background","red");
        }
        else{
            $("#"+field).css("background","");
        }
        if(type == "error"){
             $("#"+field).css("border","solid 1px red");
        }
        else{
            $("#"+field).css("border","");
        }
        if(type == "exists"){
            $("#"+field).css("border","solid 1px red");
            $(".exists").html("já existe!");
       }
       else{
           $("#"+field).css("border","");
           $(".exists").html("");
       }
    }    
}
function login(form){
    var url = wwwroot+"login";
    console.log(url);
	var dataType = "json";
	$.ajax({
		type: "get",
		url: url,
		data: form,
		success: function(response){
		if(response.status=="error")
                checkError(response.status,response.field);
            if(response.status =="ok")
                location.href = "/myaccount";
            if(response.status =="notacc")
                location.href = "/createacc";
            
        },
        error:function(response){
        },
		dataType: dataType
	});
}

$(document).ready(function(){
    if($("#session").val()){
        $("#frm-login").html('<a href="/myaccount"><input type="button" class="btn-padrao" value="MyAccount"></a><br><a href="/logout"><input type="button" class="btn-padrao btn-logout" value="Deslogar"></a>');
    }

    $(".btn-login").on("click",function(){
        var form = $("#frm-login").serialize();
        login(form);
    });
});

