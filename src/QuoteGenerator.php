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
        if ($index) {
            return $this->quote->getQuotes()[$index];
        }
        return $this->quote->getQuote();
    }
}
