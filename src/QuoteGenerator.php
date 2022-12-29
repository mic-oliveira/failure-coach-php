<?php

namespace Michaelferreira\FailureCoach;

use Michaelferreira\FailureCoach\Interfaces\QuoteInterface;

class QuoteGenerator
{
    private $quote;
    public function __construct(QuoteInterface $quote)
    {
        $this->quote = $quote;
    }

    public function wisdomQuote(int $index = null): string
    {
        if (is_null($index)) {
            return $this->quote->getQuote();
        }
        return $this->quote->getQuotes()[$index];
    }
}
