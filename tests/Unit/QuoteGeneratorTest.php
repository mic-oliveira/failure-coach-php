<?php

namespace Unit;

use Michaelferreira\FailureCoach\QuoteGenerator;
use Michaelferreira\FailureCoach\Quotes;
use PHPUnit\Framework\TestCase;

class QuoteGeneratorTest extends TestCase
{
    public function test_generate_random_quote()
    {
        $quote = new QuoteGenerator(new Quotes());
        $this->assertIsString($quote->wisdomQuote());
    }

    public function test_can_get_specific_quote()
    {
        $quote = new QuoteGenerator(new Quotes());
        $this->assertIsString($quote->wisdomQuote(0));
    }

    public function test_should_throw_type_error()
    {
        $quote = new QuoteGenerator(new Quotes());
        $this->expectException(\Error::class);
        $quote->wisdomQuote(999);
    }
}
