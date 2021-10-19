<?php
declare(strict_types=1);

namespace AlexSchoenmann\Cars\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Alex Schoenmann 
 */
class CountryTest extends UnitTestCase
{
    /**
     * @var \AlexSchoenmann\Cars\Domain\Model\Country
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \AlexSchoenmann\Cars\Domain\Model\Country();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFlagReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getFlag()
        );
    }

    /**
     * @test
     */
    public function setFlagForFileReferenceSetsFlag()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setFlag($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'flag',
            $this->subject
        );
    }
}
