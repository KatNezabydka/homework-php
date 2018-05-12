<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;
use Cryptocurrency\Task1\CoinMarket;
class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $html = '<div>';
        foreach ($market->getCurrencies() as $currency) {
            $html .= '<h1><img src="' . $currency->getLogoUrl() . '">'.$currency->getName().': '.$currency->getDailyPrice().'</h1>';
        }
        $html .= '</div>';
        
        return $html;
    }
}
