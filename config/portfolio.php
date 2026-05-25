<?php

return [
    'company' => [
        'name' => 'Cosmos Algos',
        'tagline' => 'Building intelligent software systems for real-world impact.',
        'description' => 'Cosmos Algos is a technology company focused on scalable software, data-centric architecture, and practical innovation across web, cloud, and automation domains.',
        'email' => 'contact@cosmosalgos.com', // TODO: Replace with official support email.
        'location' => 'Bahawalpur, Pakistan',
    ],

    'navigation' => [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Projects', 'route' => 'projects'],
        ['label' => 'Technologies', 'route' => 'technologies'],
        ['label' => 'Contact', 'route' => 'contact'],
    ],

    'placeholders' => [
        'services' => [
            [
                'title' => 'Custom Software Engineering',
                'description' => 'Design and delivery of reliable applications tailored to business workflows and growth targets.',
            ],
            [
                'title' => 'Data & Intelligence Solutions',
                'description' => 'Applied analytics pipelines and decision support systems for operational visibility and strategy.',
            ],
            [
                'title' => 'Digital Transformation Delivery',
                'description' => 'Platform modernization and architecture consulting for scalable, maintainable technology stacks.',
            ],
        ],
        'projects' => [
            ['title' => 'Project Placeholder A', 'summary' => 'Case study content will be connected once final portfolio assets are approved.'],
            ['title' => 'Project Placeholder B', 'summary' => 'Reserved for a production project timeline and measurable business outcomes.'],
            ['title' => 'Project Placeholder C', 'summary' => 'Reserved for a technical innovation showcase with architecture highlights.'],
        ],
        'technologies' => ['Laravel', 'PHP', 'Python', 'Flutter', 'MySQL', 'AWS', 'ESP32', 'OpenCV'],
        'testimonials' => [
            ['quote' => 'Cosmos Algos helped us move from idea to execution with clear technical leadership.', 'author' => 'Client Placeholder'],
            ['quote' => 'Their architecture-first mindset improved our product reliability and delivery speed.', 'author' => 'Partner Placeholder'],
        ],
    ],
];
