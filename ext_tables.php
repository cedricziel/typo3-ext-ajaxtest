<?php

// Register Plugin ..
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'CedricZiel.'.$_EXTKEY,
    'Bling',
    'Bling: Bling'
);

// Register Plugin ..
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'CedricZiel.'.$_EXTKEY,
    'Blang',
    'Bling: Blang'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Bling, Bling!'
);
