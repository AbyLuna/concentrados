@extends('layouts.app')

@section('template_title')
Registro
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Registro') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('registros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Create New') }}
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

                                <th>Nombre del archivo</th>
                                <th>Dirección del archivo</th>
                                <th>Telefono del contacto de archivo</th>
                                <th>Correo del contacto de archivo</th>
                                <th>Nombre del responsable del archivo</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registros as $registro)
                            <tr>
                                <td>{{ ++$i }}</td>

                                <td>{{ $registro->nombreArch }}</td>
                                <td>{{ $registro->ubicacionArch }}</td>
                                <td>{{ $registro->telefono }}</td>
                                <td>{{ $registro->correo }}</td>
                                <td>{{ $registro->respNombre }}</td>

                      <td>
                                 <form action="{{ route('registros.destroy',$registro->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('registros.show',$registro->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('registros.edit',$registro->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                <a class="btn btn-sm btn-success" href="/reporte/{{$registro->id}}">Imprimir</a>
                                                
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('¿Estas Seguro Que Deseas Eliminar?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {!! $registros->links() !!}
    </div>
</div>
</div>
@endsection

