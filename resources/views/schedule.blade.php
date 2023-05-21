<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">
    <title>SCHEDULE</title>
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
        <div class="h-10"> @include('includes.header', [
            'Title' => 'Maintenance and Updates', 
        ])
        <div class="flex-grow">
            <div class="flex flex-col justify-center h-full">
                <!-- Table -->
                <div class="w-full max-w-7xl mx-auto bg-pink-50 shadow-lg rounded-sm border border-green-800">
                
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs  text-pink-400 ">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap border-b border-pink-700">
                                            <div class="font-bold text-left">Developer Name</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap border-b border-pink-700">
                                            <div class="font-bold text-left">Version Update</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap border-b border-pink-700">
                                            <div class="font-bold text-left">Date</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-pink-700">
                                <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Website 1.0</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">21/5/2023</div>
                                        </td>
                                    </tr>
                                <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Upload features</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">20/5/2023</div>
                                        </td>
                                    </tr>
                                <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Blog link</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">17/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">version beta 0.1</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">5/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Resume/ContactUs design</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">4/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Feedback design</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">3/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Feedback creation</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">3/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Videos Layout</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">2/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Gallary Indicator</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">2/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Header/Footer Design</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">2/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">Included files creation</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">1/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka </div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">version Alpha 1</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">1/5/2023</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="font-medium text-lg text-red-800">Ebrahim Sharka</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left  text-lg">SQL Tables creation</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left text-lg font-medium text-red-500">1/5/2023</div>
                                        </td>
                                    </tr>
                                    
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
        </p>',
            'blue' => '<p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
                src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                alt="Valid CSS!" />
            </a>
        </p>',
        ])</div>
    </div>
</body>

</html>
