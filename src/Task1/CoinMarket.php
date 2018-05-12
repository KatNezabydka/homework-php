<?php declare(strict_types=1);
namespace Cryptocurrency\Task1;
include 'Currency.php';

class CoinMarket
{
    private $currencies = [];
    private $maxPrice = [];
    public function addCurrency(Currency $currency): void
    {

        $this->currencies[] = $currency;
    }

    public function maxPrice(): float
    {

        $arrayPrice = [];
        foreach ($this->currencies as $item){
            $arrayPrice[] =$item->getDailyPrice();
        }
        $this->maxPrice = (float) max($arrayPrice);
        return $this->maxPrice;
    }
    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}

