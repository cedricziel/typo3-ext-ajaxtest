<?php

// Register Plugin Bling
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

// Register Plugin Blang
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'CedricZiel.'.$_EXTKEY,
    'Blang',
    array(
        'Blang' => 'plain,foo,bar',
    ),
    // non-cacheable actions
    array(
        'Blang' => 'plain,foo,bar',
    )
);
