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
    <a class="mr-4" href="/">Welcome</a>
    <a class="mr-4" href="/contact">Contact</a>
</nav>

<main>
    {{ $slot }}
</main>

<footer class="bg-blue-200">
    <p>Dit is de footer</p>
    <p>Coole toevoegin</p>
</footer>

</body>
</html>