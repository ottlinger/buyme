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

    public function testTimestampGeneration()
    {
        $printer = new HostnamePrinter();
        $this->assertIsString($printer->time());
    }

    public function testMailLinkWithParam()
    {
        $printer = new HostnamePrinter();
        $this->assertStringContainsString('mytestlink', $printer->mailLink('mytestlink'));
    }

    public function testMailLinkWithoutParamAndCompletenessOfLink()
    {
        $_SERVER['SERVER_NAME'] = 'myserver.is';
        $printer = new HostnamePrinter();
        $link = $printer->mailLink();

        $this->assertStringContainsString('myserver.is">myserver.is<', $link);
    }
}
