<?php

if(!function_exists("getmxrr")) {
    function getmxrr($hostname, & $hosts, & $weights = false) {
        $hosts = $weights = array();
        
        exec("nslookup -type=mx $hostname", $result);
        
        foreach($result as $line) {
            
            if(preg_match('/mail\s+exchanger\s*=\s*(\S+)/', $line, $pock)) {
                
                $hosts[] = $pock[1];
                
                if(preg_match('/MX\s+preference\s*=\s*(\d+)/', $line, $pock)) {
                    
                    $weights[] = $pock[1];
                    
                } else {
                    
                    $weights[] = 0;
                    
                }
                
            }
            
        }
        
        return count($hosts) > 0;
    }
}

if(!function_exists("dns_get_mx")) {
    function dns_get_mx($hostname, & $hosts, & $weights) {
        return getmxrr($hostname, $hosts, $weights);
    }
}

?>