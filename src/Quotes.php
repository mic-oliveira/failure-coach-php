<?php

namespace Michaelferreira\FailureCoach;

use Exception;
use Michaelferreira\FailureCoach\Interfaces\QuoteInterface;

class Quotes implements QuoteInterface
{
    protected $quotes = [];

    public function setQuotes(array $quotes): Quotes
    {
        $this->quotes = $quotes;
        return $this;
    }

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
