<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('icon.png') }}">
    <title>Document</title>
    <style>
        .flex-wrap {
            height: 120px; /* Set the height to 200 pixels */
        }
        </style>
</head>

<body>

</body>

</html>
<header>
<nav class="border-gray-200 px-4 lg:px-6 py-2.5 bg-gradient-to-b to-[#c81e76] from-transparent">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="{{ route('home') }}" class="flex items-center">
                
            </a>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="menu">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('schedule') }}"
                            class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">Schedule</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}"
                            class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">Gallery</a>
                    </li>

                    <li>
                        <a href="{{ route('video') }}"
                            class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">Video</a>
                    </li>
                    <li>
                        <a href="{{ route('feedback') }}"
                            class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: fobladecus:outline-none dark:focus:ring-white">Feedback</a>
                    </li>
                    <li>
                        <a href="{{ route('resume') }}"
                            class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">Resumes</a>
                    </li>
                    <li>
                        <a href="{{ route('ContactUs') }}"
                            class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">ContactUs</a>
                    </li>

                    <li>
                        <a href="http://blog.ebrasharka.me/"
                            class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">Blog</a>
                    </li>

                    <li>
                        <a href="{{ route('Upload') }}"
                            class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">Upload
                        </a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center lg:order-2">
                @auth
                    <a href="{{ route('logout') }}"
                    class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
                @guest
                    <a href="{{ route('register') }}"
                    class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">Register</a>
                    <a href="{{ route('login') }}"
                    class="text-black-500 hover:text-white hover:bg-black-50 focus:ring-4 focus:ring-black-300 font-medium rounded-circle text-sm px-4 lg:px-5 py-2 lg:py-2.5 dark: focus:outline-none dark:focus:ring-white">Login</a>
                @endguest
            </div>

        </div>
    </nav>
    <!-- Container for demo purpose -->
    <div>

        <!-- Section: Design Block -->
        <section class="mb-40">

        <nav class="navbar navbar-expand-lg shadow-md  bg-white relative flex items-center w-full justify-between">
</nav>

<img src="Gallary\layered-waves-haikei.svg" class="absolute block w-full" style="margin: auto; z-index: -10;" height="680" preserveAspectRatio="none" />



    <!-- Container for demo purpose -->
</header>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

</div>
