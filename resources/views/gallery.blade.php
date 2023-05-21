<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">

    <title>GALLERY</title>

    <style>                    
                    .selected {
                        z-index:-1;
                        transform: scale(1.2); 
                    }
                    </style>
    
   
    
</head>

<body>

    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', ['Title' => 'Every photo has a story behind it',])

        </div>
        <div class="flex-grow">
            
            
            <div class="max-w-2xl mx-auto">

                <div id="default-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-[1080px] rounded-lg ">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span
                                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800"></span>
                            <img src="{{ asset('Gallary/IMG_3760.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3760">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('Gallary/IMG_3756.jpeg' ) }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3756">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('Gallary/IMG_3757.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3757">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('Gallary/IMG_3758.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3758">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('Gallary/IMG_3755.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3755">
                        </div>
                        <!-- Item 6 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('Gallary/IMG_3743.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3743">
                        </div>
                        <!-- Item 7 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('Gallary/IMG_3733.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3733">
                        </div>
                        <!-- Item 8 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('Gallary/IMG_3736.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3736">
                        </div>
                        
                        <!-- Item 9 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('Gallary/IMG_3744.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3744">
                        </div>
                        <!-- Item 10 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('Gallary/IMG_3745.jpeg') }}"
                                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2"
                                alt="3745">
                        </div>
                    </div>



                    <!-- Slider indicators -->
                    
                    

                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-100 -translate-x-1/2">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 1"
                            data-carousel-slide-to="0" src="{{ asset('Gallary/IMG_3760.jpeg') }}">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1" src="{{ asset('Gallary/IMG_3756.jpeg') }}">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 3"
                            data-carousel-slide-to="2" src="{{ asset('Gallary/IMG_3757.jpeg') }}">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 4"
                            data-carousel-slide-to="3" src="{{ asset('Gallary/IMG_3758.jpeg') }}">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 5"
                         data-carousel-slide-to="4" src="{{ asset('Gallary/IMG_3755.jpeg') }}">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 6"
                            data-carousel-slide-to="5" src="{{ asset('Gallary/IMG_3743.jpeg') }}">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 7"
                            data-carousel-slide-to="6" src="{{ asset('Gallary/IMG_3733.jpeg') }}">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 8"
                            data-carousel-slide-to="6" src="{{ asset('Gallary/IMG_3737.jpeg') }}">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 9"
                            data-carousel-slide-to="6" src="{{ asset('Gallary/IMG_3744.jpeg') }}">
                        <img class="w-12 h-12 rounded-full cursor-pointer" aria-current="false" aria-label="Slide 10"
                            data-carousel-slide-to="6" src="{{ asset('Gallary/IMG_3745.jpeg') }}">
                    </div>

                    


  
                    <!-- Slider controls -->
                    <button type="button"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>
                <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
            </div>
            <br>
        </div>
        <div class="h-10"> @include('includes.footer', [
            'orange' => '<p>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                    alt="Valid CSS!" />
            </a>
        </p>',
            'blue' => '<p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
                src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                alt="Valid CSS!" />
            </a>
        </p>
              ',
        ])</div>
    </div>
    <!-- the photo should be loaded first so the JS code can work properly
        this is why the js code is here and not in extended file -->
    <script>
                    let images = document.querySelectorAll('.flex img');
                        images.forEach((image) => {
                        image.addEventListener('mouseenter', () => {
                        images.forEach((img) => {
                        img.classList.remove('selected');
                        });
                        image.classList.add('selected');
                        });
                        });
                    </script>
    
</body>

</html>
