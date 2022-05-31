<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} | Blogger AG</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <div class="w-full mx-auto px-2 sm:px-6 lg:px-8 py-8" style="background-color: #0a4275;">
          <footer class="text-center text-white" >
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
              <div class="">
                <h6 class="
                    uppercase
                    font-semibold
                    mb-4
                    flex
                    md:justify-start
                  ">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cubes"
                    class="w-4 mr-3" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path fill="currentColor"
                      d="M488.6 250.2L392 214V105.5c0-15-9.3-28.4-23.4-33.7l-100-37.5c-8.1-3.1-17.1-3.1-25.3 0l-100 37.5c-14.1 5.3-23.4 18.7-23.4 33.7V214l-96.6 36.2C9.3 255.5 0 268.9 0 283.9V394c0 13.6 7.7 26.1 19.9 32.2l100 50c10.1 5.1 22.1 5.1 32.2 0l103.9-52 103.9 52c10.1 5.1 22.1 5.1 32.2 0l100-50c12.2-6.1 19.9-18.6 19.9-32.2V283.9c0-15-9.3-28.4-23.4-33.7zM358 214.8l-85 31.9v-68.2l85-37v73.3zM154 104.1l102-38.2 102 38.2v.6l-102 41.4-102-41.4v-.6zm84 291.1l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6zm240 112l-85 42.5v-79.1l85-38.8v75.4zm0-112l-102 41.4-102-41.4v-.6l102-38.2 102 38.2v.6z">
                    </path>
                  </svg>
                  <span class="text-left">
                    Blog Project Laravel
                  </span>
                </h6>
                <p class="text-left">
                  Here you can use rows and columns to organize your footer content. Lorem ipsum dolor
                  sit amet, consectetur adipisicing elit.
              </div>
              <div class="">
                <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                  Useful links
                </h6>
                <p class="mb-4">
                  <a href="#!" class="text-white-600">Contact US</a>
                </p>
                <p>
                  <a href="#!" class="text-white-600">Support IT</a>
                </p>
              </div>
              <div class="">
                <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                  Contact
                </h6>
                <p class="flex items-center justify-center md:justify-start mb-4">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
                    class="w-4 mr-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor"
                      d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                    </path>
                  </svg>
                  Tampa, FL 33634, USA
                </p>
                <p class="flex items-center justify-center md:justify-start mb-4">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                    class="w-4 mr-4 mr-2" role="img" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path fill="currentColor"
                      d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                    </path>
                  </svg>
                  aguerrerodev.web@gmail.com
                </p>
              </div>
            </div>
          
            <div class="text-center p-4 py-4" style="background-color: rgba(0, 0, 0, 0.2);">
              © 2021 Copyright:
              <a class="text-white justify-center items-center" href="https://tailwind-elements.com/">AG blogger Test</a>
            </div>
          </footer>
  
        </div>

    </body>
</html>
