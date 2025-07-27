<?php
include 'components/header.php';
include 'components/card.php';

// Fetch API
$pokemonData = file_get_contents("https://canalti.com.br/api/pokemons.json");
$pokemonJson = json_decode($pokemonData, true);
$pokemons = $pokemonJson['pokemon'];
?>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10">
    <?php foreach ($pokemons as $pokemon): ?>
        <?php renderCard($pokemon); ?>
    <?php endforeach; ?>
</div>



</main>
<?php include 'components/footer.php'; ?>
</body>

</html>