<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">

    <title>FEEDBACK</title>

    <style>
        .flex-grow {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
}

</style>
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', ['Title' => 'Feedbacks',])
        </div>
        <div class="flex-grow">
            <div class="flex flex-col">
               
                <br>
                @if (count($feedbacks))
                    <div class="mt-4 grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                        @foreach ($feedbacks as $feedback)
                            <div class="flex items-start rounded-xl bg-orange-100 p-4 shadow-lg">
                                

                                <div class="ml-4">
                                    <h1 class="font-black uppercase ">{{ $feedback->subject }}</h1>
                                    <h1 class="font-black uppercase text-[#c81e76]">{{ $feedback->nickname }}</h1>
                                    <h3 class="font-semibold ">{{ $feedback->email }}</h3>
                                    <p class="mt-2 text-sm text-gray-500">{{ $feedback->comment }} </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                @endif


                <br>
                <div class="text-center">
                    <a href="{{ route('feedback.create') }}">
                        <button class="bg-orange-200 hover:bg-orange-400 text-white font-bold py-2 px-4 rounded-md">
                            Submit your feedback
                        </button>
                    </a>
                </div>
                <br>
            </div>
        </div>
        <div class="h-10"> @include('includes.footer', [
            'orange' => '<p>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="http://jigsaw.w3.org/css-validator/images/vcss"
                    alt="Valid CSS!" />
            </a>
        </p>
                ',
            'blue' => '<p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
                src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                alt="Valid CSS!" />
            </a>
        </p>',
        ])
        </div>
    </div>


</body>

</html>
