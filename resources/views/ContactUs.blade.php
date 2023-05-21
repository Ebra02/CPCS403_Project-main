<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">

    <style>
        .grid-container {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 40px;
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}


.icon-link {
  display: inline-block;
  transition: transform 0.3s ease;
}

.icon-link:hover {
  transform: scale(1.1);
}

.icon {
  width: 80px; /* Increase the width */
  height: 80px; /* Increase the height */
}




    </style>


   

    <title>Contact Us</title>
    @php
        use App\Http\Controllers\HomeController;
    @endphp
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', ['Title' => 'Contact Us',])

        <div class="grid-container">
  <a href="https://twitter.com/Ebra_0002" class="icon-link">
    <img src="Gallary/twitter-icon.svg" alt="Twitter" class="icon">
  </a>
  <a href="mailto:{{ HomeController::scrambleEmail('MOC.LIAMG@AKRAHSARBE') }}" class="icon-link">
    <img src="Gallary/gmail-icon.svg" alt="Gmail" class="icon">
  </a>
  <a href="https://www.linkedin.com/in/ebrahim-sharka-b832ab273/" class="icon-link">
    <img src="Gallary/linkedin-icon.svg" alt="LinkedIn" class="icon">
  </a>
  <a href="https://discord.gg/6qSbGvpT" class="icon-link">
    <img src="Gallary/discord-icon.svg" alt="Discord" class="icon">
  </a>
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
