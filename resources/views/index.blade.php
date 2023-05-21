<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">
    <title>HOME</title>
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', [
            'Title' => 'Welcome Aboard!! travellers',
        ])
        </div>
        
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
        ])
        </div>
    </div>

</body>

</html>
