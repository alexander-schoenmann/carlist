<?php
declare(strict_types=1);

namespace AlexSchoenmann\Cars\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Alex Schoenmann 
 */
class OwnerTest extends UnitTestCase
{
    /**
     * @var \AlexSchoenmann\Cars\Domain\Model\Owner
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AlexSchoenmann\Cars\Domain\Model\Owner();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEMailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEMail()
        );
    }

    /**
     * @test
     */
    public function setEMailForStringSetsEMail()
    {
        $this->subject->setEMail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'eMail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhoneNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhoneNumber()
        );
    }

    /**
     * @test
     */
    public function setPhoneNumberForStringSetsPhoneNumber()
    {
        $this->subject->setPhoneNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phoneNumber',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAddressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAddress()
        );
    }

    /**
     * @test
     */
    public function setAddressForStringSetsAddress()
    {
        $this->subject->setAddress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'address',
            $this->subject
        );
    }
}
