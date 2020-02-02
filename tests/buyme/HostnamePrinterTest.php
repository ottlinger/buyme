<?php
declare(strict_types=1);

use buyme\HostnamePrinter;
use PHPUnit\Framework\TestCase;

final class HostnamePrinterTest extends TestCase
{
    public function testFirstMethodCall()
    {
        $printer = new HostnamePrinter();
        $this->assertEquals('Hi', $printer->print());
    }
}
