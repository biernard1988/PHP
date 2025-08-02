<?php
include 'components/header.php';
include 'components/card.php';

// Fetch API
$pokemonData = file_get_contents("https://canalti.com.br/api/pokemons.json");
$isLoading = false;
$pokemons = [];

if ($pokemonData === false) {
    $isLoading = true;
} else {
    $pokemonJson = json_decode($pokemonData, true);
    $pokemons = $pokemonJson['pokemon'];
}

// Filter by search query
$search = strtolower(trim($_GET['search'] ?? ''));

if ($search !== '') {
    $pokemons = array_filter($pokemons, function ($pokemon) use ($search) {
        $name = strtolower($pokemon['name']);
        $types = array_map('strtolower', $pokemon['type']);
        return str_contains($name, $search) || in_array($search, $types);
    });
}
?>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-2 mb-10 mx-8">
    <?php if ($isLoading): ?>

        <?php for ($i = 0; $i < 8; $i++): ?>
            <div class="animate-pulse p-4 bg-white rounded-lg shadow-md">
                <div class="w-28 h-28 mx-auto bg-gray-300 rounded-full mb-4"></div>
                <div class="h-4 bg-gray-300 rounded w-1/2 mx-auto mb-2"></div>
                <div class="h-3 bg-gray-200 rounded w-3/4 mx-auto mb-1"></div>
                <div class="h-3 bg-gray-200 rounded w-2/3 mx-auto"></div>
            </div>
        <?php endfor; ?>

    <?php else: ?>
        <?php foreach ($pokemons as $pokemon): ?>
            <?php renderCard($pokemon); ?>
        <?php endforeach; ?>
    <?php endif; ?>

</div>

</main>

</body>
<?php include 'components/footer.php'; ?>

</html>