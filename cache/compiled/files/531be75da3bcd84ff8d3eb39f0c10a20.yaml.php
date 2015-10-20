<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/plugins/external_links/languages.yaml',
    'modified' => 1445363823,
    'data' => [
        'de' => [
            'PLUGINS' => [
                'EXTERNAL_LINKS' => [
                    'GLOBAL_CONFIG' => 'Globale Einstellungen',
                    'DEFAULT_CONFIG' => 'Standardeinstellungen für External Links',
                    'SPECIFIC_CONFIG' => 'Globale und seitenspezifische Einstellungen',
                    'PLUGIN_STATUS' => 'Plugin Status',
                    'BUILTIN_CSS' => 'Verwende mitgeliefertes CSS',
                    'WEIGHT' => 'Ausführungsreihenfolge',
                    'EXCLUDE_CLASSES' => 'Ignoriere Links mit diesen Klassen',
                    'EXCLUDE_CLASSES_HELP' => 'Mit Komma getrennte Liste',
                    'EXCLUDE_DOMAINS' => 'Eine Liste von auszuschließenden Domains (jeder regulärer Ausdruck kann verwendet werden)',
                    'EXCLUDE_DOMAINS_HELP' => 'Komma getrennte Liste von Domains z.B. _localhost/*_.',
                    'PROCESS' => 'Aktiviere <code>External Links</code> auf Seite',
                    'TITLE' => 'Zeige Standardtexttitel für externe Links',
                    'TITLE_MESSAGE' => 'Dieser Link führt auf eine externe Webseite für deren Inhalt wir nicht verantwortlich sind.',
                    'NO_FOLLOW' => 'Fügt <code>rel="nofollow"</code> zu allen externen Links',
                    'TARGET' => 'Setze "target" Attribut des Links.',
                    'TARGET_BLANK' => '_blank - Öffne Link im neuen Fenster',
                    'TARGET_SELF' => '_self - Öffne Link im gleichen Tab oder Seite',
                    'TARGET_PARENT' => '_parent - Öffne Link im Elternfenster',
                    'TARGET_TOP' => '_top - Öffne Link im ganzen Fenster',
                    'MODE' => 'Modus',
                    'MODE_HELP' => 'active = Zeichne externe Links aus; passive = Zeichne externe Links aus ohne entsprechende CSS-Klassen zu setzen',
                    'MODE_ACTIVE' => 'Aktiv - Zeichne externe Links aus',
                    'MODE_PASSIVE' => 'Passiv - Zeichne externe Links aus ohne entsprechende CSS-Klassen zu setzen'
                ]
            ]
        ],
        'en' => [
            'PLUGINS' => [
                'EXTERNAL_LINKS' => [
                    'GLOBAL_CONFIG' => 'Global plugin configurations',
                    'DEFAULT_CONFIG' => 'Default values for External Links configuration',
                    'SPECIFIC_CONFIG' => 'Global and page specific configurations',
                    'PLUGIN_STATUS' => 'Plugin status',
                    'BUILTIN_CSS' => 'Use built in CSS',
                    'WEIGHT' => 'Order of execution',
                    'EXCLUDE_CLASSES' => 'Exclude all links with this class',
                    'EXCLUDE_CLASSES_HELP' => 'Comma separated list.',
                    'EXCLUDE_DOMAINS' => 'A list of domains to be excluded (any regular expression can be used)',
                    'EXCLUDE_DOMAINS_HELP' => 'Comma separated list of domains e.g. _localhost/*_.',
                    'PROCESS' => 'Filter external links on the page',
                    'TITLE' => 'Show default title for external links',
                    'TITLE_MESSAGE' => 'This link will take you to an external web site. We are not responsible for their content.',
                    'NO_FOLLOW' => 'Add <code>rel="nofollow"</code> to all external links',
                    'TARGET' => 'Set target attribute of the link.',
                    'TARGET_BLANK' => '_blank | Load in a new window',
                    'TARGET_SELF' => '_self | Load in the same frame as it was clicked',
                    'TARGET_PARENT' => '_parent | Load in the parent frameset',
                    'TARGET_TOP' => '_top | Load in the full body of the window',
                    'MODE' => 'Mode',
                    'MODE_HELP' => 'active = process and parse all links; passive = parse links, but don\'t set CSS classes',
                    'MODE_ACTIVE' => 'Active - Process and parse all links',
                    'MODE_PASSIVE' => 'Passive - Parse links, but don\'t set CSS classes'
                ]
            ]
        ]
    ]
];
