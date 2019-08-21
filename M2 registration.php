#parse("M2 PHP File Header.php")
#set( $vendor = ${Vendor} )
#if($vendor == "")
    #set( $vendor = $defaultVendorName )
#end
<?php declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::MODULE,'${vendor}_${Module_Name}',__DIR__);
