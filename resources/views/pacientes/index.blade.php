@extends ('layouts.app')

@section ('title', 'Inicio')

@section ('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/css/magnific-popup.min.css">
<link rel="stylesheet" href="/css/index.css">
@endsection

@section ('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-5">
            <div class="table-responsive">
                <table id="tabla-pacientes" class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Apellido</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">DNI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pacientes as $paciente)
                        <tr onclick="">
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td id="td-dni">{{ $paciente->dni }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div id="col-card-paciente" class="col-md-7 align-self-center">

            <div id="cartel-inicial" class="text-center">
                <p>Seleccione un paciente de la lista</p>
            </div>

            <div class="card mb-2" id="card-paciente" hidden>
                <div class="card-header">
                    <label id="field-id" hidden></label>
                    <div class="row">
                        <div class="col">
                            <h4 id="field-nombre"></h4>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-sm btn-outline-primary float-right" id="field-token"
                                data-toggle="popover" title="Con este token el paciente podrá acceder a sus datos:"
                                data-content="">Mostrar token</button>
                        </div>
                    </div>
                    <hr class="mt-0 mb-2">
                    <div class="row">
                        <div class="col-5">
                            <div class="d-flex">
                                <label class="mr-1" for="field-dni"><strong>DNI:</strong></label>
                                <label id="field-dni"></label>
                            </div>
                            <div class="d-flex">
                                <label class="mr-1" for="field-obraSocial"><strong>OS:</strong></label>
                                <label id="field-obraSocial"></label>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="d-flex">
                                <label class="mr-1" for="field-dni"><strong>Teléfono:</strong></label>
                                <label id="field-telefono"></label>
                            </div>
                            <div class="d-flex">
                                <label class="mr-1" for="field-dni"><strong>Direccion:</strong></label>
                                <label id="field-direccion"></label>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form id="form-edit" method="POST" action="">
                        @method('PATCH')
                        @csrf
                        <textarea class="form-control mb-3" id="field-historiaClinica" name="historia_clinica" rows="8"
                            placeholder="Historia clínica"></textarea>
                        <div class="row">
                            <div class="col d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary" disabled>Guardar HC</button>
                                <a type="button" href="" class="btn btn-primary" id="btn-modificar-datos"
                                    disabled>Modificar datos</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card" id="card-estudios" hidden>
                <div class="popup-gallery" id="div-estudios">
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section ('scripts')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="/js/magnific-popup.js"></script>
<script src="/js/gallery.js"></script>
<script src="/js/index.js"></script>
@endsection
