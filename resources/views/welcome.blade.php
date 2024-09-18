<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contacts App</title>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <!-- Styles -->
  @livewireStyles
  <!-- icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="flex flex-col min-h-screen">
  <header class="navbar bg-base-100">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl">Contacts App <i class="bi bi-emoji-laughing-fill"></i></a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        <div class="dropdown">
          <div tabindex="0" role="button" class="btn m-1">
            {{ __('Theme') }}
            <svg width="12px" height="12px" class="inline-block h-2 w-2 fill-current opacity-60"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
              <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
            </svg>
          </div>
          <ul tabindex="0" class="dropdown-content bg-base-300 rounded-box z-[1] w-52 p-2 shadow-2xl">
            <li>
              <input type="radio" name="theme-dropdown" id="default-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Default"
                value="default" />
            </li>
            <li>
              <input type="radio" name="theme-dropdown" id="retro-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Retro"
                value="retro" />
            </li>
            <li>
              <input type="radio" name="theme-dropdown" id="cyberpunk-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Cyberpunk"
                value="cyberpunk" />
            </li>
            <li>
              <input type="radio" name="theme-dropdown" id="valentine-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Valentine"
                value="valentine" />
            </li>
            <li>
              <input type="radio" name="theme-dropdown" id="aqua-theme"
                class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Aqua"
                value="aqua" />
            </li>
          </ul>
        </div>

        <div class="dropdown">
          <div tabindex="0" role="button" class="btn m-1">
            {{ __('Language') }}
            <svg width="12px" height="12px" class="inline-block h-2 w-2 fill-current opacity-60"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
              <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
            </svg>
          </div>
          <ul tabindex="0" class="dropdown-content bg-base-300 rounded-box z-[1] w-52 p-2 shadow-2xl">
            <li class="flex items-center">
              <a href="{{ route('language.switch', 'en') }}" class="flex items-center">
                <img src="/img/estados-unidos.png" alt="English" class="w-6 h-6 mr-2"> {{ __('English') }}
              </a>
            </li>
            <li class="flex items-center">
              <a href="{{ route('language.switch', 'es') }}" class="flex items-center">
                <img src="/img/mundo.png" alt="Spanish" class="w-6 h-6 mr-2"> {{ __('Spanish') }}
              </a>
            </li>
            <li class="flex items-center">
              <a href="{{ route('language.switch', 'fr') }}" class="flex items-center">
                <img src="/img/francia.png" alt="French" class="w-6 h-6 mr-2"> {{ __('French') }}
              </a>
            </li>
            <li class="flex items-center">
              <a href="{{ route('language.switch', 'de') }}" class="flex items-center">
                <img src="/img/alemania.png" alt="German" class="w-6 h-6 mr-2"> {{ __('German') }}
              </a>
            </li>
            <li class="flex items-center">
              <a href="{{ route('language.switch', 'pt') }}" class="flex items-center">
                <img src="/img/portugal.png" alt="Portuguese" class="w-6 h-6 mr-2"> {{ __('Portuguese') }}
              </a>
            </li>
            <li class="flex items-center">
              <a href="{{ route('language.switch', 'ja') }}" class="flex items-center">
                <img src="/img/japon.png" alt="Japanese" class="w-6 h-6 mr-2"> {{ __('Japanese') }}
              </a>
            </li>
          </ul>
        </div>

        @if (Route::has('login'))
          @auth
            <li>
              <a href="{{ url('/dashboard') }}" class="btn btn-ghost">
                {{ __('Dashboard') }}
              </a>
            </li>
          @else
            <li>
              <a href="{{ route('login') }}" class="btn btn-ghost">
                {{ __('Log in') }}
              </a>
            </li>
            @if (Route::has('register'))
              <li>
                <a href="{{ route('register') }}" class="btn btn-ghost">
                  {{ __('Register') }}
                </a>
              </li>
            @endif
          @endauth
        @endif
      </ul>
    </div>
  </header>


  <main class="flex-1 flex items-center justify-center bg-base-200">
    <div class="hero w-full max-w-screen-lg">
      <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="flex-1">
          <i class="bi bi-person-lines-fill text-9xl"></i>
        </div>
        <div class="flex-1">
          <h1 class="text-5xl font-bold">Contacts App</h1>
          <p class="py-6">
            {{ __('A web application to store and manage your contacts.') }}
          </p>
          <a href="{{ route('register') }}" class="btn btn-primary"> {{ __('Get Started') }} </a>
        </div>
      </div>
    </div>
  </main>

  <footer class="py-16 text-center text-sm text-black">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
  </footer>

  <!-- Modals -->
  @stack('modals')

  <!-- Scripts -->
  @livewireScripts

</body>

</html>
