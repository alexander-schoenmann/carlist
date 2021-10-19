<?php

declare(strict_types=1);

namespace AlexSchoenmann\Cars\Domain\Model;


/**
 * This file is part of the "Car List" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Alex Schoenmann
 */

/**
 * Car
 */
class Car extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * test
     *
     * @var string
     */
    protected $test = '';

    /**
     * zB: A4
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $model = '';

    /**
     * zB: B8
     *
     * @var string
     */
    protected $variant = '';

    /**
     * zB: Kombi
     *
     * @var string
     */
    protected $type = '';

    /**
     * constructionYear
     *
     * @var int
     */
    protected $constructionYear = 0;

    /**
     * horsepower
     *
     * @var int
     */
    protected $horsepower = 0;

    /**
     * fuel
     *
     * @var string
     */
    protected $fuel = '';

    /**
     * kilometre
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $kilometre = 0;

    /**
     * price
     *
     * @var string
     */
    protected $price = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * zB: Vorderrad
     *
     * @var string
     */
    protected $propulsion = '';

    /**
     * zB: 6-Gang Schaltgetriebe
     *
     * @var string
     */
    protected $transmission = '';

    /**
     * teaserImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $teaserImage = null;

    /**
     * gallery
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $gallery = null;

    /**
     * brand
     *
     * @var \AlexSchoenmann\Cars\Domain\Model\Brand
     */
    protected $brand = null;

    /**
     * owner
     *
     * @var \AlexSchoenmann\Cars\Domain\Model\Owner
     */
    protected $owner = null;

    /**
     * Returns the model
     *
     * @return string $model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets the model
     *
     * @param string $model
     * @return void
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Returns the variant
     *
     * @return string $variant
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * Sets the variant
     *
     * @param string $variant
     * @return void
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }

    /**
     * Returns the type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param string $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the brand
     *
     * @return \AlexSchoenmann\Cars\Domain\Model\Brand $brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets the brand
     *
     * @param \AlexSchoenmann\Cars\Domain\Model\Brand $brand
     * @return void
     */
    public function setBrand(\AlexSchoenmann\Cars\Domain\Model\Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Returns the owner
     *
     * @return \AlexSchoenmann\Cars\Domain\Model\Owner $owner
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets the owner
     *
     * @param \AlexSchoenmann\Cars\Domain\Model\Owner $owner
     * @return void
     */
    public function setOwner(\AlexSchoenmann\Cars\Domain\Model\Owner $owner)
    {
        $this->owner = $owner;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->gallery = $this->gallery ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the constructionYear
     *
     * @return int $constructionYear
     */
    public function getConstructionYear()
    {
        return $this->constructionYear;
    }

    /**
     * Sets the constructionYear
     *
     * @param int $constructionYear
     * @return void
     */
    public function setConstructionYear($constructionYear)
    {
        $this->constructionYear = $constructionYear;
    }

    /**
     * Returns the horsepower
     *
     * @return int $horsepower
     */
    public function getHorsepower()
    {
        return $this->horsepower;
    }

    /**
     * Sets the horsepower
     *
     * @param int $horsepower
     * @return void
     */
    public function setHorsepower($horsepower)
    {
        $this->horsepower = $horsepower;
    }

    /**
     * Returns the fuel
     *
     * @return string $fuel
     */
    public function getFuel()
    {
        return $this->fuel;
    }

    /**
     * Sets the fuel
     *
     * @param string $fuel
     * @return void
     */
    public function setFuel($fuel)
    {
        $this->fuel = $fuel;
    }

    /**
     * Returns the price
     *
     * @return string $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     *
     * @param string $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the propulsion
     *
     * @return string $propulsion
     */
    public function getPropulsion()
    {
        return $this->propulsion;
    }

    /**
     * Sets the propulsion
     *
     * @param string $propulsion
     * @return void
     */
    public function setPropulsion($propulsion)
    {
        $this->propulsion = $propulsion;
    }

    /**
     * Returns the transmission
     *
     * @return string $transmission
     */
    public function getTransmission()
    {
        return $this->transmission;
    }

    /**
     * Sets the transmission
     *
     * @param string $transmission
     * @return void
     */
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
    }

    /**
     * Returns the teaserImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserImage
     */
    public function getTeaserImage()
    {
        return $this->teaserImage;
    }

    /**
     * Sets the teaserImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserImage
     * @return void
     */
    public function setTeaserImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $teaserImage)
    {
        $this->teaserImage = $teaserImage;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $gallery
     * @return void
     */
    public function addGallery(\TYPO3\CMS\Extbase\Domain\Model\FileReference $gallery)
    {
        $this->gallery->attach($gallery);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $galleryToRemove The FileReference to be removed
     * @return void
     */
    public function removeGallery(\TYPO3\CMS\Extbase\Domain\Model\FileReference $galleryToRemove)
    {
        $this->gallery->detach($galleryToRemove);
    }

    /**
     * Returns the gallery
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $gallery
     */
    public function getGallery()
    {
        return $this->gallery;
    }

    /**
     * Sets the gallery
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $gallery
     * @return void
     */
    public function setGallery(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $gallery)
    {
        $this->gallery = $gallery;
    }

    /**
     * Returns the kilometre
     *
     * @return int $kilometre
     */
    public function getKilometre()
    {
        return $this->kilometre;
    }

    /**
     * Sets the kilometre
     *
     * @param int $kilometre
     * @return void
     */
    public function setKilometre($kilometre)
    {
        $this->kilometre = $kilometre;
    }

    /**
     * Returns the test
     *
     * @return string $test
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Sets the test
     *
     * @param string $test
     * @return void
     */
    public function setTest($test)
    {
        $this->test = $test;
    }
}
