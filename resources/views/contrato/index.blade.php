@extends('layouts.app')

@section('template_title')
Contrato
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <strong> <h5 class="card-title">Contratos</h5></strong>
                        <div class="float-right">
                            <a href="{{ route('contratos.create', $caja ) }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Crear Contrato') }}
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
                                  
                                    <th>No. de contrato</th>
                                    <th>Área</th>
                                    <th>Descripción</th>
                                    <th>No. de tomos del expediente</th>
                                    <th>Bitácora</th>
                                    <th>Acciones</th>
                                    <th>
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($contratos))
                                @foreach ($contratos as $contrato)
                                <tr>
                                   
                                    <td>{{ $contrato->numContrato }}</td>
                                    <td>{{ $contrato->area }}</td>
                                    <td>{{ $contrato->descripcion }}</td>
                                    <td>{{ $contrato->numTomosExp }}</td>
                                    <td>{{ $contrato->bitacora }}</td>
                                   
                                    <td>
                                        <form action="{{ route('contratos.destroy',$contrato->id) }}" method="POST">
                                            {{-- <a class="btn btn-sm btn-primary "
                                                href="{{ route('contratos.show',$contrato->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> Show</a> --}}
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('contratos.edit',$contrato->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Editar</a>

                                                    <a href="{{ route('expedientes.index',$contrato->id) }}" class="btn btn-sm btn-info">Ver Expediente</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Estás seguro que deseas eliminar el registro?');"  ><i
                                                    class="fa fa-fw fa-trash"></i> Eliminar</button>

                                        </form>
                                    </td>
                                    
                                </tr>
                                @endforeach
                                @else
                                <div class="alert alert-dismissable alert-warning">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <h4>Mensaje del sistema</h4>
                                    <p>No se encuentran registros.</p>
                                </div>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
