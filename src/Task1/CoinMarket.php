<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

include 'Currency.php';
//
$bitcoin = new Bitcoin(100.5);

$ethereum = new Ethereum(1023.8);

$dogecoin = new Dogecoin(2085.6);


class CoinMarket
{
    private $currency;
    private $currencies = [];
    private $maxPrice = [];
    public function addCurrency(Currency $currency1): void
    {

        $this->currency[$currency1->getName()]['name'] = $currency1->getName();
        $this->currency[$currency1->getName()]['logo'] = $currency1->getLogoUrl();
        $this->currency[$currency1->getName()]['dayPrice'] = $currency1->getDailyPrice();
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
            $this->currencies[] = $key ;
        }
        return $this->currencies;
    }
}

//$money = new CoinMarket();
//$money->addCurrency($bitcoin);
//$money->addCurrency($ethereum);
//$money->addCurrency($dogecoin);


