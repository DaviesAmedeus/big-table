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
  @bukStyles(true)
</head>
<body>
  
  <header class="text-zinc-200 ">
    <x-navigation-links />
  </header>

  {{-- HERO SECTION --}}
  <div style="background-image: url({{ asset('assets/img/book2.jpg') }})" class="relative w-full h-[calc(100vh-500px)]  bg-cover bg-fixed bg-center">
    <div class="Relative w-full h-[calc(100vh-500px)]  bg-gradient-to-r from-black to-black/50 text-200-zinc">
      <div class="absolute w-full flex flex-col inset-x-0 bottom-0 text-center text-zinc-50 justify-center font-bold md:justify-end md:pl-12 md:text-start pb-40">
        <h2 class="text-3xl md:text-5xl">Here is where our creativity</h2>
        <h3 class="text-[15px] md:text-[29px] font-normal">about literary works and content creation stand.</h3>
    </div>
    </div>
  </div>

  </div>

  <!-- STORIES SECTION -->
  <div>
    <x-content-section content="Stories" subcontent="All stories>>"/>
    <x-card.container>
        <!-- book 1 -->
        <x-card.card-frame>
          <x-card.photo src="{{ asset('assets/img/books/book4.jpeg') }}" alt=""  />
          <div class="w-full flex flex-col justify-between">
            <div>
             <x-card.title-and-author title="City of Orange" author="David Yoon"></x-card.title-and-author>
            <div class="flex py-5 items-center">
              <x-card.chapters>15 parts</x-card.chapters>
              <x-card.status :complete="true"/>
            </div>
           <x-card.description> 
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
          </x-card.description>
            </div>
            <div class="text-end"> <x-card.underlined-text><a href="">Read Now</a></x-card.underlined-text></div>
          </div>
        </x-card.card-frame>
  
        <!-- book 2 -->
        <x-card.card-frame>
          <x-card.photo src="{{ asset('assets/img/books/book3.jpeg') }}" alt=""  />
          <div class="w-full flex flex-col justify-between">
            <div>
             <x-card.title-and-author title="The vanishinh half" author="Britt Bennet"></x-card.title-and-author>
            <div class="flex py-5 items-center">
              <x-card.chapters>15 parts</x-card.chapters>
              <x-card.status :complete="true"/>
            </div>
           <x-card.description> 
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
          </x-card.description>
            </div>
            <div class="text-end"> <x-card.underlined-text><a href="">Read Now</a></x-card.underlined-text></div>
          </div>
        </x-card.card-frame>
    </x-card.container>
  </div>



  
   <!-- POEMS SECTION -->
   <div>
    <x-content-section content="Poems" subcontent="All poems>>"/>
    <x-card.container>
      <!-- book 1 -->
      <x-card.card-frame>
        <img src="{{ asset('assets/img/books/book1.jpeg') }}" alt="" class="h-[300px] w-[200px] md:h-[400px] md:w-[250px] mx-auto md:mx-0 rounded-sm">
        <div class="w-full flex flex-col justify-between">
          <div>
            <x-card.title-and-author title="Lucky Me" author="Cecil Rhodes"></x-card.title-and-author>
          <x-card.underlined-text class="py-5"><a href="#">ABOUT THE POEM</a></x-card.underlined-text>
          <x-card.description> 
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
          </x-card.description>
          </div>
          <div class="text-end"> <x-card.underlined-text><a href="">Read Now</a></x-card.underlined-text></div>
        </div>
      </x-card.card-frame>

      <!-- book 2 -->
      <x-card.card-frame>
        <img src="{{ asset('assets/img/books/book1.jpeg') }}" alt="" class="h-[300px] w-[200px] md:h-[400px] md:w-[250px] mx-auto md:mx-0 rounded-sm">
        <div class="w-full flex flex-col justify-between">
          <div>
            <x-card.title-and-author title="Lucky Me" author="Cecil Rhodes"></x-card.title-and-author>
          <x-card.underlined-text class="py-5"><a href="#">ABOUT THE POEM</a></x-card.underlined-text>
          <x-card.description> 
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
            This is a simple card component using Tailwind CSS. You can use it to display information, images, and more.
          </x-card.description>
          </div>
          <div class="text-end"> <x-card.underlined-text><a href="">Read Now</a></x-card.underlined-text></div>
        </div>
      </x-card.card-frame>
  
  
   
    </x-card.container>
  </div>
 
 

     <!-- LIBRARY SECTION -->
     <div class="pt-20">
    
      <x-content-section content="More From Our Library" subcontent=""/>
      <div class="px-10 grid md:grid-cols-2 xl:grid-cols-3  gap-4 justify-items-center">


        <x-library.videos />
        <x-library.audios />
        <x-library.articles />
        
        
    
    
     
      </div>
    </div>
 


    

    
<br> <br><br> <br><br> <br>

<!-- FOOTER -->
<footer class="w-full">
  <x-footer.footer />
</footer>

@bukScripts(true)
</body>
</html>