<?php

// src/Domain/Repository/ExampleRepositoryInterface.php
namespace App\Domain\Repository;

interface ExampleRepositoryInterface
{
    public function save($data): void;
}