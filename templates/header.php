<header class="bg-white mb-8 flex flex-wrap items-center border-b border-gray-400">
    <a href="/" class="inline-flex pt-4 md:py-8 xs:w-2/3  mx-auto md:mx-0">
        <span class="max-w-xs"><?php include __DIR__ . '/header/logo.php' ?></span>
        <h1 class="md:pt-2 text-3xl md:text-4xl font-extrabold">Mage-OS Nederland</h1>
    </a>

    <nav class="inline-flex w-full md:flex-grow md:w-auto">
        <?php $menuItems = include __DIR__ . '/../data/topmenu.php' ?>
        <ul class="flex flex-row w-full md:w-auto md:ml-auto justify-between gap-2 lg:gap-4 xl:gap-8 md:text-lg">
            <?php foreach ($menuItems as $menuItem): ?>
                <li class="flex-auto hidden lg:block">
                    <a class="<?= $menuItem->getClass() ?>"
                       href="<?= $menuItem->getUrl() ?>"><?= $menuItem->getLabel() ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>