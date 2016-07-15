<?php

// Register Plugin
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'CedricZiel.'.$_EXTKEY,
    'Bling',
    array(
        'Bling' => 'plain,foo,bar',
    ),
    // non-cacheable actions
    array(
        'Bling' => 'plain,foo,bar',
    )
);
