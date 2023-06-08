<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

$base_path = ""; // insert your base path to the Laravel app here

require_once $base_path.'vendor/miestiechkin-app/miestiechkin-app/src/coolDNSServiceClass.php';

use MiestiechkinApp\coolDNSServiceClass;

class MainTest extends TestCase
{
    public function testFirstTest(): void {
        $coolDNSService = new coolDNSServiceClass();
        $this->assertEquals('array', gettype($coolDNSService->getDnsRecords('google.com'))); // check if the method returns array
    }
}