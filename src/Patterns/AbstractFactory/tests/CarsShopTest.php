<?php

namespace tests;

use PhpAlgoDataStructure\Patterns\AbstractFactory\Audi\AudiFactory;
use PhpAlgoDataStructure\Patterns\AbstractFactory\CarsFactoryInterface;
use PhpAlgoDataStructure\Patterns\AbstractFactory\CarsShop;
use PhpAlgoDataStructure\Patterns\AbstractFactory\CoupeInterface;
use PhpAlgoDataStructure\Patterns\AbstractFactory\SedanInterface;
use PhpAlgoDataStructure\Patterns\AbstractFactory\Toyota\ToyotaFactory;
use PHPUnit\Framework\TestCase;

final class CarsShopTest extends TestCase
{
    /**
     * @return void
     */
    public function testStoreCanBeCreated(): void
    {
        $carsShop = new CarsShop();
        $this->assertInstanceOf(CarsShop::class, $carsShop);
    }

    /**
     * @return void
     */
    public function testCanCreateToyotaFactory(): void
    {
        $toyotaFactory = new ToyotaFactory();
        $this->assertInstanceOf(CarsFactoryInterface::class, $toyotaFactory);
    }

    /**
     * @return void
     */
    public function testCanGetToyotaSedan(): void
    {
        $carsShop = new CarsShop();
        $toyotaSedan = $carsShop->getSedan(new ToyotaFactory());
        $this->assertInstanceOf(SedanInterface::class, $toyotaSedan);
    }

    /**
     * @return void
     */
    public function testCanGetToyotaCoupe(): void
    {
        $carsShop = new CarsShop();
        $toyotaCoupe = $carsShop->getCoupe(new ToyotaFactory());
        $this->assertInstanceOf(CoupeInterface::class, $toyotaCoupe);
    }

    /**
     * @return void
     */
    public function testCanGetToyotaSedanName(): void
    {
        $carsShop = new CarsShop();
        $toyotaSedan = $carsShop->getSedan(new ToyotaFactory());
        $this->assertEquals('Toyota Sedan', $toyotaSedan->getSedanName());
    }

    /**
     * @return void
     */
    public function testCanGetToyotaCoupeName(): void
    {
        $carsShop = new CarsShop();
        $toyotaCoupe = $carsShop->getCoupe(new ToyotaFactory());
        $this->assertEquals('Toyota Coupe', $toyotaCoupe->getCoupeName());
    }

    /**
     * @return void
     */
    public function testCanCreateAudiFactory(): void
    {
        $audiFactory = new AudiFactory();
        $this->assertInstanceOf(CarsFactoryInterface::class, $audiFactory);
    }

    /**
     * @return void
     */
    public function testCanGetAudiSedan(): void
    {
        $carsShop = new CarsShop();
        $audiCoupe = $carsShop->getSedan(new AudiFactory());
        $this->assertInstanceOf(SedanInterface::class, $audiCoupe);
    }

    /**
     * @return void
     */
    public function testCanGetAudiCoupe(): void
    {
        $carsShop = new CarsShop();
        $audiSedan = $carsShop->getCoupe(new AudiFactory());
        $this->assertInstanceOf(CoupeInterface::class, $audiSedan);
    }

    /**
     * @return void
     */
    public function testCanGetAudiSedanName(): void
    {
        $carsShop = new CarsShop();
        $audiSedan = $carsShop->getSedan(new AudiFactory());
        $this->assertEquals('Audi Sedan', $audiSedan->getSedanName());
    }

    /**
     * @return void
     */
    public function testCanGetAudiCoupeName(): void
    {
        $carsShop = new CarsShop();
        $audiCoupe = $carsShop->getCoupe(new AudiFactory());
        $this->assertEquals('Audi Coupe', $audiCoupe->getCoupeName());
    }
}