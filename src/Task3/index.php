<?php

require __DIR__ . '/../../vendor/autoload.php';

use Cryptocurrency\Task1\CoinMarket;
use Cryptocurrency\Task1\Bitcoin;
use Cryptocurrency\Task1\Dogecoin;
use Cryptocurrency\Task1\Ethereum;
use Cryptocurrency\Task3\MarketHtmlPresenter;

// Fill in your market with currencies and use your presenter to show data here:
$market = new CoinMarket();
$market->addCurrency(new Bitcoin(700));
$market->addCurrency(new Ethereum(800));
$market->addCurrency(new Dogecoin(900));
$marketPresenter = new MarketHtmlPresenter();
$presentation = unserialize($marketPresenter->present($market));


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in Web Server</title>
</head>
<body>
<?php foreach ($presentation[0] as $present): ?>
 <h1><img src="<?php echo $present->getLogoUrl() ?>" alt=""><?php echo $present->getName() ?></h1>
    <p>Price <?php echo $present->getName()?> today - <?php echo $present->getDailyPrice() ?></p>
<?php endforeach; ?>
<h2>Max price today is - <?php echo $presentation[1]?></h2>
</body>
</html>