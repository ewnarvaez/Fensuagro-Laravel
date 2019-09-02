<div class="form-group">
        <label for="nombre" class="col-md-2 control-label requerido">Nombre</label>
        <div class="col-md-9">
        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="" value="{{old('nombre' , $data->nombre ?? '')}}" required>
        </div>
    </div>
    <div class="form-group">
        <label for="url" class="col-md-2 control-label requerido">Slug</label>
        <div class="col-md-9">
          <input type="text" name="slug" id="slug" class="form-control" placeholder="" value="{{old('slug', $data->slug ?? '')}}" required>
        </div>
    </div>
  