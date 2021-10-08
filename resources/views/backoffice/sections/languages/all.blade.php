@extends("backoffice.partials.html");

@section("content")
    
<div class="w-4/5">
<div class="flex justify-center mb-3">
    <h1 class="text-white text-xl font-bold">Languages</h1>
</div>
<div class="flex justify-center mb-3">
    <a href="{{route("language.create")}}"><button class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full">Add + 
  </button></a></div>
<br>
    <table class="w-full table-auto border-2 border-white">
        <thead  class="border-2">
          <tr class="text-white">
            <th class="border-2">Language</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($language as $item)
            <tr>
                <td class="ml-3 border-2 text-white">
                    <div class="flex justify-between">
                    <span class="text-white mt-4 ml-3">{{$item->name}}</span>
                    <form class="mt-4" action="{{route("language.destroy", $item->id)}}" method="POST">
                    @method("delete")
                    @csrf
                        <button type="submit" class="mr-3 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                             <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    </div>
                </td>
              </tr>
            @endforeach
        </tbody>
      </table>
    
</div>

@endsection