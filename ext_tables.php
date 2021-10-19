<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cars_domain_model_country', 'EXT:cars/Resources/Private/Language/locallang_csh_tx_cars_domain_model_country.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cars_domain_model_country');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cars_domain_model_brand', 'EXT:cars/Resources/Private/Language/locallang_csh_tx_cars_domain_model_brand.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cars_domain_model_brand');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cars_domain_model_owner', 'EXT:cars/Resources/Private/Language/locallang_csh_tx_cars_domain_model_owner.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cars_domain_model_owner');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cars_domain_model_car', 'EXT:cars/Resources/Private/Language/locallang_csh_tx_cars_domain_model_car.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cars_domain_model_car');
});
