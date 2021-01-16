@extends('contatos.layout')

@section('title', 'Gerenciamento de Contatos')

@push('css')
<style>
    span>strong {
        font-size: initial;
    }
    ul.pagination {
        margin-bottom: 0;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-10">
                        <span class="text-info"><strong>Lista de Contatos</strong></span>
                        <a href="{{ url('contatos/create') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i>&nbsp; Criar Novo
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contatos as $contato)
                            <tr>
                                <td>{{ $contato->id }}</td>
                                <td>{{ $contato->nome }}</td>
                                <td>{{ $contato->email }}</td>
                                <td>{{ $contato->telefone }}</td>
                                <td class="text-center p-0 align-middle" width="82">
                                    <a href="{{ route('contatos.show', $contato->id) }}" class="btn btn-secondary btn-sm">Detalhes</a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <a href="{{ route('contatos.edit', $contato->id) }}" class="btn btn-info btn-sm">Editar</a>
                                </td>
                                <td class="text-center p-0 align-middle" width="70">
                                    <button type="button" class="btn btn-danger btn-sm btn-excluir" data-id="{{ $contato->id }}" data-toggle="modal" data-target="#excluir">
                                        Excluir
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <div class="d-flex -justify-content-center float-right">
                        {!! $contatos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="excluir" tabindex="-1" aria-labelledby="excluirLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info">Gerenciamento de Contatos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Deseja excluir o contato?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-action" data-dismiss="modal">Não</button>
                <form id="frm-excluir" action="{{ route('contatos.destroy', ':id') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="btn-excluir" class="btn btn-danger btn-action">Sim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $('.btn-excluir').on('click', function (evt) {
        let $frm = $('#frm-excluir');
        $frm.attr('action', $frm.attr('action').replace(':id', $(this).data('id')));
    });
    $('#frm-excluir').on('submit', function (evt) {
        $('.btn-action').prop('disabled', true);
        $('.modal-body>p').text('Processando...');
    });
</script>
@endpush