<?php 

namespace MiestiechkinApp;

class coolDNSServiceClass
{
    public function getDnsRecords($domain_name) {
        $AllDNSRecords = dns_get_record($domain_name, DNS_ALL);
        return $AllDNSRecords;
    }
}

/* $coolDNSService = new coolDNSService();
print_r($coolDNSService->getDnsRecords('google.com')); */

?>