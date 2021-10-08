@extends("backoffice.partials.html");

@section("content")
    
<div class="w-4/5">
<div class="flex justify-center mb-3">
    <h1 class="text-white text-xl font-bold">Networks</h1>
</div>
<div class="flex justify-center mb-3">
    <a href="{{route("network.create")}}"><button class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">Create
  </button></a></div>
<br>
    <table class="w-full table-auto border-2 border-white">
        <thead  class="border-2">
          <tr class="text-white">
            <th class="border-2">Network</th>
            <th class="border-2">URL</th>
            <th class="border-2">Icon</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($network as $item)
            <tr>
                <td class="ml-3 border-2 text-white"><span class="text-white ml-3">{{$item->name}}</span></td>
                <td class="ml-3 border-2 text-white"><span class="text-white ml-3">{{$item->url}}</span></td>
                <td class="border-2 text-white"><span class="text-white"><i class="ml-4 fab fa-{{$item->icon}}"></i></span></td>
                <td class="border-2"><div class="mt-3 mb-3 flex justify-around">
                    <a href="{{route("network.edit", $item->id)}}"><button class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full">
                        <i class="fas fa-edit"></i>
                  </button>></a>
                  <form class="mb" action="{{route("network.destroy", $item->id)}}" method="POST">
                    @method("delete")
                    @csrf
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                    <i class="fas fa-trash"></i>
                  </button></form>
                 </div></td>
              </tr>
            @endforeach
        </tbody>
      </table>
    
</div>

@endsection