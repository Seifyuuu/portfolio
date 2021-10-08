@extends("backoffice.partials.html");

@section("content")

<div class="w-4/5 flex justify-center">
    <div class="flex justify-center mt-8 h-4/6 w-1/2">
        <form action="{{route("skills.store")}}" method="POST">
            @csrf
        <div class="ml-12 mt-12 flex justify-center flex-col">
            <label class="text-white" for="">Name</label>
            <input name="name" class="" type="text" value="{{old("name")}}">
            <br>
            <label class="text-white" for="">Level</label>
            <input name="url" type="text" value="{{old("level")}}">
            <br>
            <label class="text-white" for="">Icon</label>
            <select name="icon" id="">
                <option value="react">React</option>
                <option value="angular">Angular</option>
                <option value="java">Java</option>
                <option value="js">Javascript</option>
                <option value="laravel">Laravel</option>
                <option value="python">Python</option>
                <option value="android">Android</option>

            </select>
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