<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <label>Producto</label>
            {{ Form::select('productoId', $productos, $pedido->productoId, ['class' => 'form-control' . ($errors->has('productoId') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('productoId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $pedido->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        <div class="form-group">
            <label>Estatus del pedido</label>
            {{ Form::select('estatusDelPedido', $estados, $pedido->estatusDelPedido, ['class' => 'form-control' . ($errors->has('estatusDelPedido') ? ' is-invalid' : ''), 'placeholder' => 'Estatus del pedido']) }}
            {!! $errors->first('estatusDelPedido', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>