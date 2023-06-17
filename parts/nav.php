<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
    <!-- Logo and site title -->
    <a href="/" class="flex items-center">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Vipin Tools Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Vipin Tools</span>
    </a>

    <!-- Mobile search and menu buttons -->
    <div class="flex md:order-2">
      <!-- Mobile search toggle button -->
      <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" >
        <!-- Search icon SVG -->
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
        </svg>
        <span class="sr-only">Search</span>
      </button>
      <!-- Mobile menu toggle button -->
      <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
        <!-- Menu icon SVG -->
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
        <span class="sr-only">Open main menu</span>
      </button>
    </div>

    <!-- Desktop navigation -->
    <div class="items-center hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
      <div class="relative mt-3 md:hidden">
        <!-- Search icon SVG -->
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </div>
        <input type="text" id="search-navbar" class="block w-full p-2 pl-10 ... dark:focus:border-blue-500" placeholder="Search...">
      </div>
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg ...">
        <?php
        $navItems = [
          ["title" => "Home", "url" => "/tools"],
          ["title" => "About", "url" => "/about"],
          ["title" => "Services", "url" => "/contact"],
          ["title" => "Privacy Policy", "url" => "/privacy-policy"],
          ["title" => "Terms & Conditions", "url" => "/term-conditions"],
        ];
        foreach ($navItems as $navItem) {
          echo '<li>';
          echo '<a href="' . $navItem["url"] . '" class="block py-2 pl-3 pr-4 ...">' . $navItem["title"] . '</a>';
          echo '</li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
