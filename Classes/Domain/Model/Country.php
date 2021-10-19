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
 * Country
 */
class Country extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * flag
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $flag = null;

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the flag
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $flag
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Sets the flag
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $flag
     * @return void
     */
    public function setFlag(\TYPO3\CMS\Extbase\Domain\Model\FileReference $flag)
    {
        $this->flag = $flag;
    }
}
