@extends('layouts.default.base')

@section('main')
<main>
  @if ($items->data)
  <ul class="flex flex-wrap gap-8">
    @foreach ($items->data as $item)
    <li class="basis-1/4">
      <a href="#" class="block bg-white rounded-lg shadow-lg">
        <div class="overflow-hidden h-48">
          @if (is_array($item->images) and count($item->images))
          <picture>
            <img src="{{ $item->images[0] }}" alt="{{ $item->name }}" loading="lazy" decoding="async" class="w-full h-full object-cover object-center transition-transform hover:scale-110">
          </picture>
          @else
          <div class="flex items-center justify-center h-full bg-slate-400 font-bold">no image</div>
          @endif
        </div>
        <div class="p-4">
          <h2 class="font-bold mb-3 hover:text-viva">{{ $item->name }}</h2>
          <p class="text-sm leading-relaxed">{{ $item->description }}</p>
        </div>
      </a>
    </li>
    @endforeach
  </ul>
  @else
  <p class="text-center font-bold">No Items.</p>
  @endif
</main>
@endsection