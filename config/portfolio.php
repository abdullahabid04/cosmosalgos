<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company
    |--------------------------------------------------------------------------
    | Verified details taken from the Cosmos Algos source material in /Data.
    | Do not add metrics or claims here unless they are supported by that
    | material. The public site uses these values directly.
    */
    'company' => [
        'name' => 'Cosmos Algos',
        'founder' => 'Abdullah Abid',
        'founded' => 'June 2023',
        'tagline' => 'Connected software for real-world systems.',
        'description' => 'Cosmos Algos is a software and embedded engineering company in Bahawalpur, Pakistan. We build IoT platforms, industrial automation software, computer-vision pipelines, and the firmware that connects them.',
        'email' => 'info@cosmosalgos.com',
        'phone' => '+92 332 6334598',
        'phone_href' => '+923326334598',
        'hours' => '8:00 AM – 4:00 PM PKT',
        'location' => 'Bahawalpur, Punjab, Pakistan',
        'linkedin' => 'https://www.linkedin.com/in/abdullahabid04/',
    ],

    /*
    |--------------------------------------------------------------------------
    | Verified statistics
    |--------------------------------------------------------------------------
    | Every number shown on the site should come from this array (or from a
    | counted collection). Do not generate statistics at runtime.
    */
    'stats' => [
        'years_experience' => 5,
        'saas_platforms' => 5,
        'care_platforms' => 4,
        'care_rnd_projects' => 29,
        'industries' => 8,
        'projects' => 20,
        'projects_label' => 'Projects & engagements',
    ],

    'navigation' => [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About', 'route' => 'about'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Projects', 'route' => 'projects'],
        ['label' => 'Technologies', 'route' => 'technologies'],
        ['label' => 'Contact', 'route' => 'contact'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    */
    'placeholders' => [
        'services' => [
            [
                'title' => 'Embedded Systems & Firmware',
                'description' => 'Firmware and device integration for ESP32, STM32, Raspberry Pi, and FPGA platforms — including sensor drivers, serial/USB/wireless protocols, and control logic for test and automation equipment.',
            ],
            [
                'title' => 'Industrial Automation & Test Rigs',
                'description' => 'Desktop and embedded software for data acquisition, hardware control, calibration, automated testing, and production reporting in industrial environments.',
            ],
            [
                'title' => 'IoT Platforms & Cloud Backends',
                'description' => 'Laravel and AWS backends with multi-tenant architecture, real-time telemetry, alerting, role-based access, and secure device APIs.',
            ],
            [
                'title' => 'AI & Computer Vision',
                'description' => 'Practical computer-vision pipelines using Python, OpenCV, Open3D, and Intel RealSense — from RGB-D capture and dataset preparation to inference integrated into a working tool.',
            ],
            [
                'title' => 'Mobile & Desktop Applications',
                'description' => 'Flutter applications for field monitoring and device control, plus PyQt5 desktop tools for instrumentation, signal visualisation, and operator workflows.',
            ],
            [
                'title' => 'SaaS Product Engineering',
                'description' => 'Multi-tenant SaaS modules, subscription billing, OTA firmware updates, time-series aggregation, and API-first architecture for connected products.',
            ],
            [
                'title' => 'Data Acquisition & Visualisation',
                'description' => 'Real-time electrical signal visualisation, battery health monitoring, automated reporting, and tools that turn raw sensor data into usable records.',
            ],
            [
                'title' => 'Research, Prototyping & Upgrades',
                'description' => 'Applied R&D, hardware/software prototyping, and rehabilitation of industrial and defense electronics with modern control and monitoring software.',
            ],
        ],

        /*
        |----------------------------------------------------------------------
        | Projects
        |----------------------------------------------------------------------
        | Selected, documented work. "attribution" makes clear where the work
        | was delivered (Cosmos Algos, CARE Lab, or a research contract) so the
        | company does not claim another organisation's project as its own.
        */
        'projects' => [
            [
                'title' => 'Flock Sense AI',
                'summary' => 'AI extension of the Flock Sense poultry IoT platform: a data-collection and inference pipeline that estimates broiler weight from camera imagery.',
                'attribution' => 'DeepEmbed Research Lab contract',
                'platform' => 'Flock Sense',
                'year' => 2025,
            ],
            [
                'title' => 'Remote VFD Control System',
                'summary' => 'ESP32 MODBUS firmware, Laravel API, and Flutter client for remote monitoring and control of industrial variable-frequency drives.',
                'attribution' => 'Cosmos Algos',
                'year' => 2025,
            ],
            [
                'title' => 'Shell Analyzer',
                'summary' => 'Image-processing desktop system for inspecting shell condition, identifying corrosion type and grade, and producing reports.',
                'attribution' => 'CARE Lab (Pakistan Army Ordnance Corps)',
                'year' => 2024,
            ],
            [
                'title' => 'Primer Analyzer',
                'summary' => 'Software-assisted test and reporting tool for primer samples, covering four electrical tests and one mechanical test.',
                'attribution' => 'CARE Lab (Pakistan Army Ordnance Corps)',
                'year' => 2024,
            ],
            [
                'title' => 'Aircraft Battery Charger & Analyzer Upgrade',
                'summary' => 'Rehabilitation of a Christie aircraft battery charger/analyzer with a Raspberry Pi controller, touch interface, and modern monitoring software.',
                'attribution' => 'CARE Lab (Pakistan Army Ordnance Corps)',
                'year' => 2023,
            ],
            [
                'title' => 'RealSense D435i RGB-D Acquisition Pipeline',
                'summary' => 'Camera capture and streaming pipeline using Intel RealSense, OpenCV, and Open3D for dataset collection and point-cloud generation.',
                'attribution' => 'DeepEmbed Research Lab contract',
                'year' => 2025,
            ],
            [
                'title' => 'Electrical Signal Visualizer',
                'summary' => 'PyQt5 desktop application for real-time electrical signal visualisation, data acquisition, and operator analysis.',
                'attribution' => 'CARE Lab',
                'year' => 2022,
            ],
            [
                'title' => 'Battery Charger Health Monitor',
                'summary' => 'Software for monitoring battery health and automating the charging process, with hardware communication and alerting.',
                'attribution' => 'CARE Lab',
                'year' => 2022,
            ],
            [
                'title' => 'Industrial Equipment Testing Platform',
                'summary' => 'Test automation platform that communicates with industrial hardware, runs test sequences, and visualises results.',
                'attribution' => 'CARE Lab',
                'year' => 2022,
            ],
            [
                'title' => 'VibCare — Vibration Monitoring',
                'summary' => 'Vibration-monitoring platform for industrial equipment, with analysis and alerting.',
                'attribution' => 'CARE Lab platform',
                'year' => 2023,
            ],
            [
                'title' => 'PowerEye — Energy Monitoring',
                'summary' => 'Energy-monitoring platform with dashboards, historical trends, and alerting for connected sites.',
                'attribution' => 'CARE Lab platform',
                'year' => 2023,
            ],
            [
                'title' => 'Sentron — Sensor Monitoring',
                'summary' => 'General-purpose sensor monitoring platform for collecting, visualising, and alerting on device telemetry.',
                'attribution' => 'CARE Lab platform',
                'year' => 2023,
            ],
            [
                'title' => 'SolaCon — Solar VFD Automation',
                'summary' => 'Solar and variable-frequency-drive automation platform for monitoring and controlling energy equipment.',
                'attribution' => 'CARE Lab platform',
                'year' => 2024,
            ],
            [
                'title' => 'Multi-Tenant SaaS Platforms',
                'summary' => 'Backend architecture and modules for five SaaS products: tenant isolation, role-based access, subscriptions, OTA updates, and time-series aggregation.',
                'attribution' => 'Cosmos Algos',
                'year' => 2024,
            ],
            [
                'title' => 'Climate Monitoring APIs',
                'summary' => 'AWS-hosted APIs for collecting temperature and humidity telemetry from distributed devices.',
                'attribution' => 'Cosmos Algos',
                'year' => 2024,
            ],
            [
                'title' => 'Field Device Control Apps',
                'summary' => 'Flutter applications for e-bikes, water dispensers, and home automation with live status and remote control.',
                'attribution' => 'CARE Lab',
                'year' => 2023,
            ],
            [
                'title' => 'OTA Firmware Update System',
                'summary' => 'Over-the-air update flow for connected devices, including version checks, rollout control, and device-side update handling.',
                'attribution' => 'Cosmos Algos SaaS module',
                'year' => 2024,
            ],
            [
                'title' => 'Subscription Billing Integration',
                'summary' => 'Stripe-based subscription flow integrated into a multi-tenant SaaS platform.',
                'attribution' => 'Cosmos Algos SaaS module',
                'year' => 2024,
            ],
            [
                'title' => 'Port Reform SaaS',
                'summary' => 'Fifth SaaS platform contribution, extending the same multi-tenant backend patterns to a new operational domain.',
                'attribution' => 'Cosmos Algos',
                'year' => 2025,
            ],
            [
                'title' => 'Python Test & Data Simulation Tooling',
                'summary' => 'Automation scripts for API testing, bulk data generation, and stress-testing SaaS platforms.',
                'attribution' => 'Cosmos Algos',
                'year' => 2024,
            ],
        ],

        'technologies' => [
            'Laravel', 'PHP', 'Python', 'C++', 'Flutter', 'PyQt5',
            'MySQL', 'AWS', 'REST APIs', 'ESP32', 'STM32', 'Raspberry Pi',
            'FPGA', 'OpenCV', 'Open3D', 'Intel RealSense', 'MQTT', 'Git', 'Linux',
        ],

        // No client testimonials are published because none are documented.
        // The testimonials page shows an honest empty state instead.
        'testimonials' => [],
    ],
];
