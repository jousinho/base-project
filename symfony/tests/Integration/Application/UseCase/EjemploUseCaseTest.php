<?php 
namespace App\Tests\Integration\Application\UseCase;

use App\Application\UseCase\EjemploUseCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class EjemploUseCaseTest extends KernelTestCase
{
    public function test_example_use_case(): void
    {
        self::bootKernel();

        $container = static::getContainer();

        $ejemploUseCase = $container->get(EjemploUseCase::class);
        $result = $ejemploUseCase->execute('input');

        $this->assertEquals('input', $result);
    }
}