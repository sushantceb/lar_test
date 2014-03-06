<!doctype html>
<html lang="en">
<head>
	<title>{{$page_title}}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1" />
        <meta name="viewport" content="width=device-width">

        @foreach($meta as $p)
            <meta name="{{$p[name]}}" content="{{$p[content]}}" />
        @endforeach

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

        @foreach($headercss as $files)
            <link type="text/css" href="{{$static_url}}/css/{{$files}}?v={{$static_version}}" rel="stylesheet">
        @endforeach
        
        @foreach($headerjs as $files)
            <script type="text/javascript" src="{{@static_url}}/js/{{$files}}?v={{@static_version}}"></script>
        @endforeach

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

</head>