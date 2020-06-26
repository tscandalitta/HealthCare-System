@extends ('layouts.app')

@section ('title', 'Estadísticas')

@section ('custom-css')

<link rel="stylesheet" href="/css/estadisticas.css">


@endsection

@section ('content')
<div class="container">

        <div class="row justify-content-between">
            <div class="col-md d-flex justify-content-center">
                <div class="text-center">
                    <div class="circle mb-2">
                        <strong>{{count($obras_sociales)}}</strong>
                    </div>
                    <p class="label-info">Obras sociales</p>
                </div>
               
            </div>
            <div class="col-md d-flex justify-content-center">
                <div class="text-center">
                    <div class="circle mb-2">
                        <strong>{{count($pacientes)}}</strong>
                    </div>
                    <p class="label-info">Pacientes</p>
                </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>

        </div>



        <div class="card">
            <div class="card-body">
                This is some text within a card body.
            </div>
        </div>
</div>

@endsection
