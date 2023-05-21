<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">

    <title>VIDEO</title>
</head>

<body>
    @include('includes.header', ['Title' => 'Live moments we share',])


    <div class="grid lg:grid-cols-2 gap-6 m-5">
        <div class="relative"style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/L1PokUmLrA4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen
                frameborder="0" …></iframe>
        </div>

        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/RSxQZixnrEE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen
                frameborder="0" …></iframe>
        </div>
        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/Xq4W_v_1hBQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen
                frameborder="0" …></iframe>
        </div>
        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/LkdjFO2B9EE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen
                frameborder="0" …></iframe>
        </div>
        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/QKZ0ySstvQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen
                frameborder="0" …></iframe>
        </div>
        <div class="relative" style="padding-top: 56.25%">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/MXvQwanmrPk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen
                frameborder="0" …></iframe>
        </div>
    </div>
    <br>
    </section>
    <!-- Section: Design Block -->

    @include('includes.footer', [
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
    </p>',
    ])
</body>

</html>
