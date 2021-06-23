@extends('layouts.app')

@section('template_title')
    Expediente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Expediente') }}
                            </span>

                            
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
                                        
										<th>Numserie</th>
										<th>Descripcion</th>
										<th>Fechaapertura</th>
										<th>Fechacierre</th>
										<th>Valordocumental Id</th>
										<th>Valorinformacion Id</th>
										<th>Vigconcentracion Id</th>
										<th>Vigtramite Id</th>
										<th>Totalvigencia</th>
										<th>Destinofinal Id</th>
										<th>Signatura</th>
										<th>Observaciones</th>
										<th>Contrato Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        <tr>
                                            
                                            
											<td>{{ $expediente->numSerie }}</td>
											<td>{{ $expediente->descripcion }}</td>
											<td>{{ $expediente->fechaApertura }}</td>
											<td>{{ $expediente->fechaCierre }}</td>
											<td>{{ $expediente->valorDocumental_id }}</td>
											<td>{{ $expediente->valorInformacion_id }}</td>
											<td>{{ $expediente->vigConcentracion_id }}</td>
											<td>{{ $expediente->vigTramite_id }}</td>
											<td>{{ $expediente->totalVigencia }}</td>
											<td>{{ $expediente->destinoFinal_id }}</td>
											<td>{{ $expediente->signatura }}</td>
											<td>{{ $expediente->observaciones }}</td>
											<td>{{ $expediente->contrato_id }}</td>

                                            <td>
                                                <form action="{{ route('expedientes.destroy',$expediente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('expedientes.show',$expediente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('expedientes.edit',$expediente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
@endsection
