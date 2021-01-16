@extends('contatos.layout')

@section('title', 'Gerenciamento de Contatos')

@push('css')
<style>
    span>strong {
        font-size: initial;
    }
    table {
        font-family: Verdana, sans-serif;
        margin: 20px 0;
    }
    table td {
        padding: 10px;
    }
    table tr:first-child {
        border-top: 1px solid #ccc;
    }
    table tr {
        border-bottom: 1px solid #ccc;
    }
</style>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between w-100">
                        <span class="text-info"><strong>Detalhes</strong>: {{ $contato->nome }}</span>
                        <a href="{{ url()->previous() }}" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i>&nbsp; Voltar</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="w3-table-all notranslate d-flex justify-content-center">
                        <tbody>
                            <tr>
                                <td class="pr-5"><b>ID:</b></td>
                                <td>{{ $contato->id }}</td>
                            <tr>
                            <tr>
                                <td class="pr-5"><b>Nome:</b></td>
                                <td>{{ $contato->nome }}</td>
                            <tr>
                            <tr>
                                <td class="pr-5"><b>E-mail:</b></td>
                                <td>{{ $contato->email }}</td>
                            <tr>
                            <tr>
                                <td class="pr-5"><b>Telefone:</b></td>
                                <td>{{ $contato->telefone }}</td>
                            <tr>
                            <tr>
                                <td class="pr-5"><b>Adicionado:</b></td>
                                <td>{{ $contato->created_at }}</td>
                            <tr>
                            <tr>
                                <td class="pr-5"><b>Atualizado:</b></td>
                                <td>{{ $contato->updated_at }}</td>
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>

</script>
@endpush