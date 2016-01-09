<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/samuelstein/WORK/foggade/website/user/plugins/simplecontact/simplecontact.yaml',
    'modified' => 1445361784,
    'data' => [
        'enabled' => true,
        'subject' => 'New contact from Grav site!',
        'recipient' => 'hello@example.com',
        'fields' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Add your name'
            ],
            'email' => [
                'label' => 'Email',
                'placeholder' => 'Add your email'
            ],
            'message' => [
                'label' => 'Message',
                'placeholder' => 'Add your message'
            ],
            'antispam' => [
                'label' => 'Antispam',
                'placeholder' => 'Please leave this field empty for Antispam'
            ],
            'submit' => [
                'label' => 'Submit'
            ]
        ],
        'messages' => [
            'success' => 'Thank You! Your message has been sent.',
            'error' => 'Oops! There was a problem with your submission. Please complete the form and try again.',
            'fail' => 'Oops! Something went wrong and we couldn\'t send your message.'
        ]
    ]
];
