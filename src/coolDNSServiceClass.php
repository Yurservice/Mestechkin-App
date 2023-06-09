<?php 

namespace MiestiechkinApp;

class coolDNSServiceClass
{
    public function getDnsRecords(string $domain_name): array {
        $AllDNSRecords = dns_get_record($domain_name, DNS_ALL);
        return $AllDNSRecords;
    }
}

?>