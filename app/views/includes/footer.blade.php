@foreach($footerjs as $files)
    <script type="text/javascript" src="{{$static_url}}/{{$files}}?v={{$static_version}}"></script>
@endforeach
  </body>
</html>
