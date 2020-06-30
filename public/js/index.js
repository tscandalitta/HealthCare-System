$(document).ready(function () {
    $('#tabla-pacientes tbody tr').click(function () {
        var dniPaciente = $(this).find("#td-dni").html();

        buscarPaciente(dniPaciente);

    });
    $('#tabla-pacientes').DataTable({
        "pageLength": 10,
        "dom": '<f>rt<"row justify-content-center"p>'
    });

    function buscarPaciente(dni) {
        let url = "/pacientes/" + dni;
        $.get(url, function (data) {
            mostrarInfoPaciente(data[0]);
            $('#card-paciente').removeAttr('hidden');
            $('#col-card-paciente').removeClass('align-self-center');
            $('#cartel-inicial').attr('hidden','hidden');
        });
    }

    function mostrarInfoPaciente(paciente) {
        $('.btn').attr("disabled", false);
        $("#form-edit").attr("action", "/pacientes/" + paciente["id"] + "/hc");
        $("#form-delete").attr("action", "/pacientes/" + paciente["id"]);
        $("#btn-modificar-datos").attr("href", "/pacientes/" + paciente["id"] + "/edit");
        $("#field-nombre").text(paciente["apellido"] + ", " + paciente["nombre"]);
        $("#field-id").text(paciente["id"]);
        $("#field-dni").text(paciente["dni"]);
        $("#field-direccion").text(paciente["direccion"]);
        $("#field-telefono").text(paciente["telefono"]);
        $("#field-historiaClinica").val(paciente["historia_clinica"]);
        if(paciente["obra_social"] != null)
            $("#field-obraSocial").text(paciente["obra_social"]["sigla"] + " - " + paciente["obra_social"]["nombre"]);
        mostrarEstudios(paciente["estudios"]);
    }

    function mostrarEstudios(paciente) {
        $('#div-estudios').empty();
        paciente.forEach(img => {
            var estudio = document.createElement("a");
            estudio.setAttribute('href',img["imagen"]);
            var imagen = document.createElement("img");
            imagen.setAttribute('src',img["imagen"]);
            imagen.setAttribute('height',100);
            imagen.setAttribute('class','m-1');
            estudio.appendChild(imagen);
            $('#div-estudios').append(estudio);
        });
        if(paciente.length > 0)
            $('#card-estudios').removeAttr('hidden');
        else
            $('#card-estudios').attr('hidden','hidden');
    }
});
