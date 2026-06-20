@extends('layout.padrao')

@section('conteudo')
<!-- PROFESSOR APENAS FEZ foreach. Não fez tabela e estilizacao -->
<div class="container mt-4">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Usuários</h3>
        </div>

        <div class="card-body">

            @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Plano</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->plano == 'Premium')
                                        <span class="badge bg-warning text-dark">
                                            {{ $user->plano }}
                                        </span>
                                    @elseif($user->plano == 'Básico')
                                        <span class="badge bg-info">
                                            {{ $user->plano }}
                                        </span>
                                    @else
                                        <span class="badge bg-secondary">
                                            Sem Plano
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>
@endsection