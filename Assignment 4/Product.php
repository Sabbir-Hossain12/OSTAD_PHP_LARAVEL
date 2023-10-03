
<?php

class Product
{
  // TODO: Add properties
  //   - id (integer type): the unique identifier of the product
  // - name (string type): the name of the product
  // - price (float type): the price of the product

  private int $id;
  private string $name;
  private float $price;

  public function __construct($id, $name, $price)
  {
    // TODO: Initialize properties
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
  }


  // TODO: Add getFormattedPrice method
  public function getFormattedPrice()
  {
    // string with two decimal places.
    $formattedPrice = number_format($this->price, 2);
    return "$" . $formattedPrice;
  }


  // TODO: Add showDetails method

  public function showDetails()
  {
    echo "ID: " . $this->id . "\n";
    echo "Name: " . $this->name . "\n";
    echo "ID: " . $this->getFormattedPrice() . "\n";
  }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();










// Expected Output:


// Product Details:
// - ID: 1
// - Name: T-shirt
// - Price: $19.99