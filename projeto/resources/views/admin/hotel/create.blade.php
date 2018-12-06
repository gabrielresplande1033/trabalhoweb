@extends('adminlte::page')

@section('title', 'Painel Palavras')

@section('content')

    <section class="content">
        <h3> Hoteis </h3>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Hotel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('hoteis.store') }}" method="post" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    @include('admin.errors._check_form')
                    @include('flash::message')
                    <div class="form-group">
                        <label for="nome">Home Hotel</label>
                        <input type="input" name="nome" id="nome"  class="form-control" placeholder="Nome do hotel">
                    </div>

                    <div class="form-group">
                        <label for="nome">Valor Hotel</label>
                        <input type="number" name="valor" id="valor"  class="form-control" placeholder="Nome do hotel">
                    </div>

                    <div class="form-group">
                        <label for="nota">Nota Hotel</label>
                        <input type="number" name="nota" id="nota"  class="form-control" placeholder="Nota do Hotel">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço Hotel</label>
                        <input type="input" name="endereco" id="endereco"  class="form-control" placeholder="Endereço Hotel">
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição do Hotel</label>
                        <input type="input" name="descricao" id="descricao"  class="form-control" placeholder="Descrição do Hotel">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </section>
@stop
