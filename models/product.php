<?php 
class product
{
    public $name;
    public $brand;
    public $price;
    public $details;
    public $img;

    public function __construct(

        string $name,
        string $brand,
        string $price,
        string $details,
        string $img,
        $category,


    ) {

        $this->name = $name;
        $this->brand = $brand;  
        $this->details = $details;
        $this->img = $img;
        $this->price = $price;
        $this->category = $category;  
        
    }


}