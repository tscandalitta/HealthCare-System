$(document).ready(function () {
    $('#tabla-pacientes tbody tr').click(function() {
        var dniPaciente = $(this).find("#td-dni").html();    
        
        buscarPaciente(dniPaciente);

    });
    $('#tabla-pacientes').DataTable();

    function buscarPaciente(dni) {
        var url = "/pacientes/" + dni + "/show";
        $.get(url, function(data) {
            alert(JSON.stringify(data));
        })
    }
});