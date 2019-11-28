<section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <?php $categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное']; ?>

    <ul class="promo__list">
        <li class="promo__item promo__item--boards">
            <a class="promo__link" href="all-lots.html">Доски и лыжи</a>
        </li>
        <li class="promo__item promo__item--attachment">
            <a class="promo__link" href="all-lots.html">Крепления</a>
        </li>
        <li class="promo__item promo__item--boots">
            <a class="promo__link" href="all-lots.html">Ботинки</a>
        </li>
        <li class="promo__item promo__item--clothing">
            <a class="promo__link" href="all-lots.html">Одежда</a>
        </li>
        <li class="promo__item promo__item--tools">
            <a class="promo__link" href="all-lots.html">Инструменты</a>
        </li>
        <li class="promo__item promo__item--other">
            <a class="promo__link" href="all-lots.html">Разное</a>
        </li>
    </ul>
</section>
<section class="lots">
    <div class="lots__header">
        <h2>Открытые лоты</h2>
    </div>
    <?php
    $lots = [
        0 => [
            'name'  => '2014 Rossignol District Snowboard',
            'category' => 'Доски и лыжи',
            'price' => '10999',
            'image' => 'img/lot-1.jpg'
        ],
        1 => [
            'name'  => 'DC Ply Mens 2016/2017 Snowboard',
            'category' => 'Доски и лыжи',
            'price' => '159999',
            'image' => 'img/lot-2.jpg'
        ],
        2 => [
            'name'  => 'Крепления Union Contact Pro 2015 года размер L/XL',
            'category' => 'Крепления',
            'price' => '8000',
            'image' => 'img/lot-3.jpg'
        ],
        3 => [
            'name'  => 'Ботинки для сноуборда DC Mutiny Charocal',
            'category' => 'Ботинки',
            'price' => '10999',
            'image' => 'img/lot-4.jpg'
        ],
        4 => [
            'name'  => 'Куртка для сноуборда DC Mutiny Charocal',
            'category' => 'Одежда',
            'price' => '7500',
            'image' => 'img/lot-5.jpg'
        ],
        5 => [
            'name'  => 'Маска Oakley Canopy',
            'category' => 'Разное',
            'price' => '5400',
            'image' => 'img/lot-6.jpg'
        ],
    ]
    ?>

    <ul class="lots__list">
        <?php foreach ($lots as $key => $item): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?=$item['image']; ?>" width="350" height="260" alt="Сноуборд">
                </div>
                <div class="lot__info">
                    <span class="lot__category"> <?=$item['category']; ?> </span>
                    <h3 class="lot__title"><a class="text-link" href="lot.html"> <?=$item['name']; ?> </a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <!-- Здесь задание 2 к лекции 2 -->
                            <?php $price = ceil($item['price']) ?>
                            <?php if ($price < 1000) {
                                echo $price;
                            } else {
                                $price = number_format($price,0,' ',' ');
                            }
                            ?>
                            <?php $start_price = $price . ' &#8381'; ?>
                            <span class="lot__cost"> <?=$start_price; ?></span>

                        </div>
                        <div class="lot__timer timer">

                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>

