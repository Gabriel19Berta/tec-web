@extends('layout.padrao')

@section('conteudo')
<div>
    <!-- PROFESSOR APENAS FEZ foreach. Não fez tabela -->
    <div class="h3 text-center alert alert-secondary mt-2">Usuários - {{$user["id"]}} </div>
    
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
        <tr>
            <td>{{ $user["name"] }}</td>
            <td>{{ $user["email"] }}</td>
        </tr>
    </table>
    
</div>
@endsection