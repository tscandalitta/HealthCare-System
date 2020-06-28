@extends ('layouts.app')

@section ('title', 'Añadir paciente')

@section ('custom-css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section ('content')
<div class="container">
    <form method="POST" action="/pacientes" enctype="multipart/form-data">

        @csrf

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="input-nombre">Nombre/s</label>
                <input type="text" class="form-control" id="input-nombre" name="nombre" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-apellido">Apellido/s</label>
                <input type="text" class="form-control" id="input-apellido" name="apellido" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="input-direccion">Dirección</label>
                <input type="text" class="form-control" id="input-direccion" name="direccion">
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <label for="input-dni">DNI</label>
                <input type="text" class="form-control" id="input-dni" name="dni">
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <label for="input-telefono">Teléfono</label>
                <input type="text" class="form-control" id="input-telefono" name="telefono">
            </div>
        </div>

        <div class="form-row">
            <div class="col mb-3">
                <label for="input-obraSocial">Obra social</label>
                <select class="form-control" id="input-obraSocial" name="obra_social_id" style="width: 100%">
                    <option value="" selected="selected">Sin obra social</option>
                    @foreach ($obras_sociales as $obra_social)
                    <option value="{{ $obra_social->id }}">{{$obra_social->sigla}} - {{$obra_social->nombre}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="col mb-3">
                <label for="input-historiaClinica">Historia clínica</label>
                <textarea class="form-control" id="input-historiaClinica" name="historia_clinica"
                    rows="4"></textarea>
            </div>
        </div>

        <hr>

        <div class="form-group row">
            <label for="input-studios" class="col-md-2 col-form-label">Adjuntar estudios</label>
            <div class="col-md-8">
                <input type="file" class="form-control-file" id="input-estudios" name="estudios[]" multiple>
            </div>
        </div>

        <div class="form-group row">
            <div class="col d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mr-3">Guardar</button>
                <button type="button" class="btn btn-outline-secondary" onclick="history.back()">Cancelar</button>
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

@section ('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="/js/create.js"></script>
@endsection
