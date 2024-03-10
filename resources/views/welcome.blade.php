<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <script src="https://cdn.tailwindcss.com"></script>



    </head>
    <body class="antialiased">


            
         <!-- component -->
     <div class="w-full">
    <nav class="bg-white shadow-lg">
        <div class="md:flex items-center justify-between py-2 px-8 md:px-12">
            <div class="flex justify-between items-center">
               <div class="text-2xl font-bold text-gray-800 md:text-3xl">
                    <a href="#">EvenTo</a>
               </div>
                <div class="md:hidden">
                    <button type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row hidden md:block -mx-2">
                <a href="welcome.bled.php" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">About</a>
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Log in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Register</a>
                @endif
                @endauth
                @endif

            </div>
        </div>
    </nav>
    <div class="flex bg-white" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Build Your New <span class="text-indigo-600">Idea</span></h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="#">Get Started</a>
                    <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <div class="h-full object-cover" style="background-image: url(https://th.bing.com/th/id/OIP.eaNByx1Qdaf8pkqSLC7HugHaEo?w=1200&h=750&rs=1&pid=ImgDetMain)">
                <div class="h-full bg-black opacity-25"></div>
            </div>
        </div>
    </div>
</div>



<!-- component -->

<div class="flex  min-h-screen bg-white">
    <div class="col-span-12">
      <div class="overflow-auto lg:overflow-visible">
        <div class="flex lg:justify-between border-b-2 border-fuchsia-900 pb-1">
          <h2 class="text-2xl text-gray-500 font-bold">Les evenement</h2>
          <div class="text-center flex-auto">
            <input
              type="text"
              name="name"
              placeholder="Search..."
              class=" w-1/3 py-2 border-b-2 border-blue-600 outline-none focus:border-yellow-400 "/>
          </div>
    
    
        </div>
        <table class="table text-gray-400 border-separate space-y-6 text-sm">
          <thead class="bg-blue-500 text-white">
            <tr>
    
    
    
    <!-- component -->
    <!-- le cadre de l'evenement -->
    <div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">
      <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="https://ik.imagekit.io/q5edmtudmz/FB_IMG_15658659197157667_wOd8n5yFyXI.jpg" alt="bag">
      <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">
         <div class="flex items-center">
            <h2 class="text-xl text-gray-800 font-medium mr-auto">Your Travel Buddy</h2>
            <p class="text-gray-800 font-semibold tracking-tighter">
               only
               <i class="text-gray-600 line-through">60$</i>
               48$
            </p>
         </div>
         <p class="text-sm text-gray-700 mt-4">
            Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam tempore commodi ipsa suscipit laboriosam, sit earum at sequ adipisicing elit. Amet veritatis ipsam reiciendis numquam tempore commodi ipsa suscipit laboriosam, sit earum at sequi.
         </p>
         <div class="flex items-center justify-end mt-4 top-auto">
            <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">Delete</button>
            <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Edit</button>
            <button class=" bg-blue-600 text-gray-200 px-2 py-2 rounded-md ">Publish</button>
         </div>
      </div>
    </div>


 <!-- component -->
<main class="py-12 md:px-20 sm:px-14 px-6">
    <div class="sm:flex items-center shadow-md">
      <div class="md:px-10 sm:px-5">
        <h1 class="text-gray-800 font-bold text-2xl my-2">long established</h1>
        <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
        <div class="flex justify-between mb-2">
          <span class="font-thin text-sm">May 20th 2020</span>
          <span class="sm:block hidden mb-2 text-gray-800 font-bold">Read more</span>
        </div>
      </div>
      <div>
        <img class="bg-cover" src="https://images.unsplash.com/photo-1527689368864-3a821dbccc34?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
      </div>
    </div>
    <div class="mt-6 md:flex space-x-6">
      <div>
        <img src="https://images.unsplash.com/photo-1497493292307-31c376b6e479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="">
        <div>
          <h1  class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
          <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
          <div class="flex justify-between mt-4">
            <span class="font-thin text-sm">May 20th 2020</span>
            <span class="mb-2 text-gray-800 font-bold">Réserver</span>
          </div>
        </div>
      </div>
      <div>
        <img src="https://images.unsplash.com/photo-1497493292307-31c376b6e479?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="">
        <div>
          <h1  class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
          <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
          <div class="flex justify-between mt-4">
            <span class="font-thin text-sm">May 20th 2020</span>
            <span class="mb-2 text-gray-800 font-bold">Réserver</span>
          </div>
        </div>
      </div>
      <div>

      </div>
    </div>
    <div></div>
  </main>




        <section class="py-10 bg-gray-900 sm:pt-16 lg:pt-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid grid-cols-2 gap-x-5 gap-y-12 md:grid-cols-4 md:gap-x-12">
                    <div>
                        <p class="text-base text-gray-500">Company</p>
        
                        <ul class="mt-8 space-y-4">
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> About </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Features </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Works </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Career </a>
                            </li>
                        </ul>
                    </div>
        
                    <div>
                        <p class="text-base text-gray-500">Help</p>
        
                        <ul class="mt-8 space-y-4">
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Customer Support </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Delivery Details </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Terms & Conditions </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Privacy Policy </a>
                            </li>
                        </ul>
                    </div>
        
                    <div>
                        <p class="text-base text-gray-500">Resources</p>
        
                        <ul class="mt-8 space-y-4">
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Free eBooks </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Development Tutorial </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> How to - Blog </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> YouTube Playlist </a>
                            </li>
                        </ul>
                    </div>
        
                    <div>
                        <p class="text-base text-gray-500">Extra Links</p>
        
                        <ul class="mt-8 space-y-4">
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Customer Support </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Delivery Details </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Terms & Conditions </a>
                            </li>
                            <li>
                                <a href="#" title="" class="text-base text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Privacy Policy </a>
                            </li>
                        </ul>
                    </div>
                </div>
        
                <hr class="mt-16 mb-10 border-gray-800" />
        
                <div class="flex flex-wrap items-center justify-between">
                    <img class="h-8 auto md:order-1" src="https://cdn.rareblocks.xyz/collection/celebration/images/logo-alt.svg" alt="" />
        
                    <ul class="flex items-center space-x-3 md:order-3">
                        <li>
                            <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-transparent border border-gray-700 rounded-full w-7 h-7 focus:bg-blue-600 hover:bg-blue-600 hover:border-blue-600 focus:border-blue-600">
                                <svg class="w-4 h-4"  viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"
                                    ></path>
                                </svg>
                            </a>
                        </li>
        
                        <li>
                            <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-transparent border border-gray-700 rounded-full w-7 h-7 focus:bg-blue-600 hover:bg-blue-600 hover:border-blue-600 focus:border-blue-600">
                                <svg class="w-4 h-4"  viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
                                </svg>
                            </a>
                        </li>
        
                        <li>
                            <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-transparent border border-gray-700 rounded-full w-7 h-7 focus:bg-blue-600 hover:bg-blue-600 hover:border-blue-600 focus:border-blue-600">
                                <svg class="w-4 h-4"  viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"
                                    ></path>
                                </svg>
                            </a>
                        </li>
        
                        <li>
                            <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-transparent border border-gray-700 rounded-full w-7 h-7 focus:bg-blue-600 hover:bg-blue-600 hover:border-blue-600 focus:border-blue-600">
                                <svg class="w-4 h-4"  viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"
                                    ></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
        
                    <p class="w-full mt-8 text-sm text-center text-gray-100 md:mt-0 md:w-auto md:order-2">© Copyright 2021, All Rights Reserved by Postcraft</p>
                </div>
            </div>
        </section>

   
    </body>
</html>
