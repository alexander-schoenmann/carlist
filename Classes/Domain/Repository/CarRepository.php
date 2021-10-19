<?php

declare(strict_types=1);

namespace AlexSchoenmann\Cars\Domain\Repository;

use AlexSchoenmann\Cars\Domain\Model\Dto\Filter;

/**
 * This file is part of the "Car List" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Alex Schoenmann
 */

/**
 * The repository for Cars
 */
class CarRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @param Filter $filter
     */
    public function findGermany(Filter $filter)
    {
        $query = $this->createQuery();
        $constraints = [];
        if ($filter->getCountry()) {
            $constraints[] = $query->equals('brand.country', $filter->getCountry());
        }
        if (!empty($constraints)) {
            $query->matching($query->logicalAnd($constraints));
        }
        return $query->execute();
    }
}
