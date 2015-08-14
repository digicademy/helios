<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// TYPOSCRIPT
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('helios', 'Configuration/TypoScript/', 'Helios Website Package');
?>