<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

include 'Currency.php';

class CoinMarket
{
    private $currency;
    private $currencies = [];
    private $maxPrice = [];
    public function addCurrency(Currency $currency): void
    {

        $this->currency[$currency->getName()]['name'] = $currency->getName();
        $this->currency[$currency->getName()]['logo'] = $currency->getLogoUrl();
        $this->currency[$currency->getName()]['dayPrice'] = $currency->getDailyPrice();
     }

    public function maxPrice(): float
    {
        $arrayPrice = [];
        foreach ($this->currency as $key => $value){

            $arrayPrice[] =$value['dayPrice'];

                }

       $this->maxPrice = (float) max($arrayPrice);

        return $this->maxPrice;

    }

    public function getCurrencies(): array
    {
        foreach ($this->currency as $key => $value){
            $this->currencies[$key] = $value ;
        }
        return $this->currencies;
    }
}


