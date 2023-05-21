<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('icon.png') }}">
    <title>Register</title>

    <style>
        .flex-grow {
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.headerLogin', ['mainTitle' => 'Create an', 'subTitle' => 'Account'])
        
        <div class="flex-grow">
            @include('includes.info')
            @include('includes.errors')
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="flex justify-center">
                    <div class="row">
                        <div class="items-center justify-center bg-white w-[50rem]">
                            <div class="mx-3 text-center">
                                <div class="px-3">
                                    <div class="mb-5">
                                        <label for="name" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                            Enter your Name:</span>
                                        </label>
                                        <input type="text" name="name" id="name"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            value="{{ old('name') }}" required />
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="mb-5">
                                        <label for="email" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                            Enter your Email:</span>
                                        </label>
                                        <input type="text" name="email" id="email"
                                            
                                            class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            value="{{ old('email') }}" required />
                                    </div>
                                </div>
                                <div class="w-full px-3 ">
                                    <div class="mb-5">
                                        <label for="password" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                            Password:</span>
                                        </label>
                                        <input id="password" type="password"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            name="password" required autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="w-full px-3 ">
                                    <div class="mb-5">
                                        <label for="password" class="mb-3 block text-base font-medium text-[#c81e76] text-start">
                                            Confirm Password:</span>
                                        </label>
                                        <input id="password-confirm" type="password"
                                            class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>


                                <div class="form-layout-footer my-3 text-center ">
                                    <button
                                        class="bg-orange-200 hover:bg-orange-400 text-white font-bold py-2 px-4 rounded-md">
                                        Register
                                    </button>
                                </div><!-- form-layout-footer -->
                            </div><!-- form-layout -->
                        </div><!-- section-wrapper -->
                    </div>
                </div>
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
        </p>',
        ])
        </div>
    </div>
</body>

</html>
