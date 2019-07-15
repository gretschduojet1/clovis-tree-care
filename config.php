<?php

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Clovis Tree Care',
    'phoneFormatted' => '(559) 314-4607',
    'phoneUrl' => 'tel:+5593144607',
    'siteDescription' => 'Professional tree care by a certified arborist.  Serving Clovis, Fresno and the Central Valley for over 10 years.',
    'hours' => 'Monday-Sunday 7:00am - 7:00pm',
    'yelpUrl' => 'https://www.yelp.com/biz/clovis-tree-care-clovis?osq=clovis+tree+care',
    'facebookUrl' => 'https://www.facebook.com/pages/category/Tree-Cutting-Service/Clovis-Tree-Service-993488544080053/',
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
