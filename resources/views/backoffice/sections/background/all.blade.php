@extends("backoffice.partials.html");

@section("content")
    
<div class="w-4/5 flex justify-center">

    <div class="max-w-sm rounded overflow-hidden shadow-2xl h-3/5">
        @foreach ($background as $item)
        <img class="w-full h-5/6 object-contain" src="{{ asset('img/' . $item->img) }}" alt="Sunset in the mountains">
        <h1 class=" text-center font-bold text-white">Background of the site</h1>
        <div class="px-6 pt-4 pb-2 flex justify-center">
          <a href="{{route("background.edit", $item->id)}}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Edit</span></a>
        </div>
        @endforeach
      </div>

    
</div>

@endsection