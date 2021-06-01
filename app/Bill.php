<?php
namespace App;

class Bill
{
    public int $id;
    public string $orderDate;
    public string $requiredDate;
    public string $status;
    public string $shippedDate;
    public mixed $comment;
    public string $customer;

    public function __construct($item)
    {
        $this->id = $item['orderNumber'];
        $this->orderDate = $item['orderDate'];
        $this->requiredDate = $item['requiredDate'];
        $this->status = $item['status'];
        $this->shippedDate = $item['shippedDate'];
        $this->comment = $item['comments'];
        $this->customer = $item['customerNumber'];
    }

}