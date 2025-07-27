<?php
function getTypeColor($type)
{
    switch (strtolower($type)) {
        case 'normal':
            return 'bg-gray-100 text-gray-800 border';
        case 'fighting':
            return 'bg-yellow-100 text-yellow-800';
        case 'flying':
            return 'bg-indigo-200 text-indigo-800';
        case 'electric':
            return 'bg-yellow-400 text-yellow-800';
        case 'psychic':
            return 'bg-violet-200 text-violet-800';
        case 'ground':
            return 'bg-amber-200 text-amber-800';
        case 'rock':
            return 'bg-orange-200 text-orange-950';
        case 'bug':
            return 'bg-lime-200 text-lime-800';
        case 'fire':
            return 'bg-red-100 text-red-800';
        case 'water':
            return 'bg-blue-300 text-blue-950';
        case 'ice':
            return 'bg-sky-200 text-sky-800';
        case 'grass':
            return 'bg-green-100 text-green-800';
        case 'poison':
            return 'bg-purple-100 text-purple-800';
        default:
            return 'bg-gray-100 text-gray-800';
    }
}
?>

<?php function renderCard($pokemon)
{ ?>
    <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center hover:scale-105 transition-transform duration-200 cursor-pointer">
        <img src="<?= $pokemon['img'] ?>" alt="<?= $pokemon['name'] ?>" class="w-32 h-32 object-contain mb-4" />
        <h2 class="text-xl font-semibold"><?= $pokemon['name'] ?></h2>
        <div class="flex gap-2 flex-wrap justify-center mt-2">
            <?php foreach ($pokemon['type'] as $tipo): ?>
                <span class="text-xs px-2 py-1 rounded-full <?= getTypeColor($tipo) ?>">
                    <?= htmlspecialchars($tipo) ?>
                </span>
            <?php endforeach; ?>
        </div>
        <p class="text-sm text-gray-600">Weight: <span class="italic"><?= $pokemon['weight'] ?>

            </span></p>
        <p class="text-sm text-gray-600">Height:
            <span class="italic">
                <?= $pokemon['height'] ?>
            </span>
        </p>
    </div>
<?php } ?>