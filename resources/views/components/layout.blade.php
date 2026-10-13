@props([
    '$title'=>'No Skin'
])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
<x-navigation>

</x-navigation>
{{$slot}}

{{--footer is not needed on the about me, unless a contact page comes--}}
<footer>
    <p>Gemaakt door Olivia Rijkes</p>
    <a href="/about">Over ons</a>
</footer>
</body>
</html>
