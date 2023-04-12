<?php


namespace Embitel\Mymodule\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Customer\Model\GroupFactory;



class customergroup implements ResolverInterface{

    protected $_group;
    public function __construct(
        GroupFactory $group
    ){

        $this->_group=$group;
    }
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    ){
        try{
                    
        $stores = [
            'customer_group_code'=>$args['input']['groupName'],
            'tax_class_id'=>3
        ];

        $group = $this->_group->create();
        $group->setData($stores);
        $group->save();


        return[
            'groupId'=>2,
            'groupName'=>"teams"
        ];
    } catch(\Throwable $th){
        $th->getMessage();
    }
}
}
         