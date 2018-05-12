<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

use CryptocurrencyTests\Task1\CurrenciesTest;

interface Currency
{
    public function getName(): string;

    public function getDailyPrice(): float;

    public function getLogoUrl(): string;
}


class Bitcoin implements Currency
{
    private $Name = 'Bitcoin';
    private $LogoUrl = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
    private $DailyPrice;

    public function __construct(float $price)
    {
        $this->DailyPrice = $price;
    }

    public function getName(): string
    {
        return $this->Name;
    }


    public function getLogoUrl(): string
    {
        return $this->LogoUrl;
    }

    public function getDailyPrice(): float
    {
        return $this->DailyPrice;

    }

}

class Ethereum implements Currency
{
    private $Name = 'Ethereum';
    private $LogoUrl = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png';
    private $DailyPrice;

    public function __construct(float $price)
    {
        $this->DailyPrice = $price;
    }

    public function getName(): string
    {
        return $this->Name;
    }


    public function getLogoUrl(): string
    {
        return $this->LogoUrl;
    }

    public function getDailyPrice(): float
    {
        return $this->DailyPrice;

    }

}

class Dogecoin implements Currency
{
    private $Name = 'Dogecoin';
    private $LogoUrl = 'https://s2.coinmarketcap.com/static/img/coins/32x32/74.png';
    private $DailyPrice;

    public function __construct(float $price)
    {
        $this->DailyPrice = $price;
    }

    public function getName(): string
    {
        return $this->Name;
    }


    public function getLogoUrl(): string
    {
        return $this->LogoUrl;
    }

    public function getDailyPrice(): float
    {
        return $this->DailyPrice;
    }
}


