<?php

declare(strict_types=1);

namespace Application\Entity;

interface EntityInterface
{

    /**
     * This method sends a request to a remote API to fetch data.
     *
     * @return void
     */
    public function getEntityFromAPI(): void;
}