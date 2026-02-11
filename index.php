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
<body class="antialiased">
    <header id="header" class="fixed z-10 w-full h-15 bg-white md:flex grid items-center px-5 md:gap-10 shadow-md transition-all overflow-hidden">
        <div class="h-15 flex">
            <img src="img/RESTOQR.png" alt="Resto Logo">
            <div class="flex items-center justify-end md:hidden w-full">
                <button onclick="toggleHeader()"><i class="bi bi-list text-zinc-800 text-xl"></i></button>
            </div>
        </div>
        <ul class="md:flex items-center gap-5 space-y-3 md:space-y-0 bg-white w-full">
            <li><a href="#menuspesial" class="text-zinc-800 hover:opacity-70 transition-all">Menu Spesial</a></li>
            <li><a href="#makanan" class="text-zinc-800 hover:opacity-70 transition-all">Makanan</a></li>
            <li><a href="#minuman" class="text-zinc-800 hover:opacity-70 transition-all">Minuman</a></li>
        </ul>
    </header>
    <main class="pt-19 px-4 pb-4 space-y-5">
        <div id="menuspesial">
            <p class="font-xl text-zinc-800 font-semibold">Menu Spesial</p>
            <div class="size-full grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
            </div>
        </div>
        <div id="makanan">
            <p class="font-xl text-zinc-800 font-semibold">Makanan</p>
            <div class="size-full grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
            </div>
        </div>
        <div id="minuman">
            <p class="font-xl text-zinc-800 font-semibold">Minuman</p>
            <div class="size-full grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
                <div class="col-span-1 rounded-md shadow-md h-50 md:h-150">

                </div>
            </div>
        </div>
    </main>
</body>
<script>
    function toggleHeader() {
        const header = document.getElementById("header");
        header.classList.toggle("h-50");
        header.classList.toggle("items-center");
    }
</script>
</html>