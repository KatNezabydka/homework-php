<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    private $emoji = ['🚀', '🚃', '🚄', '🚅', '🚇'];
    public function generate(): \Generator
    {
       foreach ($this->emoji as $item){
           yield $item;
       }
    }
}
