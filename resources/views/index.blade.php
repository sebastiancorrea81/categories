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
                        @foreach($nodes as $node)
                            <li>
                                {{ $node->name }}
                                <ul>
                                    @foreach($categories as $category)
                                            @if($category->node == $node->name)
                                            <li>
                                                {{ $category->name }}
                                            </li>
                                            @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
