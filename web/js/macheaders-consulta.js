/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("#btAdicionarSelecao").click(function () {
    $("#selecao").clone().appendTo("#form-selecao");
});


$("#btConsultar").click(function () {
    var value = $("input[name='value[]']").val();
    var column = $("select[name='column[]']").val();

    if (column == undefined || column == '' || column == null) {
        $(this).prop('disabled', true);
        $("#consulta-errors").html("Escolha uma item da coluna...");
        $("#consulta-errors").addClass("alert-danger");
        $("#consulta-errors").show("fast");
    } else {
        $("#consulta-errors").hide("fast");
        $(this).prop('disabled', false);
    }

});


$("select[name='column[]']").change(function () {

    var column = $("select[name='column[]']").val();
    console.log('select-: ' + column);
    if (column == undefined || column == '' || column == null) {
        $("#btConsultar").prop('disabled', true);
        $("#consulta-errors").html("Escolha...");
        $("#consulta-errors").addClass("alert-danger");
        $("#consulta-errors").show("fast");
    } else {
        $("#btConsultar").prop('disabled', false);
        $(this).prop('disabled', false);
    }

});