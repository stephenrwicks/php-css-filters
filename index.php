<?php

$filters = [
    'format' => [
        'book' => 'Book',
        'dvd' => 'DVD',
        'audiobook' => 'Audiobook',
        'ebook' => 'eBook',
    ],

    'audience' => [
        'adult' => 'Adult',
        'teen' => 'Teen',
        'children' => 'Children',
    ],

    'language' => [
        'english' => 'English',
        'spanish' => 'Spanish',
        'french' => 'French',
        'german' => 'German',
    ],

    'genre' => [
        'fiction' => 'Fiction',
        'mystery' => 'Mystery',
        'fantasy' => 'Fantasy',
        'scifi' => 'Science Fiction',
        'romance' => 'Romance',
        'history' => 'History',
    ],

    'availability' => [
        'available' => 'Available',
        'checkedout' => 'Checked Out',
    ],
];

$items = [
    [
        'title' => 'The Great Gatsby',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['adult'],
        'language' => ['english'],
        'genre' => ['fiction', 'romance'],
        'availability' => ['available'],
    ],

    [
        'title' => 'Spider-Man: Into the Spider-Verse',
        'format' => ['dvd', 'ebook'],
        'audience' => ['teen', 'adult'],
        'language' => ['english'],
        'genre' => ['scifi', 'fantasy'],
        'availability' => ['checkedout'],
    ],

    [
        'title' => 'Le Petit Prince',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['children', 'teen'],
        'language' => ['french', 'english'],
        'genre' => ['fiction', 'fantasy'],
        'availability' => ['available'],
    ],

    [
        'title' => 'Don Quixote',
        'format' => ['audiobook', 'book', 'ebook'],
        'audience' => ['adult', 'teen'],
        'language' => ['spanish', 'english'],
        'genre' => ['fiction', 'romance'],
        'availability' => ['checkedout'],
    ],

    [
        'title' => 'The Hobbit',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['children', 'teen', 'adult'],
        'language' => ['english', 'german'],
        'genre' => ['fantasy'],
        'availability' => ['available'],
    ],

    [
        'title' => 'Dracula',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['adult', 'teen'],
        'language' => ['english', 'french', 'german'],
        'genre' => ['fiction', 'fantasy', 'romance'],
        'availability' => ['checkedout'],
    ],

    [
        'title' => 'The Martian',
        'format' => ['book', 'ebook', 'audiobook'],
        'audience' => ['adult', 'teen'],
        'language' => ['english'],
        'genre' => ['scifi'],
        'availability' => ['available'],
    ],

    [
        'title' => 'Charlotte’s Web',
        'format' => ['book', 'audiobook'],
        'audience' => ['children'],
        'language' => ['english', 'french'],
        'genre' => ['fiction'],
        'availability' => ['available'],
    ],

    [
        'title' => 'The Name of the Rose',
        'format' => ['book', 'ebook'],
        'audience' => ['adult'],
        'language' => ['english', 'french', 'german'],
        'genre' => ['mystery', 'history'],
        'availability' => ['checkedout'],
    ],

    [
        'title' => 'Harry Potter and the Philosopher’s Stone',
        'format' => ['book', 'dvd', 'audiobook', 'ebook'],
        'audience' => ['children', 'teen', 'adult'],
        'language' => ['english', 'french', 'german'],
        'genre' => ['fantasy'],
        'availability' => ['available'],
    ],

    [
        'title' => 'Pride and Prejudice',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['adult', 'teen'],
        'language' => ['english', 'french', 'german'],
        'genre' => ['romance', 'fiction'],
        'availability' => ['checkedout'],
    ],

    [
        'title' => 'The Hound of the Baskervilles',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['adult', 'teen'],
        'language' => ['english', 'french'],
        'genre' => ['mystery', 'fiction'],
        'availability' => ['available'],
    ],

    [
        'title' => 'A Brief History of Time',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['adult'],
        'language' => ['english', 'german'],
        'genre' => ['history', 'scifi'],
        'availability' => ['checkedout'],
    ],

    [
        'title' => 'The Little Prince',
        'format' => ['book', 'dvd', 'audiobook'],
        'audience' => ['children', 'teen'],
        'language' => ['french', 'english', 'spanish'],
        'genre' => ['fiction', 'fantasy'],
        'availability' => ['available'],
    ],

    [
        'title' => 'Dune',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['teen', 'adult'],
        'language' => ['english', 'french', 'german'],
        'genre' => ['scifi', 'fantasy'],
        'availability' => ['checkedout'],
    ],

    [
        'title' => 'The Adventures of Sherlock Holmes',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['teen', 'adult'],
        'language' => ['english', 'french'],
        'genre' => ['mystery', 'fiction'],
        'availability' => ['available'],
    ],

    [
        'title' => 'The Lion, the Witch and the Wardrobe',
        'format' => ['book', 'audiobook', 'dvd'],
        'audience' => ['children', 'teen'],
        'language' => ['english', 'german', 'french'],
        'genre' => ['fantasy'],
        'availability' => ['available'],
    ],

    [
        'title' => 'The Count of Monte Cristo',
        'format' => ['book', 'audiobook', 'ebook'],
        'audience' => ['adult'],
        'language' => ['french', 'english'],
        'genre' => ['fiction', 'romance', 'history'],
        'availability' => ['checkedout'],
    ],

    [
        'title' => 'Ender’s Game',
        'format' => ['book', 'ebook', 'audiobook'],
        'audience' => ['teen', 'adult'],
        'language' => ['english', 'german'],
        'genre' => ['scifi'],
        'availability' => ['available'],
    ],

    [
        'title' => 'The Secret Garden',
        'format' => ['book', 'audiobook'],
        'audience' => ['children', 'teen'],
        'language' => ['english', 'french'],
        'genre' => ['fiction', 'romance'],
        'availability' => ['available'],
    ],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>:has() Filter Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/stephenrwicks/wicks.css@main/wicks.css">
    <style>

    body {
        margin: 0;
        padding: 0;
        height: 100vh;

    }

    .filter-demo {
        height: 100vh;
        display: grid;
        grid-template-rows: min-content 1fr;
        gap: 20px;
    }

    .filters {
        display: flex;
        flex-flow: row wrap;
        gap: 20px;
        padding: 10px;
    }

    .filter-group {
        flex: 1;

        &:has(:checked) legend {
            font-weight: bold;
        }
    }

    .results {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        grid-auto-rows: min-content;
        gap: 20px;
        overflow: auto;
        padding: 10px;
        border: 1px solid #ddd;
    }

    .item {
        display: block;
        padding: 10px;
        margin-bottom: 8px;
        border: 1px solid #ddd;
    }


<?php foreach ($filters as $filter => $options): ?>
    .filter-demo:has([data-filter="<?= $filter ?>"]:checked) .item:not(<?= implode(', ', array_map(fn($v) => ".filter-demo:has([data-filter=\"{$filter}\"][value=\"{$v}\"]:checked) [data-{$filter}~=\"{$v}\"]", array_keys($options))) ?>) { display: none; }
<?php endforeach; ?>


    </style>


</head>

<body>

<div class="filter-demo">

    <div class="filters">
        <?php foreach ($filters as $filter => $options): ?>
            <fieldset class="filter-group">
                <legend><?= ucfirst($filter) ?></legend>
                <?php foreach ($options as $value => $label): ?>
                    <label>
                        <input
                            type="checkbox"
                            data-filter="<?= $filter ?>"
                            value="<?= $value ?>"
                        >
                        <?= htmlspecialchars($label) ?>
                    </label>
                <?php endforeach; ?>
            </fieldset>
        <?php endforeach; ?>
    </div>


    <div class="results">

        <?php foreach ($items as $item): ?>
            <?php
                $format = implode(' ', $item['format']);
                $audience = implode(' ', $item['audience']);
                $language = implode(' ', $item['language']);
                $genre = implode(' ', $item['genre']);
                $availability = implode(' ', $item['availability']);

                $formatDisplay = implode(', ', $item['format']);
                $audienceDisplay = implode(', ', $item['audience']);
                $languageDisplay = implode(', ', $item['language']);
                $genreDisplay = implode(', ', $item['genre']);
                $availabilityDisplay = implode(', ', $item['availability']);
            ?>

            <div
                class="item"
                data-format="<?= htmlspecialchars($format) ?>"
                data-audience="<?= htmlspecialchars($audience) ?>"
                data-language="<?= htmlspecialchars($language) ?>"
                data-genre="<?= htmlspecialchars($genre) ?>"
                data-availability="<?= htmlspecialchars($availability) ?>"
            >
                <strong><?= htmlspecialchars($item['title']) ?></strong>
                <br>
                Format: <?= htmlspecialchars($formatDisplay) ?>
                <br>
                Audience: <?= htmlspecialchars($audienceDisplay) ?>
                <br>
                Language: <?= htmlspecialchars($languageDisplay) ?>
                <br>
                Genre: <?= htmlspecialchars($genreDisplay) ?>
                <br>
                Availability: <?= htmlspecialchars($availabilityDisplay) ?>
            </div>

        <?php endforeach; ?>
    </div>
</div>
</body>
</html>