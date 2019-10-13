@extends('layout')
@section('content')
<div class="row">
    <div class="col-12">
        <h3>Editar Funcionário</h3>

    </div>
</div>
<div class="row">
    <div class="col-12">
        <form id="editFuncionario" name="editFuncionario" method="POST" action="{{ route('funcionario.update', $funcionario->id )}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                    <label for="id">Id: </label>
            <input type="text" id="id" name="id" class="form-control" value="{{ $funcionario->id }}" readonly>
                </div>
            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ $funcionario->nome }}">
            </div>
            <div class="form-group">
                <label for="cargo">Cargo: </label>
                <input type="text" id="cargo" name="cargo" class="form-control" value="{{ $funcionario->cargo }}">
            </div>
            <div class="form-group">
                    <label for="data_matricula">Data Matrícula: </label>
                    <input type="datetime-local" id="data_matricula" name="data_matricula" class="form-control" value="{{ Carbon\Carbon::parse($funcionario->data_matricula)->format('Y-m-d') }}">
                </div>
            <div class="form-group">
                <label for="salario">Salário: </label>
                <input type="number" id="salario" name="salario" class="form-control" value="{{ $funcionario->salario }}">
            </div>
            <input type="submit" class="btn btn-success" id="salvar" value="Salvar">
            <input type="reset" class="btn btn-warning text-white" id="limpar" value="Limpar">
            <a href="{{ route('funcionario.index') }}" class="btn btn-primary">
                    <i class="fa fa-fw fa-arrow-left"></i> Voltar
                </a>
        </form>
    </div>
</div>

@endsection
