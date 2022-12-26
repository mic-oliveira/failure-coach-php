<?php

namespace Michaelferreira\FailureCoach\Interfaces;

interface QuoteInterface
{
    public function getQuote(): string;

    public function getQuotes(): array;
}
