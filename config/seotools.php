<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Koffie & Commerce, de bron van inspiratie en informatie voor beginnende media professionals!", // set false to total remove
            'description'  => 'Welkom bij Koffie & Commerce. Dè bron van inspirerende verhalen en informatie over de zakelijke kant van media. Inhoud creëeren is uitdagend op zich, maar er centen mee verdienen is vaak nog het lastigste van al.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['media','media-experts','tv-project'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Koffie & Commerce, de bron van inspiratie en informatie voor beginnende media professionals!', // set false to total remove
            'description' => 'Welkom bij Koffie & Commerce. Dè bron van inspirerende verhalen en informatie over de zakelijke kant van media.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'Koffie & Commerce',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          'card'        => 'summary',
          'site'        => '@LPoignonnec',
        ],
    ],
];
