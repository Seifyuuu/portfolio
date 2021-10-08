@extends("backoffice.partials.html");

@section("content")

<div class="w-4/5 flex justify-center">
    <div class="flex justify-center mb-3">
        <h3 class="text-white text-xl font-bold">Edit {{$skill->name}}</h3>
    </div>    <div class="flex justify-center mt-8 h-4/6 w-1/2">
        <form action="{{route("skills.update", $skill->id)}}" method="POST">
            @csrf
            @method("PUT")
        <div class="ml-12 mt-12 flex justify-center flex-col">
            <label class="text-white" for="">Name</label>
            <input name="name" class="" type="text" value="{{$skill->name}}">
            <br>
            <label for="" class="text-white">Rating</label>
            <select name="level" id="">
                <option value="5">5</option>
                <option value="4">4</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
            </select>
            <br>
            <label class="text-white" for="">Icon</label>
            <select name="icon" id="">
                <option value="angular">Angular</option>
                <option value="react">React</option>
                <option value="laravel">Laravel</option>
                <option value="js">Javascript</option>
                <option value="java">Java</option>
                <option value="android">Android</option>
                <option value="python">Python</option>

            </select>
            <br>
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