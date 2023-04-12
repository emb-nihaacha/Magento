<?php
namespace Embitel\Mymodule\Api;
/**
 * @api
 */
interface StaticInterface
{
    /**
     * Get name
     *
     * @return string     
     */
    public function getProfile();


     /**
     * Create category
     *
     * @param string[] $customerInfo 
     * @return array    
     */
    public function setCustomerGroup($customerInfo);
}



