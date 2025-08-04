<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pokedex PHP</title>
    <link rel="icon" type="image/png" href="assets/php.svg">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <header class="bg-gray-300 bg-opacity-50 shadow-[0_6px_10px_-4px_rgba(0,0,0,0.2)] p-4 fixed w-full z-10">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2 opacity-70 hover:opacity-100 transition-opacity">
                <h1 class="text-2xl font-bold text-center md:text-left w-full md:w-auto ">Pokedex PHP</h1>
                <a href="index.php">

                    <img src="assets/php.svg" alt="Logo" class="w-10 h-10" />
                </a>
            </div>
            <form method="GET" class="sm:w-1/4 md:w-1/3 lg:w-1/4 relative">
                <input
                    type="text"
                    name="search"
                    value="<?= htmlspecialchars($_GET['search'] ?? '') ?>"
                    placeholder="Search for name or type..."
                    class="w-full px-8 py-2 rounded bg-white text-black outline-none" />
            </form>
            <script>
                // Clean the search input when the page loads if there's a search query
                window.addEventListener("load", () => {
                    const urlParams = new URLSearchParams(window.location.search);
                    if (urlParams.has("search")) {
                        // Remove the search query from the URL
                        window.history.replaceState(null, "", window.location.pathname);
                        // Clear the search input
                        document.querySelector("input[name='search']").value = "";
                    }
                });
            </script>
        </div>
    </header>

    <main class="container mx-auto flex-grow pt-36 md:pt-28s">