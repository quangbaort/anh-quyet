
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('dist/css/my_love.css') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('dist/img/LinggKat.jpg') }}"/>
    <title>My Love is Lingg</title>
</head>
<body>
<div id="wrapper">
    <h1>LOVE DAYS</h1>

    <div id="clock-box">
        <div id="clock">
            <date>{{ $diffInDays }} DAYS</date>
            <time>00:00:00</time>
        </div>
    </div>

    <div id="info">
        <div class="one">
            <img src="{{ asset('dist/img/soingao.jpg') }}" class="avt">
            <p>🍁₷ǿ¡ ๖ۣۜŇɠá❍🍃</p>
        </div>
        <div id="heart">
            ❤<anni>{{ \Carbon\Carbon::parse($dayStart)->format('Y-m-d') }}</anni>
        </div>
        <div class="two">
            <img src="{{ asset('dist/img/quyetngao.jpg') }}" class="avt">
            <p>🍁¬ҨųyếϮ ๖ۣۜŇɠá❍™🍃</p>
        </div>
    </div>

    <div id="music">
        <audio loop autoplay controls>Your browser does not support the audio element.</audio>
    </div>
    <footer>Thank you for your love 💕</footer>
</div>
<script src="{{ asset('dist/js/my_love.js') }}"></script>
</body>
</html>
