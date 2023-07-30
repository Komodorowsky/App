@extends('layouts.app')

@section('template_title')
    Product
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Product') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                                        
										<th>Nombre</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Edad</th>
										<th>Sexo</th>
										<th>Calle</th>
										<th>Numero interior</th>
										<th>Numero exterior</th>
										<th>Colonia</th>
										<th>Municipio</th>
										<th>Estado</th>
										<th>Intereses</th>
										<th>Destino preferido</th>
										<th>Tipo habitacional</th>
										<th>Ingreso mensual</th>
										<th>Viajes al año</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $product->Nombre }}</td>
											<td>{{ $product->Paterno }}</td>
											<td>{{ $product->Materno }}</td>
											<td>{{ $product->Edad }}</td>
											<td>{{ $product->Sexo }}</td>
											<td>{{ $product->Calle }}</td>
											<td>{{ $product->NumINT }}</td>
											<td>{{ $product->NumEXT }}</td>
											<td>{{ $product->Colonia }}</td>
											<td>{{ $product->Municipio }}</td>
											<td>{{ $product->Estado }}</td>
											<td>{{ $product->Intereses }}</td>
											<td>{{ $product->DestinoPref }}</td>
											<td>{{ $product->Tipohab }}</td>
											<td>{{ $product->IngresoMens }}</td>
											<td>{{ $product->Viajesalanio }}</td>

                                            <td>
                                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection
