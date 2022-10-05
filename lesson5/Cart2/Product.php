<?php

class Product
{
    private string $title;
    private ?float $price;
    private ?array $components;


    public function __construct(string $title, ?float $price, ?array $components = [])
    {
        $this->title = $title;
        $this->price = $price;
        $this->components = $components;
    }

    public function getPrice(): ?float
    {
        $price = 0;

        /**
         * @var Product $component
         */
        foreach ($this->components as $component) {
            $price += $component->getPrice();
        }
        $this->price += $price;
        return $this->price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }


    public function getComponents(): ?array
    {
        return $this->components;
    }

    public function setComponents(?array $components): void
    {
        $this->components = $components;
        $this->updatePrice();
    }
}