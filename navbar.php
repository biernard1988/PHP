<nav class="container w-auto h-16 p-5 bg-gray-700 text-white">
    <button onclick="toggleNavbar()" class="text-gray-300 focus:outline-none md:hidden hover:cursor-pointer" aria-label="Toggle navigation menu">
        <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 hidden" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    <div id="mobile-menu">

        <ul class="flex justify-center items-center gap-6 hover:text-gray-300">
            <li><a href="index.php?page=landing">Home</a></li>
            <li><a href="index.php?page=about">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    function toggleNavbar() {
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        const isOpen = !menu.classList.contains('hidden');

        if (isOpen) {
            menu.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        } else {
            menu.classList.remove('hidden');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }
    }
</script>