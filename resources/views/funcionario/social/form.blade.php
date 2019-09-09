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
    <label for="responsable" class="col-lg-3 control-label ">Responsable</label>
    <div class="col-lg-8">
    <input type="text" name="responsable" id="responsable" class="form-control" value="{{old('director', $data->responsable ?? '')}}"/>
    </div>
</div> 
<div class="form-group">
    <label for="sector" class="col-lg-3 control-label">Sector</label>
    <div class="col-lg-8">
        <select name="sector" id="sector" class="form-control" >  
            @if (isset($data->sector))
                <option>{{old('sector', $data->sector)}}</option>
                @foreach ($sectores as $key => $item)
                    @if ($item["nombre"] != $data->sector)
                        <option>{{$item["nombre"]}}</option> 
                    @endif                
                @endforeach                      
            @else
                @foreach ($sectores as $key => $item)                
                        <option>{{$item["nombre"]}}</option>                 
                @endforeach
            @endif    
            
        </select>
    </div>
</div> 

