<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="digital art portifolio">
    <meta name="author" content="mb24black">

    <title>Mb24Black</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    {{--Grid Style--}}
    <link rel="stylesheet" type="text/css" href="css/grid.css"/>

    <link rel="stylesheet" href="css/site.css">

    <script src="js/modernizr-custom.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/classie.js"></script>

    <style>

    </style>
</head>
<body id="page-top" class="bg-somecolor gradiant1">


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger font-weight-bold logo dova" href="#page-top"><h3 class="dova">
                MB24</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link  js-scroll-trigger " href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger " href="#work">My work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger " href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{--cover--}}
<div class="container-fluid m-0 bg-dark" id="cover" style='background-image: url("{{$option->cover}}")'>
    <div class="row justify-content-center p-5 m-0">
        <div class="col">
            <div class="row justify-content-center my-5">
                <div class="col-md-2 col-sm-4 col-6">
                    <img class="w-100" src="{{$option->profile}}" alt="" id="profile">
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-auto text-center">
                    <h2 class=" text-white font-raleway-regular brand">{{$option->brand}}</h2>
                    <h3 class=" text-white font-raleway-regular profession">{{$option->profession}}</h3>
                </div>
            </div>
        </div>

    </div>

</div>

{{--about--}}
<div class="container-fluid px-0 ">
    {{--about--}}
    <section class="text-center content  p-5" id="about">
        <div class="m-5">
            <h1 class="font-oxygen big-h1">About me</h1>
        </div>
        <div class="text-center m-5">
            <p class="font-raleway">{{$option->about}}</p>

        </div>

    </section>
    {{--about--}}


    {{--content--}}
    <section class="content bg-half py-4" id="work">
        <div class="grid">
            @foreach($posts as $index=>$post)
                {{--{{list($width, $height) = getimagesize(public_path($post->image))}}--}}

                <div class="grid__item" data-size="1200x1200">
                    <a href="{{$post->image}}" class="img-wrap"><img
                            class="my-image" src="{{$post->image}}" alt="img06"/></a>
                    <div class="d-none description description--grid">
                        <h2 class="m-2">{{$post->title}}</h2>
                        <p>{{$post->description}}</p>
                        <div class="details">
                            <ul>
                                <li><a class="btn btn-lg btn-primary" href="{{$post->image}}" download>Download</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            @endforeach



        </div>
        <!-- /grid -->
        <div class="preview mt-5">
            <button class="mt-5 action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span>
            </button>
            <div class="description description--preview"></div>
        </div>
        <!-- /preview -->
    </section>
    <!-- /content -->


    {{--Contact me--}}
    <section class="text-center content p-5" id="contact">
        <div class="m-5">
            <h1 class="big-h1 font-oxygen">Contact me</h1>
        </div>
        <div class="text-center m-5">
            <p class="font-raleway ">{{$option->contact}}</p>
            <a class="mx-1" href="{{$option->facebook}}"><img src="assets/facebook.png" width="50px"></a>
            <a class="mx-1" href="{{$option->instagram}}"><img src="assets/instagram.png" width="50px" alt=""></a>
            <img class="mx-1" src="assets/gmail.png" width="50px" alt=""><span class="font-oxygen-bold mx-1">{{$option->email}}</span>

        </div>

    </section>
{{--Contact me--}}
<!-- Footer -->
    <footer class="py-3 bg-half w-100">

        <p class="m-0 text-center text-white">Copyright &copy; Mb24Black 2019</p>

        <!-- /.container -->
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script src="js/scrolling-nav.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/main.js"></script>
<script>
    (function () {
        var support = {transitions: Modernizr.csstransitions},
            // transition end event name
            transEndEventNames = {
                'WebkitTransition': 'webkitTransitionEnd',
                'MozTransition': 'transitionend',
                'OTransition': 'oTransitionEnd',
                'msTransition': 'MSTransitionEnd',
                'transition': 'transitionend'
            },
            transEndEventName = transEndEventNames[Modernizr.prefixed('transition')],
            onEndTransition = function (el, callback) {
                var onEndCallbackFn = function (ev) {
                    if (support.transitions) {
                        if (ev.target != this) return;
                        this.removeEventListener(transEndEventName, onEndCallbackFn);
                    }
                    if (callback && typeof callback === 'function') {
                        callback.call(this);
                    }
                };
                if (support.transitions) {
                    el.addEventListener(transEndEventName, onEndCallbackFn);
                } else {
                    onEndCallbackFn();
                }
            };

        new GridFx(document.querySelector('.grid'), {
            imgPosition: {
                x: -0.5,
                y: 1
            },
            onOpenItem: function (instance, item) {
                instance.items.forEach(function (el) {
                    if (item != el) {
                        var delay = Math.floor(Math.random() * 50);
                        el.style.WebkitTransition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
                        el.style.transition = 'opacity .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .5s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
                        el.style.WebkitTransform = 'scale3d(0.1,0.1,1)';
                        el.style.transform = 'scale3d(0.1,0.1,1)';
                        el.style.opacity = 0;
                    }
                });
            },
            onCloseItem: function (instance, item) {
                instance.items.forEach(function (el) {
                    if (item != el) {
                        el.style.WebkitTransition = 'opacity .4s, -webkit-transform .4s';
                        el.style.transition = 'opacity .4s, transform .4s';
                        el.style.WebkitTransform = 'scale3d(1,1,1)';
                        el.style.transform = 'scale3d(1,1,1)';
                        el.style.opacity = 1;

                        onEndTransition(el, function () {
                            el.style.transition = 'none';
                            el.style.WebkitTransform = 'none';
                        });
                    }
                });
            }
        });
    })();
</script>

</body>
</html>




