<?php

declare(strict_types=1);

namespace AlexSchoenmann\Cars\Controller;

use AlexSchoenmann\Cars\Domain\Model\Dto\Filter;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

/**
 * This file is part of the "Car List" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Alex Schoenmann
 */

/**
 * CarController
 */
class CarController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * carRepository
     *
     * @var \AlexSchoenmann\Cars\Domain\Repository\CarRepository
     */
    protected $carRepository = null;

    /**
     * @param \AlexSchoenmann\Cars\Domain\Repository\CarRepository $carRepository
     */
    public function injectCarRepository(\AlexSchoenmann\Cars\Domain\Repository\CarRepository $carRepository)
    {
        $this->carRepository = $carRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $cars = $this->carRepository->findAll();
        $this->view->assign('cars', $cars);
    }

    /**
     * action show
     *
     * @param \AlexSchoenmann\Cars\Domain\Model\Car $car
     * @return string|object|null|void
     */
    public function showAction(\AlexSchoenmann\Cars\Domain\Model\Car $car)
    {
        $this->view->assign('car', $car);

        /** @var ExtensionConfiguration $extensionConfiguration **/
        $extensionConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class);
        try {
            $this->view->assign('googleMapsKey', $extensionConfiguration->get('cars', 'googleMapsKey'));
        } catch (\Exception $e) {

            //do nothing
        }
    }

    /**
     * action germany
     *
     * @return string|object|null|void
     */
    public function germanyAction()
    {
        $filter = $this->getFilter();
        $this->view->assign('filter', $filter);
        $cars = $this->carRepository->findGermany($filter);
        $this->view->assign('cars', $cars);

        /** @var ExtensionConfiguration $extensionConfiguration **/
        $extensionConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class);
        try {
            $this->view->assign('googleMapsKey', $extensionConfiguration->get('cars', 'googleMapsKey'));
        } catch (\Exception $e) {

            //do nothing
        }
    }
    protected function getFilter()
    {
        $filter = new Filter();
        $filter->setCountry((int) $this->settings['country']);
        return $filter;
    }
}
