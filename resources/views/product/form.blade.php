<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="box box-info padding-1">
                <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $product->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Paterno') }}
            {{ Form::text('Paterno', $product->Paterno, ['class' => 'form-control' . ($errors->has('Paterno') ? ' is-invalid' : ''), 'placeholder' => 'Paterno']) }}
            {!! $errors->first('Paterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Materno') }}
            {{ Form::text('Materno', $product->Materno, ['class' => 'form-control' . ($errors->has('Materno') ? ' is-invalid' : ''), 'placeholder' => 'Materno']) }}
            {!! $errors->first('Materno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::text('Edad', $product->Edad, ['class' => 'form-control' . ($errors->has('Edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('Edad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::select('Sexo', ['masculino' => 'Masculino', 'femenino' => 'Femenino', 'no_binario' => 'No binario'], $product->Sexo, ['class' => 'form-control' . ($errors->has('Sexo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
            {!! $errors->first('Sexo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Calle') }}
            {{ Form::text('Calle', $product->Calle, ['class' => 'form-control' . ($errors->has('Calle') ? ' is-invalid' : ''), 'placeholder' => 'Calle']) }}
            {!! $errors->first('Calle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero Interior') }}
            {{ Form::text('NumINT', $product->NumINT, ['class' => 'form-control' . ($errors->has('NumINT') ? ' is-invalid' : ''), 'placeholder' => 'Numint']) }}
            {!! $errors->first('NumINT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero exterior') }}
            {{ Form::text('NumEXT', $product->NumEXT, ['class' => 'form-control' . ($errors->has('NumEXT') ? ' is-invalid' : ''), 'placeholder' => 'Numext']) }}
            {!! $errors->first('NumEXT', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Colonia') }}
            {{ Form::text('Colonia', $product->Colonia, ['class' => 'form-control' . ($errors->has('Colonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('Colonia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            {{ Form::text('Municipio', $product->Municipio, ['class' => 'form-control' . ($errors->has('Municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('Municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $product->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
      <!-- Checkbox para intereses -->
<div class="form-group">
    {{ Form::label('Intereses') }}
    <br>
    <label>
        {{ Form::checkbox('Intereses[]', 'Cine', in_array('Cine', json_decode($product->Intereses, true) ?? [])) }}
        Cine
    </label>
    <label>
        {{ Form::checkbox('Intereses[]', 'Musica', in_array('Musica', json_decode($product->Intereses, true) ?? [])) }}
        Musica
    </label>
    <label>
        {{ Form::checkbox('Intereses[]', 'Modelaje', in_array('Modelaje', json_decode($product->Intereses, true) ?? [])) }}
        Modelaje
    </label>
    <label>
        {{ Form::checkbox('Intereses[]', 'Compras', in_array('Compras', json_decode($product->Intereses, true) ?? [])) }}
        Compras
    </label>
    <!-- Repetir para las otras opciones de intereses -->
    <!-- ... -->
    {!! $errors->first('Intereses', '<div class="invalid-feedback">:message</div>') !!}
</div>
<!-- Fin Checkbox para intereses -->

<!-- Checkbox para DestinoPref -->
<div class="form-group">
    {{ Form::label('Destino Preferido') }}
    <br>
    <label>
        {{ Form::checkbox('DestinoPref[]', 'Playa', in_array('Playa', json_decode($product->DestinoPref, true) ?? [])) }}
        Playa
    </label>
    <label>
        {{ Form::checkbox('DestinoPref[]', 'Desierto', in_array('Desierto', json_decode($product->DestinoPref, true) ?? [])) }}
        Desierto
    </label>
    <label>
        {{ Form::checkbox('DestinoPref[]', 'Ciudad', in_array('Ciudad', json_decode($product->DestinoPref, true) ?? [])) }}
        Ciudad
    </label>
    <label>
        {{ Form::checkbox('DestinoPref[]', 'Montania', in_array('Montaña', json_decode($product->DestinoPref, true) ?? [])) }}
        Montaña
    </label>
    {!! $errors->first('DestinoPref', '<div class="invalid-feedback">:message</div>') !!}
</div>
<!-- Fin Checkbox para DestinoPref -->





        <div class="form-group">
            {{ Form::label('Tipo habitacional') }}
            {{ Form::select('Tipohab', [
                'casa' => 'Casa',
                'departamento' => 'Departamento',
                'apartamento' => 'Apartamento',
                'renta' => 'Renta',
               
                // Agrega más tipos habitacionales aquí
            ], $product->Tipohab, ['class' => 'form-control' . ($errors->has('Tipohab') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un tipo habitacional']) }}
            {!! $errors->first('Tipohab', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Ingreso Mensual') }}
            {{ Form::select('IngresoMens', [
                '2,500 – 5,000' => '2,500 – 5,000',
                '5,001 – 7,000' => '5,001 – 7,000',
                '7,001 – 10,000' => '7,001 – 10,000',
                
            ], $product->IngresoMens, ['class' => 'form-control' . ($errors->has('IngresoMens') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
            {!! $errors->first('IngresoMens', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Viajes al anio') }}
            {{ Form::select('Viajesalanio', [
                '1 – 3' => '1 – 3',
                '4 – 6' => '4 – 6',
                '7 – 10' => '7 – 10',
                
            ], $product->Viajesalanio, ['class' => 'form-control' . ($errors->has('Viajesalanio') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
            {!! $errors->first('Viajesalanio', '<div class="invalid-feedback">:message</div>') !!}
        </div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
    </div>
                
            </div>
        </div>
    </div>
</div>





