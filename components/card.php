<?php function renderCard($pokemon)
{ ?>
    <div class="bg-white shadow-lg rounded-lg p-4 flex flex-col items-center hover:scale-105 transition-transform duration-200 cursor-pointer">
        <img src="<?= $pokemon['img'] ?>" alt="<?= $pokemon['name'] ?>" class="w-32 h-32 object-contain mb-4" />
        <h2 class="text-xl font-semibold"><?= $pokemon['name'] ?></h2>
        <!-- <p class="text-sm text-gray-600"><?= $pokemon['type'] ?></p> -->
        <p class="text-sm text-gray-600">Weight: <span class="italic"><?= $pokemon['weight'] ?>

            </span></p>
        <p class="text-sm text-gray-600">Height:
            <span class="italic">
                <?= $pokemon['height'] ?>
            </span>
        </p>
    </div>
<?php } ?>