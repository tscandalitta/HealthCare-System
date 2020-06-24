@extends ('layouts.app')

@section ('title', 'Añadir paciente')

@section ('content')
<div class="container">
    <form method="POST" action="/pacientes" enctype="multipart/form-data">

        @csrf

        <div class="form-group row">
            <label for="input-nombre" class="col-lg-1 col-form-label">Nombre/s</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-nombre" name="nombre" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="input-apellido" class="col-lg-1 col-form-label">Apellido/s</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-apellido" name="apellido" required>

            </div>
        </div>

        <div class="form-group row">
            <label for="input-dni" class="col-lg-1 col-form-label">DNI</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-dni" name="dni">

            </div>
        </div>

        <div class="form-group row">
            <label for="input-direccion" class="col-lg-1 col-form-label">Dirección</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-direccion" name="direccion">

            </div>
        </div>

        <div class="form-group row">
            <label for="input-telefono" class="col-lg-1 col-form-label">Teléfono</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-telefono" name="telefono">

            </div>
        </div>

        <div class="form-group row">
            <label for="input-obraSocial" class="col-lg-1 col-form-label">Obra social</label>
            <div class="col-lg-11">
                <input type="search" class="form-control" list="obras-sociales" id="input-obraSocial"
                    name="obra_social_id">
                <datalist id="obras-sociales">
                    @foreach ($obras_sociales as $obra_social)
                    <option value="{{ $obra_social->sigla }} - {{$obra_social->nombre}}">
                        @endforeach
                </datalist>
            </div>
        </div>

        <div class="form-group row">
            <label for="input-historiaClinica" class="col-lg-1 col-form-label">Historia clínica</label>
            <div class="col-lg-11">
                <textarea class="form-control" id="input-historiaClinica" name="historia_clinica" rows="4"></textarea>

            </div>
        </div>

        <hr>
        
        <div class="form-group row">
            <label for="input-studios" class="col-lg-2 col-form-label">Adjuntar estudios</label>
            <div class="col-lg-10">
                <input type="file" class="form-control-file" id="input-estudios" name="estudios[]" multiple>
            </div>
        </div>

        <div class="form-group row">
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mr-3">Guardar</button>
                <button type="button" class="btn btn-outline-secondary" onclick="window.history.back()">Cancelar</button>
            </div>
        </div>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</div>
@endsection
