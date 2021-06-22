@extends('layouts.app')

@section('template_title')
Cajas
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title"><strong>
                                {{ __('Cajas') }}
                        </span>
                        </strong>
                        <div class="float-right">
                            <a href="{{ route('cajas.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="right">
                                {{ __('Crear una caja') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Acta/No.caja</th>
                                    <th>No. de caja</th>
                                    <th>No. de tomos en caja</th>
                                    <th>No. de bitacoras en caja</th>
                                    <th>Pasillo</th>
                                    <th>Anaquel</th>
                                    <th>Acciones</th>
                                    <th>
                                        <div class="card">
                                            <a class="btn btn-outline-secondary" href="/buscador">
                                                <img src="/img/busc.png" width="55" height="auto" />
                                            </a>
                                    </th>
                    </div>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($cajas as $caja)
                        <tr>
                            <td>{{ ++$i }}</td>

                            <td>{{ $caja->numActa }}</td>
                            <td>{{ $caja->numCaja }}</td>
                            <td>{{ $caja->numTomosCaja }}</td>
                            <td>{{ $caja->numBitacora }}</td>
                            <td>{{ $caja->pasillo }}</td>
                            <td>{{ $caja->anaquel }}</td>

                            <td>

                                <form action="{{ route('cajas.destroy',$caja->id) }}" method="POST">
                                    <!-- <a class="btn btn-sm btn-primary "
                                                href="{{ route('cajas.show',$caja->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> </a> -->
                                    <a href="{{ route('cajacontrato', $caja->id) }}" class="btn btn-sm btn-info">Ver
                                        contratos</a>
                                    <a class="btn btn-sm btn-success" href="{{ route('cajas.edit',$caja->id) }}"><i
                                            class="fa fa-fw fa-edit"></i> Editar</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fa fa-fw fa-trash"></i> Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        {!! $cajas->links() !!}
    </div>
</div>
</div>
@endsection