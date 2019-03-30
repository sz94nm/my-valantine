<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MB24Black</title>
    <meta name="description" content="Art and illustrations portfolio."/>
    <meta name="keywords" content="illustrations"/>
    <meta name="author" content="MB24Black"/>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/base.css"/>
    <script>
        document.documentElement.className = "js";
        var supportsCssVars = function () {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>
</head>
<body class="loading">
<svg class="hidden">
    <symbol id="icon-arrow" viewBox="0 0 24 24">
        <title>arrow</title>
        <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
    </symbol>
    <symbol id="icon-drop" viewBox="0 0 24 24">
        <title>drop</title>
        <path
            d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/>
        <path
            d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
    </symbol>
    <symbol id="icon-longarrow" viewBox="0 0 54 24">
        <title>longarrow</title>
        <path
            d="M.42 11.158L12.38.256c.333-.27.696-.322 1.09-.155.395.166.593.467.593.903v6.977h38.87c.29 0 .53.093.716.28.187.187.28.426.28.716v5.98c0 .29-.093.53-.28.716a.971.971 0 0 1-.716.28h-38.87v6.977c0 .416-.199.717-.592.903-.395.167-.759.104-1.09-.186L.42 12.62a1.018 1.018 0 0 1 0-1.462z"/>
    </symbol>
    <symbol id="icon-navarrow" viewBox="0 0 408 408">
        <title>navarrow</title>
        <polygon fill="#fff" fill-rule="nonzero"
                 points="204 0 168.3 35.7 311.1 178.5 0 178.5 0 229.5 311.1 229.5 168.3 372.3 204 408 408 204"></polygon>
    </symbol>
</svg>
<main>
    <div class="frame">
        <header class="codrops-header">
            <h1 class="codrops-header__title">MB24Black</h1>
            <div class="codrops-links">
            </div>
        </header>
    </div>
    <div class="slideshow">
        <div class="slideshow__deco"></div>
        @foreach($posts as $index=>$post)
            <div class="slide">
                <div class="slide__img-wrap">
                    <div class="slide__img" style="background-image: url(/storage/images{{$post->image}});">
                    </div>
                </div>
                <!--side text hereeeeeeeeeeeee                                     222222222222222-->
                <div class="slide__side">{{$post->side_text}}</div>

                <img class="slide_img_img hidden" src="/storage/images/{{$post->image}}" alt="">

                <div class="slide__title-wrap">
                    <!--importantttttttt                                               88888888-->
                    <span class="slide__number">{{$index+1}}</span>

                    <!--title heeeeeere                                          33333333333333333333-->
                    <h3 class="slide__title">{{$post->title}}</h3>

                    <!--breif desc heeeeeree                                     44444444444444444444-->
                    <h4 class="slide__subtitle">{{$post->subtle_info}}</h4>
                </div>
            </div>
        @endforeach

        <button class="nav nav--prev">
            <svg class="icon icon--navarrow-prev">
                <use xlink:href="#icon-navarrow"></use>
            </svg>
        </button>
        <button class="nav nav--next">
            <svg class="icon icon--navarrow-next">
                <use xlink:href="#icon-navarrow"></use>
            </svg>
        </button>
    </div>
    <div class="content">
        @foreach($posts as $index=>$post)
            <div class="content__item">
                <span class="content__number">{{$index+1}}</span>
                <h3 class="content__title">{{$post->title}}</h3>
                <h4 class="content__subtitle">{{$post->subtle_info}}</h4>
                <div class="content__text">{{$post->description}}</div>
            </div>
        @endforeach


        <button class="content__close">
            <svg class="icon icon--longarrow">
                <use xlink:href="#icon-longarrow"></use>
            </svg>
        </button>
    </div>
</main>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/charming.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/demo.js"></script>
</body>
</html>
