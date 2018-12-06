@extends('adminlte::page')

@section('title', 'Painel Palavras')

@push('js')
    <script src="{{ asset('js/funcoes_hotel.js') }}"></script>
@endpush

@section('content')

    <section class="content">
        <h3> Hoteis </h3>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listagem de Hoteis</h3>
                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-btn">
                                </div>
                            </div>
                        </div>
                    </div>
                    <section id="categorias_renderiza">
                        @include('admin.hotel.load')
                    </section>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop