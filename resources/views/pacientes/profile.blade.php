@extends ('layouts.app')

@section ('title', 'Perfil')

@section ('content')
<div class="container">

<p>{{ $user->id }}</p>
</div>

@endsection