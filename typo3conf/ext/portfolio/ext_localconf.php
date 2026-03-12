<?php

defined('TYPO3') || die();

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'Portfolio',
    'Display',
    [
        \Pacifique\Portfolio\Controller\PortfolioController::class => 'list'
    ]
);
