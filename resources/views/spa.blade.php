@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];
$appJs = mix('dist/js/app.js');
$appCss = mix('dist/css/app.css');
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ (str_starts_with($appCss, '//') ? 'http:' : '').$appCss }}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />

  <!-- jSpreadsheet 4.x -->
  <script src="https://bossanova.uk/jspreadsheet/v4/jexcel.js"></script>
  <link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v4/jexcel.css" type="text/css" />  
  <script src="https://jsuites.net/v4/jsuites.js"></script>
  <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />

  <!-- Load c3.css -->
  <link href="/assets/css/c3.css" rel="stylesheet">

  <!-- Load d3.js and c3.js -->
  <script src="/assets/js/d3.v5.min.js" charset="utf-8"></script>
  <script src="/assets/js/c3.min.js"></script>  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

  <!-- html2canvas.js -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.7/dist/html2canvas.min.js"></script> -->

  <!-- saveSvgAsPng.js -->
  <!-- <script src="/assets/js/saveSvgAsPng.js"></script> -->

  
</head>
<body>
  <div id="app"></div>

  <script>
    window.config = @json($config);
  </script>

  <script src="{{ (str_starts_with($appJs, '//') ? 'http:' : '').$appJs }}"></script>
</body>
</html>
