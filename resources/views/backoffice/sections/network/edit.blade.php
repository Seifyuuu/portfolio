@extends("backoffice.partials.html");

@section("content")

<div class="w-4/5 flex justify-center">
    <div class="flex justify-center mt-8 h-4/6 w-1/2">
        <form action="{{route("network.update", $network->id)}}" method="POST">
            @csrf
            @method("PUT")
        <div class="ml-12 mt-12 flex justify-center flex-col">
            <label class="text-white" for="">Network</label>
            <input name="name" class="" type="text" value="{{$network->name}}">
            <br>
            <label class="text-white" for="">URL</label>
            <input name="url" type="text" value="{{$network->url}}">
            <br>
            <label class="text-white" for="">Icon</label>
            <select name="icon" id="" aria-placeholder="{{$network->icon}}">
                <option value="facebook">Facebook</option>
                <option value="linkedin">Linkedin</option>
                <option value="twitter">Twitter</option>
                <option value="github">Github</option>
                <option value="youtube">Youtube</option>
                <option value="instagram">Instagram</option>
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