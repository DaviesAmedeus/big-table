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
  
  <header class="text-zinc-200">
    <x-navigation-links />
  </header>
</body>
</html>