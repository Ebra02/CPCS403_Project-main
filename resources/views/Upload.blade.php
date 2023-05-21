<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <link rel="icon" href="{{ asset('icon.png') }}">
    <style>
        .form-container {
            position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
}

    </style>

</head>

<body>
    <div class="flex flex-col h-screen">
        <div class="h-10"> @include('includes.header', ['Title' => 'Upload your photos and share the moment with us',])
            
        <div class="form-container d-flex align-items-center justify-content-center vh-100">
  <div class="row">
    <div class="col-md-6">
    <form role="form" method="" action="" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="Title" class="mb-3 block text-base font-medium text-[#c81e76] text-start">Title</label>
          <input type="text" class="w-full rounded-md border border-[#e0e0e0] bg-orange-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" id="Title" name="Title" required>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <input type="file" class="form-control" id="image" name="image" required accept="image/*">
        </div>
        <div class="form-layout-footer my-3 text-center ">
                                <button class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md">
                                Submit
                                </button>
      </form>
    </div>
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
        </p>
             ',
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
</body>

</html>
