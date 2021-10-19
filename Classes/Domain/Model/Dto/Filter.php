<?php

declare(strict_types=1);

namespace AlexSchoenmann\Cars\Domain\Model\Dto;

class Filter {

    protected int $country = 0;

    /**
     * @return int
     */
    public function getCountry(): int
    {
        return $this->country;
    }

    /**
     * @param int $country
     * @return Filter
     */
    public function setCountry(int $country): Filter
    {
        $this->country = $country;
        return $this;
    }







}
