@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorias</div>
                <a class="btn btn-primary" href={{ route('categories.create') }} role="button">Agregar Categoria</a>
                <div class="card-body">
                    <ul>
                        @foreach($categories as $category)
                          @if($category->node == null)
                            <li>
                                {{ $category->name }}
                                <ul>
                                  @if(count($category->nodes))
                                    @include('subcategory',['nodes' => $category->nodes])
                                  @endif
                                </ul>
                            </li>
                              @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
