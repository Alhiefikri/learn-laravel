<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blog</title>
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold text-gray-700 ">Blog Kita</h1>

  <h3 class="text-2xl font-bold text-gray-700 ">{{ $title1}}</h3>
  <p class="text-gray-600 text-3xl">{{ $description1 }}</p>
  <h3 class="text-2xl font-bold text-gray-700 ">{{ $title2}}</h3>
  <p class="text-gray-600 text-3xl">{{ $description2 }}</p>
</body>
</html>