@extends("backoffice.partials.html");

@section("content")
    
<div class="w-4/5 flex justify-center">

    <form enctype="multipart/form-data" action="{{route("background.update", $profile->id)}}" method="POST">
        @csrf
        @method("PUT")
        <br><br><br>
        <div class="w-max flex flex-col items-center">
       
        <label class="text-white" for="">Photo :</label>
        <br>
        <input class="text-white" type="file" name="img" value="{{$background->img}}">
        <br><br>
        </div>
        <br>
        <div style="display: flex; justify-content:center;">
            <br><br>
        <button class=" text-white font-bold py-2 px-4 rounded-full hover:bg-white hover:text-black rounded" type="submit">Update</button>

        </div>
    </form>

</div>

@endsection