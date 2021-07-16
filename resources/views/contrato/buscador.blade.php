@extends('buscador')
@section('contratos')
    <table class="table table-striped container">
                            <thead class="thead">
                                <tr>
                                    <th> No. de contrato</th>
                                    <th>Área</th>
                                    <th>Descripción</th>
                                    <th>No. de caja</th>
                                    <th>Pasillo</th>
                                    <th>Anaquel</th>
                                    <th>Ver información</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contratos as $contrato)
                                <tr>
                                    <td>{{ $contrato->numContrato }}</td>
                                    <td>{{ $contrato->area }}</td>
                                    <td>{{ $contrato->descripcion }}</td>
                                    <td>{{ $contrato->numCaja}} </td> 
                                    <td>{{ $contrato->pasillo}} </td> 
                                    <td>{{ $contrato->anaquel}} </td> 
                                    <td>
                                        <form action="{{ route('contratos.destroy',$contrato->id) }}" method="POST">
                                            {{-- <a class="btn btn-sm btn-primary "
                                                href="{{ route('contratos.show',$contrato->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                   {{-- <a class="btn btn-sm btn-success"  href="{{ route('contratos.edit',$contrato->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Editar</a> --}}
                                                    <a class="btn btn-sm btn-primary" href="{{ route('expedientes.index',$contrato->id) }}">Expediente</a>
                                            @csrf
                                            @method('DELETE')
                                            {{-- <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> Eliminar</button> --}}
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
@endsection                            