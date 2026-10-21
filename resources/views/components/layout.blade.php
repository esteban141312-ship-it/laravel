<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? 'default title' }}</title>
    <meta name="description" content="{{$metaDescription ?? 'default description'}}">
</head>
<body>
  
@include('partials.nav')
{{ $slot }}
@if(isset($sidebar))
<div id="sidebar">
    <h3>Sidebar</h3>
    <div id="unico">{{ $sidebar }}</div>
</div>
@endif()
</body>
</html>