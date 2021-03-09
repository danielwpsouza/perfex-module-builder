if(window.location.pathname === "/admin/invoices/invoice"){
    $("#sale_agent").attr("required", true);
    var consts = $(".form-group");
    ch1 = consts[22].childNodes[1];
    consts[22].removeChild(consts[22].childNodes[0]);
    consts[22].innerHTML = '<label for="sale_agent" class="control-label"> <small class="req text-danger">* </small>Agente de Venda</label>';
    consts[22].appendChild(ch1);
}
