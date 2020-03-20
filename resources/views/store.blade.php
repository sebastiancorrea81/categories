@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorias</div>
                <div class="card-body">
                  <form method="POST" action="{{ route('categories.store') }}" accept-charset="UTF-8" enctype="multipart/form-data" file="true">
                    @csrf
                        <div class="form-group">
                            <label for="inputName">Nombre: </label>
                            <input type="text" class="form-control" id="inputName", name="inputName">
                        </div>
                            <div class="form-group">
                                <label for="inputDescription">Descripcion: </label>
                                <input type="text" class="form-control" id="inputDescription", name="inputDescription">
                            </div>
                            <div class="form-group">
                                <label for="inputNode">Nodo: </label>
                                <select id="inputNode" class="form-control" name="inputNode">
                                  <option value="" selected>Seleccione una Categoria</option>
                                  @foreach ($categories as $value)
                                    <option value={{$value->id}}>{{ $value->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
