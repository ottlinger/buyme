<?php
declare(strict_types=1);

use buyme\HostnamePrinter;
use PHPUnit\Framework\TestCase;

final class HostnamePrinterTest extends TestCase
{
    public function testHostnameExtraction()
    {
        $printer = new HostnamePrinter();
        $this->assertEquals('localhorst', $printer->hostname());
    }
}
