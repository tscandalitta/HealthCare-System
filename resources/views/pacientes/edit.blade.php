@extends ('layouts.app')

@section ('title', 'Editar datos de paciente')


@section ('custom-css')
<link rel="stylesheet" href="/css/magnific-popup.min.css">
@endsection

@section ('content')
<div class="container">
    <form method="POST" action="/pacientes/{{ $paciente->id }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf

        <div class="form-group row">
            <label for="input-nombre" class="col-lg-1 col-form-label">Nombre/s</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-nombre" name="nombre" value="{{ $paciente->nombre }}"
                    required>
            </div>
        </div>
        <div class="form-group row">
            <label for="input-apellido" class="col-lg-1 col-form-label">Apellido/s</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-apellido" name="apellido"
                    value="{{ $paciente->apellido }}" required>

            </div>
        </div>

        <div class="form-group row">
            <label for="input-dni" class="col-lg-1 col-form-label">DNI</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-dni" name="dni" value="{{ $paciente->dni }}">

            </div>
        </div>

        <div class="form-group row">
            <label for="input-direccion" class="col-lg-1 col-form-label">Dirección</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-direccion" name="direccion"
                    value="{{ $paciente->direccion }}">

            </div>
        </div>

        <div class="form-group row">
            <label for="input-telefono" class="col-lg-1 col-form-label">Teléfono</label>
            <div class="col-lg-11">
                <input type="text" class="form-control" id="input-telefono" name="telefono"
                    value="{{ $paciente->telefono }}">

            </div>
        </div>

        <div class="form-group row">
            <label for="input-obraSocial" class="col-lg-1 col-form-label">Obra social</label>
            <div class="col-lg-11">
                <input class="form-control" list="obras-sociales" id="input-obraSocial" name="obra_social_id" 
                    value="@if (isset($paciente->obraSocial)){{$paciente->obraSocial->sigla}} {{$paciente->obraSocial->nombre }}@endif">
                <datalist id="obras-sociales">
                    @foreach ($obras_sociales as $obra_social)
                    <option value="{{ $obra_social->nombreCompleto }}">
                        @endforeach
                </datalist>
            </div>
        </div>

        <div class="form-group row">
            <label for="input-historiaClinica" class="col-lg-1 col-form-label">Historia clínica</label>
            <div class="col-lg-11">
                <textarea class="form-control" id="input-historiaClinica" name="historia_clinica"
                    rows="4">{{ $paciente->historia_clinica }}</textarea>

            </div>
        </div>

        <hr>

        <div class="form-group row">
            <label for="input-studios" class="col-lg-2 col-form-label">Adjuntar estudios</label>
            <div class="col-lg-10">
                <input type="file" class="form-control-file" id="input-estudios" name="estudios" multiple>
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

    <div class="popup-gallery">
        @if (count($paciente->estudios) > 0 )
            @foreach ($paciente->estudios as $estudio)
                <a href="{{$estudio->imagen}}" title=""><img src="{{$estudio->imagen}}" height="100"></a>
            @endforeach
        @endif

        <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg" title="The Cleaner"><img
                src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg" height="75"></a>
        <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg" title="Winter Dance"><img
                src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg" height="75"></a>
        <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg" title="The Uninvited Guest"><img
                src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg" height="75"></a>
        <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg" title="Oh no, not again!"><img
                src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg" height="75"></a>
        <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg" title="Swan Lake"><img
                src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75"></a>
        <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg" title="The Shake"><img
                src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75"></a>
        <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg" title="Who's that, mommy?"><img
                src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75"></a>
        <a href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg" title="The Cleaner"><img
                src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg" width="75" height="75"></a>
        <a href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg" title="Winter Dance"><img
                src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg" width="75" height="75"></a>
        <a href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg" title="The Uninvited Guest"><img
                src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg" width="75" height="75"></a>
        <a href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg" title="Oh no, not again!"><img
                src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg" width="75" height="75"></a>
        <a href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg" title="Swan Lake"><img
                src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg" width="75" height="75"></a>
        <a href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg" title="The Shake"><img
                src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg" width="75" height="75"></a>
        <a href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg" title="Who's that, mommy?"><img
                src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg" width="75" height="75"></a>

    </div>

</div>
@endsection

@section ('scripts')

<script src="/js/magnific-popup.js"></script>
<script src="/js/gallery.js"></script>

@endsection
