<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body>
<div class="container max-w-lg mx-auto bg-gray-300" x-data>
    <header class="bg-blue-600 p-4">
        <h1 class="font-bold text-white">My Site</h1>
    </header>

    <div class="grid grid-cols-12 p-4">
        <aside class="mr-6 col-span-3 text-sm">
            <ul>
                <li>Link 1</li>
                <li>Link 2</li>
                <li>Link 3</li>
            </ul>
        </aside>

        <main class="text-sm col-span-9">
            {{$slot}}
        </main>
    </div>

    <footer class="bg-blue-600 p-4 flex items-center justify-between text-xs text-white">
        <h5 class="text-xs">My Site</h5>
        <p>2021</p>
    </footer>
</div>
@livewireScripts
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
