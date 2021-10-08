<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">  
</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image:url({{asset("img/$background->img")}});">
    <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
        @yield("content")
    </div>
        <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@4"></script>
        <script>
            //Init tooltips
            tippy('.link',{
              placement: 'bottom'
            })
    
            //Toggle mode
            const toggle = document.querySelector('.js-change-theme');
            const body = document.querySelector('body');
            const profile = document.getElementById('profile');
            
            
            toggle.addEventListener('click', () => {
    
              if (body.classList.contains('text-gray-900')) {
                toggle.innerHTML = "☀️";
                body.classList.remove('text-gray-900');
                body.classList.add('text-gray-100');
                profile.classList.remove('bg-white');
                profile.classList.add('bg-gray-900');
              } else
              {
                toggle.innerHTML = "🌙";
                body.classList.remove('text-gray-100');
                body.classList.add('text-gray-900');
                profile.classList.remove('bg-gray-900');			
                profile.classList.add('bg-white');
                
              }
            });
            
        </script>
        
    </body>
</html>