<?php

// Register Plugin ..
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'CedricZiel.'.$_EXTKEY,
    'Bling',
    'Bling: Bling'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    $_EXTKEY,
    'Configuration/TypoScript',
    'Bling, Bling!'
);
