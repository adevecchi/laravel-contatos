@extends('contatos.layout')

@section('title', 'Gerenciamento de Contatos')

@push('css')
<style>
    span>strong {
        font-size: initial;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-10">
                        <span class="text-info"><strong>Editar Contato</strong></span>
                        <a href="{{ url()->previous() }}" class="btn btn-info btn-sm">
                            <i class="fa fa-arrow-left"></i> Voltar
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form id="frm-contatos" action="{{ route('contatos.update', $contato->id) }}" method="post">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $contato->nome }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $contato->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $contato->telefone }}" maxlength="15" required>
                        </div>
                        <div class="well well-sm clearfix">
                            @csrf
                            @method('PUT')
                            <button id="btn-salvar" class="btn btn-success pull-right" type="submit">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $('#frm-contatos').on('submit', function (evt) {
        $('#btn-salvar').prop('disabled', true);
    });
</script>
@endpush