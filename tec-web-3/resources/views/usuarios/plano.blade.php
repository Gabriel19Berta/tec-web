@extends('layout.padrao')

@section('conteudo')
<h2> {{ $usuario->name }}</h2>
<h3> {{ $usuario->plano }}</h3>

<form action="{{ route('usuario.plano', $usuario->id) }}" method="post">
    @csrf
    
    <select name="plano" id="plano">
        <option value="sem plano">Sem plano</option>
        <option value="Básico">Básico</option>
        <option value="Premium">Premium</option>
    </select>

    <button type="submit" class="btn btn-primary">Alterar Plano</button>
</form>
@endsection