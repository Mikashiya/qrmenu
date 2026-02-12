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
        <div id="menuspesial" class="space-y-1">
            <p class="text-xl text-zinc-800 font-semibold">Menu Spesial</p>
            <div class="size-full grid grid-cols-2 md:grid-cols-4 gap-3">
                <div class="col-span-1 rounded-md shadow-md h-70 md:h-150 grid md:grid-rows-4 grid-rows-3">
                    <div class="md:row-span-4 row-span-2">
                        <img src="img/menu.png" alt="Menu Photo" class="bg-cover rounded-md h-full w-full">
                    </div>
                    <div class="row-span-1 p-3 grid items-center">
                        <p class="font-semibold text-md text-zinc-800">Nama Menu</p>
                        <span class="flex"><p class="text-base text-red-500">Rp. </p><p class="text-base text-red-500">10.000</p></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
    // Toggle Header
    function toggleHeader() {
        const header = document.getElementById("header");
        header.classList.toggle("h-50");
        header.classList.toggle("items-center");
    }

    // Offset + Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            const offset = 75; // jarak dari atas
            const topPosition = target.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({
                top: topPosition,
                behavior: 'smooth'
            });
        });
    });
</script>
</html>