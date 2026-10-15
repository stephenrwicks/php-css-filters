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

function filterDisplayCSS(string $k, array $options)
{
    $matchingItems = implode(',', array_map(
        fn($v) => 'details:has([data-filter="' . $k . '"][value="' . $v . '"]:checked) ~ .results .item[data-' . $k . '~="' . $v . '"]', array_keys($options)
    ));

    echo 'details:has([data-filter="' . $k . '"]:checked) ~ .results .item:not(' . $matchingItems . '){display:none}';
}

function filterHighlightCSS(string $k, string $v)
{
    echo 'details:has([data-filter="' . $k . '"][value="' . $v . '"]:checked) ~ .results .item span[data-' . $k . '~="' . $v . '"]{color:blue;}';
}

function sortCSS(array $items)
{
    foreach ([
        'a-z' => fn($a, $b) => strcasecmp(preg_replace('/^(the|a|an)\s+/i', '', $a['title']), preg_replace('/^(the|a|an)\s+/i', '', $b['title'])),
        'z-a' => fn($a, $b) => strcasecmp(preg_replace('/^(the|a|an)\s+/i', '', $b['title']), preg_replace('/^(the|a|an)\s+/i', '', $a['title'])),
    ] as $sort => $compare) {
        $sortedItems = $items;
        usort($sortedItems, $compare);

        foreach ($sortedItems as $i => $item) {
            $title = $item['title'];
            echo 'body:has(option[value="' . $sort . '"]:checked) .results .item[data-title="' . $title . '"]{order:' . $i . ';}';
        }
    }
}


function h(string $x): string {
    return htmlspecialchars($x);
}

function renderFilter(string $filter, array $options): void
{
    $filter = h($filter);
    $legend = h(ucfirst($filter));

    echo '<fieldset class="filter"><legend>' . $legend . '</legend>';

    foreach ($options as $value => $label) {
        $filter = h($filter);
        $value = h($value);
        $label = h($label);

        echo '<label><input type="checkbox" data-filter="' . $filter . '" value="' . $value . '">' . $label . '</label>';
    }

    echo '</fieldset>';
}

function renderItem(array $item, array $filters): void
{
    $title = h($item['title']);

    echo '<div class="item" data-title="' . $title . '"';

    foreach ($item as $key => $values) {
        if (!isset($filters[$key])) continue;

        $attribute = h($key);
        $value = h(implode(' ', $values));

        echo ' data-' . $attribute . '="' . $value . '"';
    }

    echo '><strong>' . $title . '</strong>';

    foreach ($item as $key => $values) {
        if (!isset($filters[$key])) continue;

        $label = h(ucfirst($key));

        echo '<div>' . $label . ': ';

        foreach ($values as $index => $value) {
            if ($index > 0) echo ', ';
            $label = h($filters[$key][$value] ?? '');
            $key = h($key);
            $value = h($value);
            echo '<span data-' . $key . '="' . $value . '">' . $label . '</span>';
        }

        echo '</div>';
    }

    echo '</div>';
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP / CSS Filters - No JS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/stephenrwicks/wicks.css@main/wicks.css">
    <style>

    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        flex-flow: column nowrap;
        
        &:has([value="bottom"]:checked) {
            flex-flow: column-reverse nowrap;
        }
    }

    section {
        padding: 10px;
    }

    .filters {
        width: 100%;
        display: flex;
        flex-flow: row wrap;
        gap: 20px;
    }

    button[type="reset"] {
        visibility: hidden;
    }

    body:has(details[open]):has(.filter input:checked) button[type="reset"] {
        visibility: visible;
    }

    .filter {
        flex: 1;
        &:has(:checked) legend {
            font-weight: bold;
        }
    }

    .display {
        display: flex;
        gap: 2rem;
        padding-block: 0px;
        justify-content: space-between;
        flex-shrink: 0;
    }

    .results {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        grid-auto-rows: min-content;
        gap: 20px;
        overflow: auto;
        padding: 10px;
        border: 1px solid var(--gray);
        flex: 1;
    }

    .item {
        display: block;
        padding: 10px;
        border: 1px solid var(--gray);
    }

    body:has(option[value="list"]:checked) .results {
        grid-template-columns: 1fr;
        gap: 5px;
        padding-inline: 4rem;
        justify-self: center;
    }

    body:has(option[value="compact"]:checked) .item {
        border-color: transparent;
        padding: 0px;
    }

    body:has(option[value="compact"]:checked) .item > div {
        display: none;
    }

    dialog form {
        all: unset; 
        width: 20rem; 
        padding: 20px; 
        display: grid;
        gap: 10px;
    }

    summary {
        &::before {
            all: unset;
            display: block;
            content: "Collapse Filters";
        }
    }

    body:has(details:not([open])) summary::before {
        content: "Show Filters";
    }

<?php

foreach ($filters as $filter => $options) {
    filterDisplayCSS($filter, $options);
    foreach ($options as $value => $label) {
        filterHighlightCSS($filter, $value);
    }
}
sortCSS($items);

?>
</style>
</head>
<body>
<details open><summary></summary>
    <form onsubmit="return false;" id="form" class="filters">
    <?php foreach ($filters as $filter => $options): ?><?php renderFilter($filter, $options); ?><?php endforeach; ?>
    </form>
</details>

<section class="display">
    <button form="form" type="reset">Clear Filters</button>
    <button type="button" commandfor="display-modal" command="show-modal">Change Display</button> 
    <dialog id="display-modal">
    <form onsubmit="return false;">
        <div>
            <label for="sort">Sort</label>
            <select id="sort">
                <option value="a-z">A-Z</option>
                <option value="z-a">Z-A</option>
            </select>
        </div>
        <div>
            <label for="layout">Layout</label>
            <select id="layout">
                <option value="grid">Grid</option>
                <option value="list">List</option>
            </select>
        </div>
        <div>
            <label for="display">Display</label>
            <select id="display">
                <option value="full">Full</option>
                <option value="compact">Compact</option>
            </select>
        </div>
        <div>
            <label for="filter-position">Filter Position</label>
            <select id="filter-position">
                <option value="top">Top</option>
                <option value="bottom">Bottom</option>
            </select>
        </div>
        <div style="margin-top: 10px;">
            <button type="button" commandfor="display-modal" command="close" style="margin-left: auto;">OK</button>
        </div>
    </form>

</dialog>
</section>

<section class="results"><?php foreach ($items as $item): ?><?php renderItem($item, $filters); ?><?php endforeach; ?></section>
</body>
</html>