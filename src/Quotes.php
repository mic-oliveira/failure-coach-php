<?php

namespace Michaelferreira\FailureCoach;

use Exception;
use Michaelferreira\FailureCoach\Interfaces\QuoteInterface;

class Quotes implements QuoteInterface
{
    private $quotes = [
        "Nunca foi azar, sempre foi incompetência.",
        "A maior motivação é o desespero.",
        "Você é o maior problema das suas soluções."
    ];

    /**
     * @throws Exception
     */
    public function getQuote(): string
    {
        return $this->quotes[random_int(0, count($this->quotes) - 1)];
    }

    public function getQuotes(): array
    {
        return $this->quotes;
    }
}
