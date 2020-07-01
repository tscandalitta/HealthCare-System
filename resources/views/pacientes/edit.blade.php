@extends ('layouts.app')

@section ('title', 'Editar datos de paciente')


@section ('custom-css')
<link rel="stylesheet" href="/css/magnific-popup.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section ('content')
<div class="container">
    <form method="POST" action="/pacientes/{{ $paciente->id }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="input-nombre">Nombre/s</label>
                <input type="text" class="form-control" id="input-nombre" name="nombre" value="{{ $paciente->nombre }}"
                    required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="input-apellido">Apellido/s</label>
                <input type="text" class="form-control" id="input-apellido" name="apellido"
                    value="{{ $paciente->apellido }}" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="input-direccion">Dirección</label>
                <input type="text" class="form-control" id="input-direccion" name="direccion"
                    value="{{ $paciente->direccion }}">
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <label for="input-dni">DNI</label>
                <input type="text" class="form-control" id="input-dni" name="dni" value="{{ $paciente->dni }}" required>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <label for="input-telefono">Teléfono</label>
                <input type="text" class="form-control" id="input-telefono" name="telefono"
                    value="{{ $paciente->telefono }}">
            </div>
        </div>

        <div class="form-row">
            <div class="col mb-3">
                <label for="input-historiaClinica">Historia clínica</label>
                <textarea class="form-control" id="input-historiaClinica" name="historia_clinica"
                    rows="4">{{ $paciente->historia_clinica }}</textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="col-sm-6 mb-3">
                <label for="input-obraSocial">Obra social</label>
                <select class="form-control" id="input-obraSocial" name="obra_social_id" style="width: 100%">
                    @foreach ($obras_sociales as $obra_social)
                    <option value="{{ $obra_social->id }}"
                        @if($obra_social->id == $paciente->obraSocial->id)
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
    @can ('delete pacientes')
                    <div class="row">
                        <div class="col mt-2">
                            <form id="form-delete" method="POST" action="/pacientes/{{$paciente->id}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar paciente</button>
                            </form>
                        </div>
                    </div>
    @endcan

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
<script src="/js/magnific-popup.js"></script>
<script src="/js/gallery.js"></script>

@endsection
