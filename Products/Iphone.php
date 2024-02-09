<?php

declare(strict_types=1);

namespace Application\Products;

use Exception;
use PDO;

class Iphone extends Products
{
    private string $tableName = 'iphone';

    /**
     * @inheritDoc
     */
    public function getEntityFromAPI(): void
    {
        $url = 'https://dummyjson.com/products/search?q=iPhone';
        $jsonData = file_get_contents($url);
        $products = json_decode($jsonData, true);

        foreach ($products['products'] as $product) {
            $this->saveIphoneProductToDB($product);
        }
    }

    /**
     * Saves the iPhone product data to the database.
     *
     * @param array $product The product data to be saved.
     *
     * @throws Exception If a record with the same ID already exists in the database.
     *
     * @return void
     */
    private function saveIphoneProductToDB(array $product): void
    {
        if (!empty($this->isProductIdExistsToDB($product['id']))) {
           throw new Exception('An record with this ID exists in the database');
        }

        $stmt = $this->db->prepare(
            'INSERT INTO ' . $this->tableName . ' (id, title, description, price, discountPercentage, rating, 
            stock, brand, category, thumbnail, images) VALUES (:id, :title, :description, :price, :discount, 
            :rating, :stock, :brand, :category, :thumbnail, :images)'
        );
        $stmt->execute([
            'id' => $product['id'],
            'title' => $product['title'],
            'description' => $product['description'],
            'price' => $product['price'],
            'discount' => $product['discountPercentage'],
            'rating' => $product['rating'],
            'stock' => $product['stock'],
            'brand' => $product['brand'],
            'category' => $product['category'],
            'thumbnail' => $product['thumbnail'],
            'images' => json_encode($product['images'])
        ]);
    }

    /**
     * @inheritDoc
     */
    protected function isProductIdExistsToDB(int $productId): bool
    {
        $stmt = $this->db->prepare('SELECT COUNT(*) FROM ' . $this->tableName . ' WHERE id = :id');
        $stmt->execute(['id' => $productId]);
        $count = $stmt->fetchColumn();
        return $count > 0;
    }

    /**
     * @inheritDoc
     */
    public function getAllProductsFromDB(): array
    {
        $stmt = $this->db->query('SELECT * FROM ' . $this->tableName);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
