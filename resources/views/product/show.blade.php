@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $product->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Paterno:</strong>
                            {{ $product->Paterno }}
                        </div>
                        <div class="form-group">
                            <strong>Materno:</strong>
                            {{ $product->Materno }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $product->Edad }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $product->Sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $product->Calle }}
                        </div>
                        <div class="form-group">
                            <strong>Numint:</strong>
                            {{ $product->NumINT }}
                        </div>
                        <div class="form-group">
                            <strong>Numext:</strong>
                            {{ $product->NumEXT }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $product->Colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $product->Municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $product->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Intereses:</strong>
                            {{ $product->Intereses }}
                        </div>
                        <div class="form-group">
                            <strong>Destinopref:</strong>
                            {{ $product->DestinoPref }}
                        </div>
                        <div class="form-group">
                            <strong>Tipohab:</strong>
                            {{ $product->Tipohab }}
                        </div>
                        <div class="form-group">
                            <strong>Ingresomens:</strong>
                            {{ $product->IngresoMens }}
                        </div>
                        <div class="form-group">
                            <strong>Viajesalanio:</strong>
                            {{ $product->Viajesalanio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
