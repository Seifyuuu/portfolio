@extends("backoffice.partials.html");

@section("content")
    
<div class="w-4/5">
<div class="flex justify-center mb-3">
    <h1 class="text-white text-xl font-bold">Skills</h1>
</div>
<div class="flex justify-center mb-3">
    <a href="{{route("skills.create")}}"><button class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">Create
  </button></a></div>
<br>
    <table class="w-full table-auto border-2 border-white">
        <thead  class="border-2">
          <tr class="text-white">
            <th class="border-2">Name</th>
            <th class="border-2">Level</th>
            <th class="border-2">Level</th>

            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($skills as $item)
            <tr>
                <td class="ml-3 border-2 text-white"><span class="text-white ml-3">{{$item->name}}</span></td>
                <td class="ml-3 border-2 text-white"><span class="text-white ml-3">{{$item->level}}</span></td>
                <td class="ml-3 border-2 text-white"><i class=" ml-6 fab fa-{{$item->icon}}"></i></td>
                <td class="border-2"><div class="mt-3 mb-3 flex justify-around">
                    <a href="{{route("skills.edit", $item->id)}}"><button class="bg-yellow-400 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-full">
                        <i class="fas fa-edit"></i>
                  </button></a>
                  
                  <form class="mb" action="{{route("skills.destroy", $item->id)}}" method="POST">
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