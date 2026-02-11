<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Menu</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Tailwindcss -->
    <link rel="stylesheet" href="style/output.css">
</head>
<body class="antialiased bg-white">
    <header id="header" class="w-full h-15 bg-white grid items-center shadow-md transition-all overflow-hidden">
        <div class="h-15 flex items-center justify-end px-5 md:hidden w-full">
            <button onclick="toggleHeader()"><i class="bi bi-list text-zinc-800 text-xl"></i></button>
        </div>
        <ul class="md:flex items-center gap-3 space-y-3 md:space-y-0 bg-white w-full px-5">
            <li><a href="" class="text-zinc-800 hover:opacity-70 transition-all">Menu Spesial</a></li>
            <li><a href="" class="text-zinc-800 hover:opacity-70 transition-all">Makanan</a></li>
            <li><a href="" class="text-zinc-800 hover:opacity-70 transition-all">Minuman</a></li>
        </ul>
    </header>
</body>
<script>
    function toggleHeader() {
        const header = document.getElementById("header");
        header.classList.toggle("h-45");
        header.classList.toggle("items-center");
    }
</script>
</html>