<?php 
class product
{
    public $name;
    public $brand;
    public $details;
    public $img;
    public $price;

    public function __construct(

        string $name,
        string $brand,
        string $details,
        string $img,
        string $price,

    ) {

        $this->name = $name;
        $this->brand = $brand;
        $this->details = $details;
        $this->img = $img;
        $this->price = $price;
        
    }


}