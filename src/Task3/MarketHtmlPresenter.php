<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\Bitcoin;
use Cryptocurrency\Task1\CoinMarket;
use Cryptocurrency\Task1\Dogecoin;
use Cryptocurrency\Task1\Ethereum;

class MarketHtmlPresenter
{


    public function present(CoinMarket $market): string
    {

        $market->maxPrice();
        $market->getCurrencies();
        return serialize($market);
    }
}