<?php
declare(strict_types=1);

namespace AlexSchoenmann\Cars\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Alex Schoenmann 
 */
class CarControllerTest extends UnitTestCase
{
    /**
     * @var \AlexSchoenmann\Cars\Controller\CarController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\AlexSchoenmann\Cars\Controller\CarController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCarsFromRepositoryAndAssignsThemToView()
    {
        $allCars = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $carRepository = $this->getMockBuilder(\AlexSchoenmann\Cars\Domain\Repository\CarRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $carRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCars));
        $this->inject($this->subject, 'carRepository', $carRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('cars', $allCars);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCarToView()
    {
        $car = new \AlexSchoenmann\Cars\Domain\Model\Car();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('car', $car);

        $this->subject->showAction($car);
    }
}
