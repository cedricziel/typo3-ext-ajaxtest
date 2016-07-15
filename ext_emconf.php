<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "extension_builder".
 *
 * Auto generated 13-07-2016 22:05
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Ajax Test',
    'description' => '',
    'category' => 'plugin',
    'author' => 'Mr Foobar',
    'author_email' => 'foo@bar.com',
    'state' => 'beta',
    'uploadfolder' => true,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '7.6.0',
    'constraints' =>
        array(
            'depends' =>
                array(
                    'typo3' => '7.6.0-7.6.99',
                ),
            'conflicts' =>
                array(),
            'suggests' =>
                array(
                    'phpunit' => '',
                ),
        ),
    'clearcacheonload' => false,
    'author_company' => null,
    'autoload' => [
        'psr-4' => [
            "CedricZiel\\Ajaxtest\\" => "Classes",
        ],
    ],
);

