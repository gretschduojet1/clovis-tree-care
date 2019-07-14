<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Clovis Tree Care',
    'phone' => '(559) 314-4607',
    'siteDescription' => 'The Most Reliable & Professional Company for Landscaping & Tree Service.  Serving Fresno, Clovis, and the Central Valley for over 35 years.',
    'hours' => 'Monday-Sunday 7:00am - 7:00pm',
    // Algolia DocSearch credentials
    'docsearchApiKey' => '',
    'docsearchIndexName' => '',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return starts_with($path, 'http') ? $path : '/' . trimPath($path);
    },
];
