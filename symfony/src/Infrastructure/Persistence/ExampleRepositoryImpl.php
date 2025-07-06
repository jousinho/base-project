<?php

// src/Infrastructure/Persistence/ExampleRepositoryImpl.php
namespace App\Infrastructure\Persistence;

use App\Domain\Repository\ExampleRepositoryInterface;

class ExampleRepositoryImpl implements ExampleRepositoryInterface
{
    public function save($data): void
    {
        // Lógica de persistencia (ej: Doctrine, API, etc.)
    }
}