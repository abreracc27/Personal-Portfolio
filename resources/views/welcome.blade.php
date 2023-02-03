<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Christian Abrera — Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
        <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
        <link rel="stylesheet" href="{{asset('css/app.css')}}" >
    </head>
    <body>
        <section class="header" id="header">
            <div class="container">
                <h2>Hi, I'm</h2>
                <h1><strong class="highlight">Christian Abrera</strong></h1>
                <p class="description">A <span class="highlight">Software Developer</span> from Quezon City, Philippines</p>

                <nav>
                    <a class="nav_link" href="">> Home</a>
                    <a class="nav_link" href="#about">> About</a>
                    <a class="nav_link" href="">> Portfolio</a>
                    <a class="nav_link" href="">> Resume</a>
                    <a class="nav_link" href="">> Contact</a>
                </nav>
            </div>

            <div class="container top-nav">
                <h1><strong class="highlight">Christian Abrera</strong></h1>
                <nav>
                    <a class="nav_link" href="">> Home</a>
                    <a class="nav_link" href="#about">> About</a>
                    <a class="nav_link" href="">> Portfolio</a>
                    <a class="nav_link" href="">> Resume</a>
                    <a class="nav_link" href="">> Contact</a>
                </nav>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container">
                <h1>About</h1>
            </div>
        </section>        
    </body>

    <script>
        // window.onscroll = function() {stickyFunction()};

        // var h2 = document.getElementById("intro");
        // var navbar = document.getElementById("name");
        // var sticky = navbar.offset;

        // alert(sticky);

        // function stickyFunction() {
        //     if (window.pageYOffset >= sticky) {
        //         h2.style.marginBottom = "64px";
        //         $.wrap("<div></div>");
        //         // navbar.classList.add("sticky")
        //     } else {
        //         h2.style.marginBottom = "8px";
        //         navbar.unwrap();
        //         // navbar.classList.remove("sticky");
        //     }
        // }

        $( window ).scroll(function() {
            var header = $("#header");
            var header_offset = header.offset();

            if($(window).scrollTop() >= header_offset.top){
               

            }else{
                
                
            }
        });

        


    </script>
</html>
