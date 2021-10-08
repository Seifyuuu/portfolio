@extends("backoffice.partials.html");

@section("content")
    
<div class="w-4/5">
<div class="flex justify-center mb-3">
    <h1 class="text-white text-xl font-bold">Projects</h1>
</div>
<div class="flex justify-center mb-3">
    <a href="{{route("project.create")}}"><button class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">Add + 
  </button></a></div>
<br>
    <table class="w-full table-auto border-2 border-white">
        <thead  class="border-2">
          <tr class="text-white">
            <th class="border-2 w-1/8">Name</th>
            <th class="border-2 w-1/8">Date</th>
            <th class="border-2">Image</th>
            <th class="border-2 w-3/5">Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($project as $item)
            <tr>
                <td class="ml-3 border-2 text-white"><span class="text-white ml-3 w-3">{{$item->name}}</span></td>
                <td class="ml-3 border-2 text-white"><span class="text-white ml-3">{{$item->date}}</span></td>
                <td class="ml-3 border-2 text-white"><div class="flex justify-center"><img class="w-16" src="{{ asset("img/" . $item->img) }}" alt=""></div></td>
                <td class="ml-3 border-2 text-white"><span class="text-white ml-3">{{$item->desc}}</span></td>
                <td class="border-2"><div class="mt-3 mb-3 flex justify-around">
                    <a href="{{route("project.edit", $item->id)}}"><button class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full">
                        <i class="fas fa-edit"></i>
                  </button>></a>
                  <form class="mb" action="{{route("project.destroy", $item->id)}}" method="POST">
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