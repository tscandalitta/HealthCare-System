@extends ('layouts.app')

@section ('title', 'Añadir obra social')

@section ('content')
<div class="container">
    <form method="POST" action="/obras_sociales">

        @csrf

        <div class="form-row justify-content-center">
            <div class="col-md-2 mb-3">
                <label for="input-sigla">Sigla</label>
                <input type="text" class="form-control" id="input-sigla" name="sigla" value="{{ old('sigla') }}">
            </div>
            <div class="col-md-4 mb-3">
                <label for="input-nombre">Nombre*</label>
                <input type="text" class="form-control" id="input-nombre" name="nombre"
                    value="{{ old('nombre') }}" required>
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
