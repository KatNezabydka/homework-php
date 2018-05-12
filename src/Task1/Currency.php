<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;


interface Currency
{
    public function getName(): string;

    public function getDailyPrice(): float;

    public function getLogoUrl(): string;
}

abstract class AbstractCurrency implements Currency
{
    /**
     * @var string
     */
    protected $name = '';
    /**
     * @var string
     */
    protected $logo_url = '';
    /**
     * @var float
     */
    protected $daily_price = 0;

    public function __construct($price) {
        $this->daily_price = $price;
    }

    public function getName() : string  {
        return $this->name;
    }
    public function getDailyPrice(): float {
        return $this->daily_price;
    }
    public function getLogoUrl(): string {
        return $this->logo_url;
    }
}


class Bitcoin extends AbstractCurrency
{
    protected $name = 'Bitcoin';
    protected $logo_url = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1.png';
}

class Ethereum extends AbstractCurrency
{
    protected $name = 'Ethereum';
    protected $logo_url = 'https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png';

}

class Dogecoin extends AbstractCurrency
{
    protected $name = 'Dogecoin';
    protected $logo_url = 'https://s2.coinmarketcap.com/static/img/coins/32x32/74.png';
}
