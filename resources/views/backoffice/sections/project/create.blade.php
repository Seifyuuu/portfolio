@extends("backoffice.partials.html");

@section("content")

<div class="w-4/5 flex justify-center">
    <div class="flex justify-center mt-8 h-4/6 w-1/2">
        <form action="{{route("project.store")}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="ml-12 mt-12 flex justify-center flex-col">
            <label class="text-white" for="">Name : </label>
            <input name="name" class="" type="text" value="{{old("name")}}">
            <br>
            <label class="text-white" for="">Date : </label>
            <input name="date" type="text" value="{{old("date")}}">
            <br>
            <label class="text-white" for="">Img : </label>
            <input class="text-white" type="file" name="img">
            <br>
            <label class="text-white" for="">Description : </label>
            <input name="desc" type="text" value="{{old("desc")}}">
            <br>
            <div class="flex justify-center">
            <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                Create
            </button>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection