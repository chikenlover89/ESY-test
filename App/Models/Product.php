<?php

namespace App\Models;

class Product
{
    public string $name;
    public string $amount;
    public string $unitPrice;
    public ?int $id;

    public function __construct(
        string $name,
        string $amount,
        string $unitPrice,
        ?int $id
    )
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->unitPrice = $unitPrice;
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function getUnitPrice(): string
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(string $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}