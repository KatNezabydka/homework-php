<?php declare(strict_types=1);

namespace Cryptocurrency\Task2;

class EmojiGenerator
{
    private $emoji = [
        "\u{1f680}",
        "\u{1f683}",
        "\u{1f684}",
        "\u{1f685}",
        "\u{1f687}"
    ];
    public function generate(): \Generator
    {
       foreach ($this->emoji as $item){
           yield $item;
       }
    }
}
