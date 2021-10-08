@extends("backoffice.partials.html");

@section("content")

<div class="w-4/5 flex justify-center">
    <div class="flex justify-center mb-3">
        <h3 class="text-white text-xl font-bold">Edit {{$project->name}}</h3>
    </div>    <div class="flex justify-center mt-8 h-4/6 w-1/2">
        <form enctype="multipart/form-data" action="{{route("project.update", $project->id)}}" method="POST">
            @csrf
            @method("PUT")
        <div class="ml-12 mt-12 flex justify-center flex-col">
            <label class="text-white" for="">Name</label>
            <input name="name" class="" type="text" value="{{$project->name}}">
            <br>
            <label class="text-white" for="">Date</label>
            <input name="date" class="" type="text" value="{{$project->date}}">
            <br>
            <label class="text-white" for="">Description</label>
            <input name="desc" class="" type="text" value="{{$project->desc}}">
            <br>
            <label for="" class="text-white">Image</label>
            <input type="file" name="img" id="">
            <div class="flex justify-center">
            <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                Update
            </button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection