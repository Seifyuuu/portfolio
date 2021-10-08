@extends("backoffice.partials.html");

@section("content")
    
<div class="w-4/5 flex justify-center">

    <div class="max-w-sm rounded overflow-hidden shadow-2xl h-4/5">
        <img class="w-full h-4/6 object-contain" src="{{ asset('img/' . $profile->photo) }}" alt="Sunset in the mountains">
        <div class="px-6 py-4 flex-row justify-center">
          <div class="font-bold text-xl mb-2"><p class="text-center text-white">{{$profile->name}}</p></div>
          <p class="text-center text-white">{{$profile->job}}</p>
          <p class="text-center text-white">{{$profile->location}}</p>
          <p class="text-center text-white">{{$profile->desc}}</p>
        </div>
        <div class="px-6 pt-4 pb-2 flex justify-center">
          <a href="{{route("profile.edit", $profile->id)}}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Edit</span></a>
        </div>
      </div>

    
</div>

@endsection