<div class="form-group">
    <label for="nit" class="col-lg-3 control-label requerido">Nit</label>
    <div class="col-lg-8">
    <input type="text" name="nit" id="nit" class="form-control" value="{{old('nit', $data->nit ?? '')}}" required/>
    </div>
</div> 
<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div> 
<div class="form-group">
    <label for="rol" class="col-lg-3 control-label requerido">Rol</label>
    <div class="col-lg-8">
    <select name="rol" id="rol" class="form-control" value="{{old('rol', $data->rol ?? '')}}" required>
        <option>{{old('rol', $data->rol ?? 'Demandada')}}</option>
        <option>
        @if (isset($data->rol))
            @if ($data->rol == 'Demandada')
                Demandante
            @else
                Demandada
        @endif
        </option>       
        @else
        <option>Demandada</option>
        <option>Demandante</option>
        @endif       
    </select>
    </div>
</div> 
<div class="form-group">
    <label for="director" class="col-lg-3 control-label ">Director</label>
    <div class="col-lg-8">
    <input type="text" name="director" id="director" class="form-control" value="{{old('director', $data->director ?? '')}}"/>
    </div>
</div> 
<div class="form-group">
    <label for="direccion" class="col-lg-3 control-label ">Dirección</label>
    <div class="col-lg-8">
    <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion', $data->direccion ?? '')}}" />
    </div>
</div> 
<div class="form-group">
    <label for="telefono" class="col-lg-3 control-label ">Telefono</label>
    <div class="col-lg-8">
    <input type="text" name="telefono" id="telefono" class="form-control" value="{{old('telefono', $data->telefono ?? '')}}" />
    </div>
</div> 
<div class="form-group">
    <label for="correo" class="col-lg-3 control-label ">Correo</label>
    <div class="col-lg-8">
    <input type="text" name="correo" id="correo" class="form-control" value="{{old('correo', $data->correo ?? '')}}" />
    </div>
</div> 
