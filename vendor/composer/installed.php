<?php return array(
    'root' => array(
        'name' => 'wpengine/composer-test.dev',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'fd35db8f53b85f2876b69db35a429ab7f824d63e',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v2.2.0',
            'version' => '2.2.0.0',
            'reference' => 'c29dc4b93137acb82734f672c37e029dfbd95b35',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpackagist-plugin/advanced-custom-fields' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '6.2.4',
            ),
        ),
        'wpengine/advanced-custom-fields-pro' => array(
            'pretty_version' => '6.2.4',
            'version' => '6.2.4.0',
            'reference' => NULL,
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../wp-content/plugins/advanced-custom-fields-pro',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wpengine/composer-test.dev' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'fd35db8f53b85f2876b69db35a429ab7f824d63e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
