<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="./assets/fontawesome/js/solid.min.js"></script>
  <script defer src="./assets/fontawesome/js/fontawesome.min.js"></script>
  
  <script>

      window.onload = () => {
    //Responsible for closing and opening the hambarger menu button
    const hamburgerMenuButton = document.getElementById("hamburger-menu-button");
    hamburgerMenuButton.addEventListener("click", () => {
          if (hamburgerMenuButton.classList.contains("open")) {
            hamburgerMenuButton.classList.remove("open");
          } else {
            hamburgerMenuButton.classList.add("open");
          }
        });


      
      
      }
  </script>
  @vite('resources/css/app.css')
</head>
<body>
  
  <header class="text-zinc-200 ">
    <x-navigation-links />
  </header>

  {{-- HERO SECTION --}}
  <div style="background-image: url({{ asset('assets/img/book2.jpg') }})" class="relative w-full h-[calc(100vh-300px)] min-h-[400px] bg-cover bg-fixed bg-center">
    <div class="w-full h-[calc(100vh-300px)] min-h-[400px] bg-gradient-to-r from-black to-black/50 text-200-zinc">
      <div class="w-full flex flex-col h-[calc(100vh-300px)] text-center text-zinc-50 justify-center font-bold md:justify-end md:pl-12 md:text-start md:pb-40">
        <h2 class="text-3xl md:text-5xl">Here is where our creativity</h2>
        <h3 class="text-[15px] md:text-[29px] font-normal">about literary works and content creation stand.</h3>
    </div>
    </div>
  </div>

  {{-- LATEST STORY SECTION --}}
  <div class="py-20 px-10">
    <h2 class="font-bold text-center pb-10">Stories</h2>

    <div class="grid md:grid-cols-2 justify-items-center gap-4">

      <!-- Card 1 -->
      <div class="flex  p-5 rounded shadow-lg bg-gray-200">

          <img class="w-1/2 h-[500px]" src="https://via.placeholder.com/400x200" alt="Card image">
        <div class="px-6 py-4 ">
            <div class="font-bold text-xl mb-2">Card Title</div>
            <p class="text-gray-700 text-base">
                This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
            </p>
        </div>
       
    </div>


    <div class=" rounded shadow-lg bg-gray-200 md:flex p-5">
      <img class="w-full md:w-1/2 h-[500px]" src="https://via.placeholder.com/400x200" alt="Card image">

      <div class="px-6 py-4">
          <div class="font-bold text-xl mb-2">Card 222</div>
          <p class="text-gray-700 text-base">
              This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
          </p>
      </div>
    
  </div>


     <!-- Card 1 -->
     <div class="flex  p-5 rounded shadow-lg bg-gray-200">

      <img class="w-1/2 h-[500px]" src="https://via.placeholder.com/400x200" alt="Card image">
    <div class="px-6 py-4 ">
        <div class="font-bold text-xl mb-2">Card Title</div>
        <p class="text-gray-700 text-base">
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
        </p>
    </div>
   
</div>


 <!-- Card 1 -->
 <div class="flex  p-5 rounded shadow-lg bg-gray-200">

  <img class="w-1/2 h-[500px]" src="https://via.placeholder.com/400x200" alt="Card image">
<div class="px-6 py-4 ">
    <div class="font-bold text-xl mb-2">Card Title</div>
    <p class="text-gray-700 text-base">
        This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
    </p>
</div>

</div>




 


</div>
  </div>
 


    

    
 

 
</body>
</html>