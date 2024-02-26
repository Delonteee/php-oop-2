<?php
require_once __DIR__.'./product.php';

class Pets_Bed extends product {
        public $materials = [];
        public $size;

        public function __construct(
            string $name,
            string $brand,
            string $price,
            string $details,
            string $img,
            $category,
            string $materials,
            string $size,
        )
        {
            parent::__construct(
                $name,
                $brand,
                $price,
                $details,
                $img,
                $category,
            );
            $this->materials = $materials;
            $this->size = $size;
        }
    }