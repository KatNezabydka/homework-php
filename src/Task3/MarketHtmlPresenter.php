<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    private $presentation = [];
    public function present(CoinMarket $market): string
    {
        $this->presentation[] = $market->getCurrencies();
        $this->presentation[] =  $market->maxPrice();
        return serialize($this->presentation);
    }
}