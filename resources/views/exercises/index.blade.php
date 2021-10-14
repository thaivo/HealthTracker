<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">List of Exercises</h1>

        <a href="/exercises/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Exercise</a>

        @foreach($exercises as $exercise)
        <div class="mb-2">
            <a href="/exercises/{{ $exercise->id }}/details" class="text-xl font-bold text-blue-500">{{ $exercise->title }}</a>
            <a href="/exercises/{{ $exercise->id }}/edit" class="float-right bg-purple-500 hover:bg-purple-500 text-white text-center py-2 px-3 rounded">Edit</a>
            <p class="pb-3 text-md text-gray-600">Calories burned in a minute: <span class="text-red-200">{{ $exercise->calories}}</span></p>
            
            <hr class="mt-3">
        </div>
        @endforeach
    </div>
</body>

</html>