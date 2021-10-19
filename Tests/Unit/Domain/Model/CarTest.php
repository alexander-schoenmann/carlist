<?php
declare(strict_types=1);

namespace AlexSchoenmann\Cars\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Alex Schoenmann 
 */
class CarTest extends UnitTestCase
{
    /**
     * @var \AlexSchoenmann\Cars\Domain\Model\Car
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AlexSchoenmann\Cars\Domain\Model\Car();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getModelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getModel()
        );
    }

    /**
     * @test
     */
    public function setModelForStringSetsModel()
    {
        $this->subject->setModel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'model',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getVariantReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getVariant()
        );
    }

    /**
     * @test
     */
    public function setVariantForStringSetsVariant()
    {
        $this->subject->setVariant('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'variant',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForStringSetsType()
    {
        $this->subject->setType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'type',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getConstructionYearReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getConstructionYear()
        );
    }

    /**
     * @test
     */
    public function setConstructionYearForIntSetsConstructionYear()
    {
        $this->subject->setConstructionYear(12);

        self::assertAttributeEquals(
            12,
            'constructionYear',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHorsepowerReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getHorsepower()
        );
    }

    /**
     * @test
     */
    public function setHorsepowerForIntSetsHorsepower()
    {
        $this->subject->setHorsepower(12);

        self::assertAttributeEquals(
            12,
            'horsepower',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFuelReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFuel()
        );
    }

    /**
     * @test
     */
    public function setFuelForStringSetsFuel()
    {
        $this->subject->setFuel('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'fuel',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getKilometreReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getKilometre()
        );
    }

    /**
     * @test
     */
    public function setKilometreForIntSetsKilometre()
    {
        $this->subject->setKilometre(12);

        self::assertAttributeEquals(
            12,
            'kilometre',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForStringSetsPrice()
    {
        $this->subject->setPrice('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'price',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPropulsionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPropulsion()
        );
    }

    /**
     * @test
     */
    public function setPropulsionForStringSetsPropulsion()
    {
        $this->subject->setPropulsion('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'propulsion',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTransmissionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTransmission()
        );
    }

    /**
     * @test
     */
    public function setTransmissionForStringSetsTransmission()
    {
        $this->subject->setTransmission('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'transmission',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTeaserImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getTeaserImage()
        );
    }

    /**
     * @test
     */
    public function setTeaserImageForFileReferenceSetsTeaserImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setTeaserImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'teaserImage',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGalleryReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGallery()
        );
    }

    /**
     * @test
     */
    public function setGalleryForFileReferenceSetsGallery()
    {
        $gallery = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneGallery = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGallery->attach($gallery);
        $this->subject->setGallery($objectStorageHoldingExactlyOneGallery);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGallery,
            'gallery',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addGalleryToObjectStorageHoldingGallery()
    {
        $gallery = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $galleryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $galleryObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($gallery));
        $this->inject($this->subject, 'gallery', $galleryObjectStorageMock);

        $this->subject->addGallery($gallery);
    }

    /**
     * @test
     */
    public function removeGalleryFromObjectStorageHoldingGallery()
    {
        $gallery = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $galleryObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $galleryObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($gallery));
        $this->inject($this->subject, 'gallery', $galleryObjectStorageMock);

        $this->subject->removeGallery($gallery);
    }

    /**
     * @test
     */
    public function getBrandReturnsInitialValueForBrand()
    {
        self::assertEquals(
            null,
            $this->subject->getBrand()
        );
    }

    /**
     * @test
     */
    public function setBrandForBrandSetsBrand()
    {
        $brandFixture = new \AlexSchoenmann\Cars\Domain\Model\Brand();
        $this->subject->setBrand($brandFixture);

        self::assertAttributeEquals(
            $brandFixture,
            'brand',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOwnerReturnsInitialValueForOwner()
    {
        self::assertEquals(
            null,
            $this->subject->getOwner()
        );
    }

    /**
     * @test
     */
    public function setOwnerForOwnerSetsOwner()
    {
        $ownerFixture = new \AlexSchoenmann\Cars\Domain\Model\Owner();
        $this->subject->setOwner($ownerFixture);

        self::assertAttributeEquals(
            $ownerFixture,
            'owner',
            $this->subject
        );
    }
}
