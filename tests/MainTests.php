<?php 
use PHPUnit\Framework\TestCase;

require_once '/src/coolDNSServiceClass.php';

use MiestiechkinApp\coolDNSServiceClass;

class MainTests extends TestCase 
{
    public function testFirstTest() {
        $coolDNSService = new coolDNSServiceClass();
        $this->assertEquals('array', gettype($coolDNSService->getDnsRecords('google.com')));
    }

}


?>