@extends ('layouts.app')

@section ('title', 'Inicio')

@section ('custom-css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/css/table.css">
@endsection

@section ('content')
<div class="container">


<div class="row">
    <div class="col">
        <div class="table-responsive">
            <table id="tabla-pacientes" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">DNI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->apellido }}</td>
                        <td>{{ $paciente->nombre }}</td>
                        <td id="td-dni">{{ $paciente->dni }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col"></div>
</div>
</div>
@endsection

@section ('scripts')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="/js/table.js"></script>
@endsection
