<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
<meta name="theme-color" content="#fff">
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<link rel="apple-touch-icon" type="image/x-icon" href="/apple-touch-icon.png">

{{ $slot }}