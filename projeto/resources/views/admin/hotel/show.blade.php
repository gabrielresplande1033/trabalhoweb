@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Hoteis </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Hoteis</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('hoteis.update', $hotel->id) }}" method="post" role="form" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="box-body">
                    @include('admin.errors._check_form')
                    @include('flash::message')
                    <div class="form-group">
                        <label for="nome">Home Hotel</label>
                        <input type="input" name="nome" id="nome"  class="form-control" placeholder="Nome da categoria" value="{{ $hotel->nome }}">
                    </div>

                    <div class="form-group">
                        <label for="nome">Valor Hotel</label>
                        <input type="number" name="valor" id="valor"  class="form-control" placeholder="Nome do hotel">
                    </div>

                    <div class="form-group">
                        <label for="nota">Nota Hotel</label>
                        <input type="number" name="nota" id="nota"  class="form-control" placeholder="Nota do Hotel" value="{{ $hotel->nota }}">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço Hotel</label>
                        <input type="input" name="endereco" id="endereco"  class="form-control" placeholder="Endereço Hotel" value="{{ $hotel->endereco }}">
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição do Hotel</label>
                        <input type="input" name="descricao" id="descricao"  class="form-control" placeholder="Descrição do Hotel" value="{{ $hotel->descricao }}">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                    <a href="{{route('hoteis.index')}}" class="btn btn-default">Voltar</a>
                </div>
            </form>
        </div>
    </section>
@stop
