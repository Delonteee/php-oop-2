<?php
require_once __DIR__.'./product.php';

class categories extends product {
        public $expirationDate;
        public $expired = false;
        public $composition;
        public $allergies;
        public $weight;

        public function __construct
        (
            string $name,
            string $brand,
            string $price,
            string $details,
            string $img,
            
            string $expirationDate,
            string $composition,
            string $allergies,
            int $weight,
        )
        {
            parent::__construct(
                $name,
                $brand,
                $price,
                $details,
                $img,
                
            );
            $this->expirationDate = $expirationDate;

            $this->expiredFnc($expirationDate);

            $this->composition = $composition;
            $this->allergies = $allergies;
            $this->weight = $weight;
        }

        public function expiredFnc($expirationDate) {
            $currentDate = date('Y-m-d');
            if ($expirationDate < $currentDate) {
                $this->expired = true;
            }else{
                $this->expired = false;
            }
        }
    }
