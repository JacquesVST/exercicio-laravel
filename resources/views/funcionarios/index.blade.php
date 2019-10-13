@extends('layout')
@section('content')
<div class="row">
    <div class="col-6 text-left">
        <h3>Listar Funcionários</h3>

    </div>
    <div class="col-6 text-right">
            <a href="{{ route('funcionario.create') }}" class="btn btn-success">
                    <i class="fa fa-fw fa-plus"></i> Novo Funcionário
                </a>
    </div>
</div>
<div class="row">
        <div class="col-12">
<table class="table table-striped table-bordered tabel-hover">
    <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cargo</th>
            <th scope="col">Data de Matrícula</th>
            <th scope="col">Salário</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($funcionarios as $funcionario)
        <tr>
            <th scope="row">{{$funcionario->id}}</th>
            <td>{{$funcionario->nome}}</td>
            <td>{{$funcionario->cargo}}</td>
            <td>{{$funcionario->data_matricula}}</td>
            <td>{{$funcionario->salario}}</td>
            <td class="text-center">
                <form action="{{route('funcionario.destroy',$funcionario->id) }}" method="POST">
                        <a href="{{ route('funcionario.show',$funcionario->id) }}" class="btn btn-primary">
                                <i class="fa fa-fw fa-eye"></i> Exibir
                            </a>
                            <a href="{{ route('funcionario.edit',$funcionario->id) }}" class="btn btn-warning text-white">
                                <i class="fa fa-fw fa-pencil-alt"></i> Editar
                            </a>
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i> Excluir</button>
                </form>

            </td>
        </tr>
    @endforeach
    </tbody>

</table>
</div>
</div>

@endsection
