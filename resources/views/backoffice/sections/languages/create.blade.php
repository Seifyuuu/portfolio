@extends("backoffice.partials.html");

@section("content")

<div class="w-4/5 flex justify-center">
    <div class="flex justify-center mt-8 h-4/6 w-1/2">
        <form action="{{route("language.store")}}" method="POST">
            @csrf
        <div class="ml-12 mt-12 flex justify-center flex-col">
            <label class="text-white" for="">Language</label>
            <input name="name" class="" type="text" value="{{old("name")}}">
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