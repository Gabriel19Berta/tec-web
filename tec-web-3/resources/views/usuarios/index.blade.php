@extends('layout.padrao')

@section('conteudo')
<div>
    <!-- PROFESSOR APENAS FEZ foreach. Não fez tabela -->
    <div class="h3 text-center alert alert-secondary mt-2">Usuários</div>
    
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>visualizar</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user["name"] }}</td>
                <td>{{ $user["email"] }}</td>
                <td>
                    <a href="{{ route('/usuarios.show', $user->id) }}" class="btn btn-info">
                        visualizar
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    
</div>
@endsection