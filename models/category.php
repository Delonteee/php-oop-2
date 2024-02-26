<?php
require_once __DIR__.'./product.php';

class category {
        public $name;

        public function __construct(
            $name,
        )
        {
            $this->name = $name;
        }
    }


