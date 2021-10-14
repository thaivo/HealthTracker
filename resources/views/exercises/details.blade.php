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
        <h1 class="text-4xl font-bold mb-4">Details for {{ $exercise->title }}</h1>
        <div class="mb-4">
            <p class="text-xl font-bold text-blue-500">{{ $exercise->title }}</p>
            <ol class="list-decimal">
                {{$exercise->howto}}
            </ol>
            <p class="pb-3 text-md text-gray-600">Calories burned in a minute: <span class="text-red-200">{{ $exercise->calories}}</span></p>
            <p class="pb-3 text-md text-gray-600">Trained areas: <span class="text-red-500">{{ $exercise->areas}}</span></p>
        </div>

        
        <a href="/exercises" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Back</a>
    </div>
</body>

</html>