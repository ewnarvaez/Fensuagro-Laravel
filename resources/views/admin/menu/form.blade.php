<div class="form-group">
    <label for="nombre" class="col-md-2 control-label requerido">Nombre</label>
    <div class="col-md-9">
    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="" value="{{old('nombre' , $data->nombre ?? '')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="url" class="col-md-2 control-label requerido">Url</label>
    <div class="col-md-9">
      <input type="text" name="url" id="url" class="form-control" placeholder="" value="{{old('url', $data->url ?? '')}}" required>
    </div>
</div>
<div class="form-group">
    <label for="icono" class="col-md-2 control-label">Icono</label>
    <div class="col-md-9">
      <input type="text" name="icono" id="icono" class="form-control" placeholder="" value="{{old('icono', $data->icono ?? '')}}">
    </div>
    <div class="col-md-1">
        <span id="mostrar-icono" class="fa fa-fw {{old('icono', $data->icono ?? '')}}"></span>
    </div>
</div>