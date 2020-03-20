<ul>
  @foreach ($nodes as $value)
    <li>
      {{ $value->name}}
      @if($value->nodes)
        @include('subcategory', ['nodes' => $value->nodes])
      @endif
    </li>
  @endforeach
</ul>
