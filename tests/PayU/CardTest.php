<?php

namespace PayU;

use PHPUnit_Framework_TestCase;

require_once __DIR__ . '/../../vendor/autoload.php';


class CardTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {

    }

    public function testCardSuccess()
    {
        $card = new Card('4111111111111111', '12', '2019', 'Owner Name');

        $this->assertEquals('4111111111111111', $card->getCardNumber());
        $this->assertEquals('12', $card->getExpirationMonth());
        $this->assertEquals('2019', $card->getExpirationYear());
        $this->assertEquals('Owner Name', $card->getOwnerName());
    }
}