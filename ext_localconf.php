<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Cars',
            'Car',
            [
                \AlexSchoenmann\Cars\Controller\CarController::class => 'list, show, germany'
            ],
            // non-cacheable actions
            [
                \AlexSchoenmann\Cars\Controller\CarController::class => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Cars',
            'Germany',
            [
                \AlexSchoenmann\Cars\Controller\CarController::class => 'germany'
            ],
            // non-cacheable actions
            [
                \AlexSchoenmann\Cars\Controller\CarController::class => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        car {
                            iconIdentifier = cars-plugin-car
                            title = LLL:EXT:cars/Resources/Private/Language/locallang_db.xlf:tx_cars_car.name
                            description = LLL:EXT:cars/Resources/Private/Language/locallang_db.xlf:tx_cars_car.description
                            tt_content_defValues {
                                CType = list
                                list_type = cars_car
                            }
                        }
                        germany {
                            iconIdentifier = cars-plugin-germany
                            title = LLL:EXT:cars/Resources/Private/Language/locallang_db.xlf:tx_cars_germany.name
                            description = LLL:EXT:cars/Resources/Private/Language/locallang_db.xlf:tx_cars_germany.description
                            tt_content_defValues {
                                CType = list
                                list_type = cars_germany
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'cars-plugin-car',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cars/Resources/Public/Icons/user_plugin_car.svg']
			);
		
			$iconRegistry->registerIcon(
				'cars-plugin-germany',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cars/Resources/Public/Icons/user_plugin_germany.svg']
			);
		
    }
);
