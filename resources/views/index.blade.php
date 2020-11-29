<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>Laravel URL Shortener</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords"
        content="Particles Login Form Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <style>
        body {
            margin: 0;
            font-size: 28px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            position: fixed;
            top: 0;
            z-index: 1;
            width: 100%;
            background-color: #f1f1f1;
        }

        .header h2 {
            text-align: center;
        }

        .progress-container {
            width: 100%;
            height: 8px;
            background: #ccc;
        }

        .progress-bar {
            height: 8px;
            background: #4caf50;
            width: 0%;
        }

        .content {
            padding: 100px 0;
            margin: 50px auto 0 auto;
            width: 80%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

    </style>
    <!-- //Meta-Tags -->
    <!-- Stylesheets -->
    <link href={{ asset('css/style.css') }} rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- online fonts-->
    {{--
    <link href="https://fonts.googleapis.com/css?family=Amiri:400,400i,700,700i" rel="stylesheet">
    --}}
</head>

<body>
    <!--  particles  -->
    <div id="particles-js"></div>
    <!-- //particles -->
    <div class="w3ls-pos">
        <h1>Laravel URL Shortener</h1>
        <div class="w3ls-login box">
            <!-- form starts here -->
            <form action="{{ url('short') }}" method="post">
                @csrf
                <div class="agile-field-txt">
                    <input type="text" name="url" placeholder="https://github.com/TursunboyevJahongir" required="" />
                </div>
                {{-- <div class="agile-field-txt">
                    <input type="password" name="password" placeholder="******" required="" id="myInput" />
                    <div class="agile_label">
                        <input id="check3" name="check3" type="checkbox" value="show password">
                        <label class="check" for="check3">Remember me</label>
                    </div>
                </div> --}}
                <div class="w3ls-bot">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>



        <div class="header">

            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>

        <div class="content">
			@if ($request->session()->has('message'))
				{{$request->session()->get('message', '')}}<br/>
				<a href="{{url($request->session()->get('short', ''))}}">{{ url($request->session()->get('short', '')) }}</a>
			@endif
            <h3>Scroll Down to See The Effect</h3>
            <table class="w3-table-all w3-hoverable">
                <thead>
                    <tr class="w3-light-grey">
                        <th>N:</th>
                        <th>Url</th>
                        <th>Short-link</th>
                    </tr>
                </thead>
                @foreach ($links as $link)
                    <tr>
                        <td>{{ $link->id }}</td>
                        <td>{{ $link->url }}</td>
                        <td><a href="{{ url($link->short) }}" target="_blank">{{ $link->short }}</a></td>
                    </tr>
                @endforeach

            </table>
        </div>
        <div class="copy-wthree">
            <p>29.11.2020
                <a href="https://github.com/TursunboyevJahongir" target="_blank">Жахонгир Турсунбоев</a>
            </p>
        </div>
        <!--//copyright-->
    </div>


    <!-- scripts required  for particle effect -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // When the user scrolls the page, execute myFunction 
        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
        }

    </script>
    <script src={{ asset('js/particles.min.js') }}></script>
    <script src={{ asset('js/index.js') }}></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!-- //scripts required for particle effect -->
</body>

</html>
