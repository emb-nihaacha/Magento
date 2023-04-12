<?php

namespace Embitel\Mymodule\Model;
use Magento\Customer\Model\GroupFactory;


class StaticService implements \Embitel\Mymodule\Api\StaticInterface
{
   
    protected $_group;
    public function __construct(
        GroupFactory $group
    ){

        $this->_group=$group;
    }
   
    /**
     * Get name.
     *
     * @return string
     */
    public function getProfile()
    {
        return [
        [

        'firstname'=> 'Niharika',
        'lastname' => 'M',
        'email'    => 'niha@embitel.com',
        'telephone'=> '9876543210',
        'city'     => 'Whitefield',
        'state'    => 'karnataka',
        'country'  => 'India',
        ],

      
        [ 
         
        'firstname'=> 'Anil',
        'lastname' => 'S',
        'email'    => 'anil@embitel.com',
        'telephone'=> '8756321902',
        'city'     => 'Varthur kodi',
        'state'    => 'karnataka',
        'country'  => 'India',
        ],

       
        [ 
        
        'firstname'=> 'Swapna',
        'lastname' => 'C',
        'email'    => 'swapna@gmail.com',
        'telephone'=> '9876543210',
        'city'     => 'JP Nagar[',
        'state'    => 'karnataka',
        'country'  => 'India',
        ],
           
          ];
       
     }
 
     

   
// CREATEING REST API TO CUSTOMER GROUP

/**
 * set name
 * 
 * @param string[] $customerInfo
 * @return array
 */

 public function setCustomerGroup($customerInfo)
 {
    try{
                    
        $stores = [
            'customer_group_code'=>$customerInfo['groupName'],
            'tax_class_id'=>3
        ];

        $group = $this->_group->create();
        $group->setData($stores);
        $group->save();


        return[
            'groupId'=>5,
            'groupName'=>"codeblooded"
        ];
    } catch(\Throwable $th){
        $th->getMessage();
    }
}

}
