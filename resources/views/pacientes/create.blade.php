@extends ('layouts.app')

@section ('title', 'Añadir paciente')

@section ('custom-css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section ('content')
<div class="container">
    <form method="POST" action="/pacientes" enctype="multipart/form-data">

        @csrf

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="input-nombre">Nombre/s</label>
                <input type="text" class="form-control" id="input-nombre" name="nombre" value="{{ old('nombre') }}"
                    required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-apellido">Apellido/s</label>
                <input type="text" class="form-control" id="input-apellido" name="apellido"
                    value="{{ old('apellido') }}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="input-direccion">Dirección</label>
                <input type="text" class="form-control" id="input-direccion" name="direccion"
                    value="{{ old('direccion') }}">
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <label for="input-dni">DNI</label>
                <input type="text" class="form-control" id="input-dni" name="dni" value="{{ old('dni') }}" required>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <label for="input-telefono">Teléfono</label>
                <input type="text" class="form-control" id="input-telefono" name="telefono"
                    value="{{ old('telefono') }}">
            </div>
        </div>

        <div class="form-row">
            <div class="col mb-3">
                <label for="input-historiaClinica">Historia clínica</label>
                <textarea class="form-control" id="input-historiaClinica" name="historia_clinica" rows="4">{{ old('historia_clinica') }}
                </textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-6 mb-3">
                <label for="input-obraSocial">Obra social</label>
                <select class="form-control" id="input-obraSocial" name="obra_social_id" style="width: 100%">
                    @foreach ($obras_sociales as $obra_social)
                    <option value="{{ $obra_social->id }}" @if($obra_social->sigla == null)
                        selected="selected"
                        @endif
                        >{{$obra_social->getNombreCompleto()}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6 mb-3">
                <label for="input-studios">Adjuntar estudios</label>
                <input type="file" class="form-control-file" id="input-estudios" name="estudios[]" multiple>
            </div>
        </div>

        <hr>
        
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
