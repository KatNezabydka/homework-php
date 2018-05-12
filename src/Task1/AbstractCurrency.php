<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

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
