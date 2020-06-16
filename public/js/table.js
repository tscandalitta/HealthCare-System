$(document).ready(function () {
    $('#tabla-pacientes tbody tr').click(function() {
        var paciente = $(this).find("#td-dni").html();    
        alert(paciente);    
    });
    
    $('#tabla-pacientes').DataTable();
});