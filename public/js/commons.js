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

