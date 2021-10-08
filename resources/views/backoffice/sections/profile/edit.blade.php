@extends("backoffice.partials.html");

@section("content")
    
<div class="w-4/5 flex justify-center">

    <form enctype="multipart/form-data" action="{{route("profile.update", $profile->id)}}" method="POST">
        @csrf
        @method("PUT")
        <br><br><br>
        <div class="w-max flex flex-col items-center">
       
        <label class="text-white" for="">Name :</label>
        <input class="text-center" type="text" name="name" value="{{$profile->name}}">
        <br><br>
        <label class="text-white" for="">Job :</label>
        <input class="text-center" type="text" name="job" value="{{$profile->job}}">
        <br><br>
        <label class="text-white" for="">Description :</label>
        <textarea class="text-center w-full" type="text" name="desc">{{$profile->desc}}</textarea>
        <br><br>
        <label class="text-white" for="">Location :</label>
        <input class="text-center" type="text" name="location" value="{{$profile->location}}">
        <br><br>
        <label class="text-white" for="">Photo :</label>
        <input class="text-white" type="file" name="photo" value="{{$profile->photo}}">
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