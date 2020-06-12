@extends ('layouts.layout')

@section ('content')
<div class="container">


<div class="table-responsive">
  <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
        </tr>
      </thead>
      <tbody>
          @foreach($pacientes as $paciente)
          <tr>
              <td>{{ $paciente->nombre }}</td>
              <td>{{ $paciente->apellido }}</td>
          </tr>
          @endforeach
      </tbody>
    </table>    
</div>
</div>
@endsection