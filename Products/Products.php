<?php

declare(strict_types=1);

namespace Application\Products;

use PDO;
use Application\Entity\EntityInterface;

abstract class Products implements EntityInterface
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Checks if a product with the given ID exists in the database.
     *
     * @param int $productId The ID of the product to check.
     *
     * @return bool
     */
    abstract protected function isProductIdExistsToDB(int $productId): bool;

    /**
     * Gets all products from the database.
     *
     * @return array
     */
    abstract public function getAllProductsFromDB(): array;
}
