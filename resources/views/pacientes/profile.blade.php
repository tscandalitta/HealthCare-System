@extends ('layouts.app')

@section ('title', 'Perfil')

@section ('content')
<div class="container">

    <h1>{{ $paciente->nombre." ".$paciente->apellido }}</h1>

    <hr>

    <div class="row">
        <div class="col-5">
            <div class="d-flex">
                <label class="mr-1" for="field-dni"><strong>DNI:</strong></label>
                <label id="field-dni">{{ $paciente->dni }}</label>
            </div>
            <div class="d-flex">
                <label class="mr-1" for="field-obraSocial"><strong>Obra Social:</strong></label>
                <label id="field-obraSocial">{{ $paciente->obraSocial->getNombreCompleto() }}</label>
            </div>


        </div>
        <div class="col-7">
            <div class="d-flex">
                <label class="mr-1" for="field-dni"><strong>Teléfono:</strong></label>
                <label id="field-telefono">{{ $paciente->telefono }}</label>
            </div>
            <div class="d-flex">
                <label class="mr-1" for="field-dni"><strong>Direccion:</strong></label>
                <label id="field-direccion">{{ $paciente->direccion }}</label>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col">
            <label class="mr-1" for="field-historiaClinica"><strong>Historia clínica:</strong></label>
            <textarea class="form-control mb-3" id="field-historiaClinica" name="historia_clinica" rows="8" disabled
                style="background-color: white;"
                placeholder="No posee historia clínica a la fecha de hoy.">{{ $paciente->historia_clinica }}</textarea>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col">
            <label class="mr-1" for=""><strong>API Token:</strong>
                Utilízalo para acceder a tus datos desde otros servicios web. No lo compartas con nadie.</label>
            <button type="button" class="btn btn-sm btn-primary " id="field-token" data-toggle="popover" title="Token:"
                data-content="{{ $api_token }}">Mostrar token</button>

        </div>
    </div>

    <hr>

    <footer>
        <p class="text-danger">Si detecta que alguno de estos datos es incorrecto, por favor, comuníquese con el médico.</p>
    </footer>

</div>
@endsection

@section ('scripts')
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
    $('.popover-dismiss').popover({
        trigger: 'focus'
    });
</script>
@endsection
