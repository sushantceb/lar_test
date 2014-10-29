<!doctype html>
<html lang="en">
    <head>
        <title>{{$page_title}}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{$static_url}}/images/logo.png">


        @foreach($meta as $p)
        <meta name="{{$p[name]}}" content="{{$p[content]}}" />
        @endforeach

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

        @foreach($headercss as $files)
        <link type="text/css" href="{{$static_url}}/{{$files}}?v={{$static_version}}" rel="stylesheet">
        @endforeach

        @foreach($headerjs as $files)
        <script type="text/javascript" src="{{$static_url}}/{{$files}}?v={{$static_version}}"></script>
        @endforeach

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

        <meta name="google-translate-customization" content="1c85c0d2def29f8c-cb83d0aa07c0b8a3-g0681a6132575f47e-19"></meta>

        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
            window.$zopim || (function(d, s) {
                var z = $zopim = function(c) {
                    z._.push(c)
                }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function(o) {
                    z.set.
                            _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute('charset', 'utf-8');
                $.src = '//v2.zopim.com/?23ew0RNrXEqbsG8JxybvNIPFELFkKXSc';
                z.t = +new Date;
                $.
                        type = 'text/javascript';
                e.parentNode.insertBefore($, e)
            })(document, 'script');
        </script>
        <!--End of Zopim Live Chat Script-->

    </head>