<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KIES IETS</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="">
<nav class="mb-4 bg-pink-200">
    <a class="mr-4 ml-8 hover:font-bold" href="/">Welcome</a>
    <a class="mr-4 hover:font-bold" href="/contact">Contact</a>
    <a class="mr-4 hover:font-bold" href="/about">About</a>
</nav>

<main>
    {{ $slot }}
</main>

<footer class="bg-gray-200">
    <p class="m-8">Dit is de footer</p>
</footer>

</body>
</html>