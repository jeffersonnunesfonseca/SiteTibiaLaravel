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
        if(type == "error"){
             $("#"+field).css("border","solid 1px red");
        }
        else{
            $("#"+field).css("border","");
        }
        if(type == "exists"){
            $("#"+field).css("border","solid 1px red");
            $(".exists").html("Conta já existe!");
       }
       else{
           $("#"+field).css("border","");
           $(".exists").html("");
       }
    }    
}
function login(form){
    console.log(form);
    var url = "http://localhost/login";
    console.log(url);
	var dataType = "json";
	$.ajax({
		type: "get",
		url: url,
		data: form,
		success: function(response){
            console.log("aa");
			if(response.status=="error")
                checkError(response.status,response.field);
            if(response.status =="ok")
                location.href = "/myaccount";
        },
        error:function(response){
            console.log(response);
        },
		dataType: dataType
	});
}

$(document).ready(function(){
    $(".btn-login").on("click",function(){
        var form = $("#frm-login").serialize();
        console.log("chama");
        login(form);
    });
});

