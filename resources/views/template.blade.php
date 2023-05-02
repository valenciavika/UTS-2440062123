<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/db7406598f.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="sticky bg-gray-100 top-0">
        <div class ="top-0 py-2 px-5 shadow-md shadow-gray-400">
            <div class="text-xl font-sans flex items-center justify-between">
                 <div class="font-bold ">
                    <h2 id="greet"></h2>
                    @yield('namaUser')
                </div>
                    @yield('level')
            </div>
            @yield('header')

        </div>
    </div>

    @yield('konten')

    @yield('footer')
</body>


<script>
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greetings;

    if (hrs < 12)
        greetings = 'Good Morning,';
    else if (hrs >= 12 && hrs <= 17)
        greetings = 'Good Afternoon,';
    else if (hrs >= 17 && hrs <= 24)
        greetings = 'Good Evening,';

    document.getElementById('greet').innerHTML = greetings;
</script>

</html>
