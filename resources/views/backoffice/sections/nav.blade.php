 <!--Nav-->
 <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

    <div class="flex flex-wrap items-center">
        <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
            <a href="/back">
                <span class="text-xl pl-2"><i class="em em-grinning"></i></span>
            </a>
        </div>

        <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
           
        </div>

        <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end w-50">
            <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">   
                <li class="flex-1 md:flex-none md:mr-6 md:mt-2">
                    <div class="relative inline-block">
                        <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, {{$profile->name}} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                        <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible w-100">
                            <a href="/" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-home fa-fw"></i> Home</a>
                            <div class="border border-gray-800"></div>
                            <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</nav>

<div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

    <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
        <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
            <li class="mr-3 flex-1">
                <a href="/back/profile" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                    <i class="fas fa-user pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Profile</span>
                </a>
            </li>
            
            <li class="mr-3 flex-1">
                <a href="/back/language" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                    <i class="fas fa-globe pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Languages</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="/back/network" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                    <i class="fas fa-comment pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Networks</span>
                </a>
            </li><li class="mr-3 flex-1">
                <a href="/back/skills" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                    <i class="fas fa-cut pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Skills</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="/back/project" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                    <i class="fas fa-book pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Projects</span>
                </a>
            </li>
            <li class="mr-3 flex-1">
                <a href="/back/background" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                    <i class="fas fa-image pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Background</span>
                </a>
            </li>



        </ul>
    </div>


</div>