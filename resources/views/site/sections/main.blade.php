<!--Main Col-->
<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
	

    <div class="p-4 md:p-12 text-center lg:text-left">
        <!-- Image for mobile view-->
        <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('https://source.unsplash.com/MP0IUfwrn0A')"></div>
        
        <h1 class="text-3xl font-bold pt-8 lg:pt-0">{{$profile->name}}</h1>
        <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
        <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg>{{$profile->job}}</p>

        <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><i class="fas fa-map-pin ml-1 h-4 fill-current text-green-700 pr-4"></i>{{$profile->location}}</p>
        <p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><i class="fas fa-globe h-4 fill-current text-green-700 pr-4"></i>@foreach($language as $langue){{$langue->name}} @endforeach</p>
      

        <p class="pt-8 text-sm">{{$profile->desc}}</p>

        <div class="pt-12 pb-8">
            <button id="card_open" class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
                Check my skills ! 
            </button> 
            
            <button class="card_open bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
                My Projects
            </button> 
            <button class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
                Get In Touch
              </button>
        </div>

        <div class="mt-6 pb-16 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between">
            @foreach ($network as $social)
            <a class="link" href="{{$social->url}}" data-tippy-content="{{$social->name}}"><i class="fab fa-{{$social->icon}}"></i></a>
            @endforeach
        </div>
        
        <!-- Use https://simpleicons.org/ to find the svg for your preferred product --> 

    </div>

</div>