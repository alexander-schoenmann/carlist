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
 * Owner
 */
class Owner extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * eMail
     *
     * @var string
     */
    protected $eMail = '';

    /**
     * phoneNumber
     *
     * @var string
     */
    protected $phoneNumber = '';

    /**
     * address
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $address = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the eMail
     *
     * @return string $eMail
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Sets the eMail
     *
     * @param string $eMail
     * @return void
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;
    }

    /**
     * Returns the phoneNumber
     *
     * @return string $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets the phoneNumber
     *
     * @param string $phoneNumber
     * @return void
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
}
