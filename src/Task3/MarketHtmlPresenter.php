<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    private $presentation = [];
    public function present(CoinMarket $market): string
    {
        $presentation[] = $market->getCurrencies();
        $presentation[] =  $market->maxPrice();
        return serialize($presentation);
    }
}