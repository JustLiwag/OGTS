<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @vite('resources/css/app.css')
        
    </head>
    <body class=" bg-cover w-screen h-screen flex items-center justify-center" style="background-image: url('storage/assets/bg.png'), linear-gradient(90deg, #2D349A 44.04%, #FFF 65.77%)">
        <div class="h-4/5 w-4/6 bg-white flex rounded-lg">
            <div class="w-3/5 h-full bg-white rounded-lg">
                <div class="flex items-center ml-20 my-6 mt-16"> 
                    <img class=" w-24 h-24 md:w-16 md:h-16" src="storage/assets/plm_logo.png"/>
                    <img class="w-72 h-14 md:w-60 md:h-10 ml-2" src="storage/assets/plm_name.png"/>
                </div>
                <div class="flex flex-col ml-20">
                    <h1 class="font-bold font-['Inter'] text-cyan-700 text-3xl"> GUIDANCE PORTAL</h1>
                    <h3 class="text-cyan-700 text-xl font-medium font-['Inter'] leading-9">Sign in</h3>
                </div>
                <form action="#" class="flex flex-col ml-20 mt-2 w-3/5">
                    <label for="username" class=" h-7 text-zinc-900 text-md font-normal font-['Inter']" >Username:</label>
                    <input type="text" id="username" class="w-full h-9 px-2 py-2 bg-white rounded-md border border-slate-500 text-zinc-950 text-sm font-normal font-['Inter'] mb-4" placeholder="Enter your username">
                    <label for="password" class="w-3/4 h-7 text-zinc-900 text-md font-normal font-['Inter']" >Password:</label>
                    <input type="password" id="password" class="w-full h-9 px-2 bg-white rounded-md border border-slate-500 text-zinc-950 text-sm font-normal font-['Inter'] mb-4" placeholder="Enter your username">   
                    <div class="flex items-center">
                        <input type="checkbox" class="w-4 h-4">
                        <span class=" text-zinc-900 font-light font-['Inter'] text-sm ml-2">Keep me signed in</span>
                    </div>
                    <button type="submit" class="w-full h-8 bg-blue-600 hover:bg-blue-700 focus:bg-blue-700 rounded shadow text-white text-md font-['Inter'] active:bg-blue-800 active:shadow-md mt-2">Login</button>
                </form> 
                <div class="justify-center items-center flex w-3/5 ml-20">
                    <div class="w-1/5 opacity-25 border border-slate-600"></div>
                    <div class="p-2.5 bg-white text-center text-zinc-400 text-sm font-normal font-['Inter'] w-2/5">or sign in with</div>
                    <div class="w-1/5 opacity-25 border border-slate-600"></div>                  
                </div>      
                <button type="submit" class="w-3/5 h-8 rounded shadow bg-zinc-200 active:shadow-md hover:bg-zinc-300 items-center justify-center flex ml-20">
                        <img class="w-4 h-4" src="storage/assets/microsoft.png" >
                        <div class=" text-center text-slate-600 text-sm  font-normal font-['Inter'] ml-3" >Continue with Microsoft</div>
                </button>
            </div>
            <div class="w-3/5 h-full" style="background-image: url('storage/assets/plm.png'); background-size: cover;">
            </div>
        </div>
    </body>


</html>
    