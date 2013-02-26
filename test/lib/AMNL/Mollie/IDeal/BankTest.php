<?php

namespace AMNL\Mollie\IDeal;

/**
 * @author Arno Moonen <info@arnom.nl>
 */
class BankTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {

    }

    /**
     * @covers AMNL\Mollie\IDeal\Bank::getId
     * @todo   Implement testGetId().
     */
    public function testGetId()
    {
        $bank = new Bank(12, 'test');
        $expected = '0012';
        $this->assertEquals($expected, $bank->getId());
    }

    /**
     * @covers AMNL\Mollie\IDeal\Bank::getId
     * @todo   Implement testGetId().
     */
    public function testGetIdFail()
    {
        $expected = 'abcd';
        $bank = new Bank($expected, 'test');
        $this->assertNotEquals($expected, $bank->getId());
    }

    /**
     * @covers AMNL\Mollie\IDeal\Bank::getName
     * @todo   Implement testGetName().
     */
    public function testGetName()
    {
        $expected = 'Bank';
        $bank = new Bank(1, $expected);
        $this->assertEquals($expected, $bank->getName());
    }

}
