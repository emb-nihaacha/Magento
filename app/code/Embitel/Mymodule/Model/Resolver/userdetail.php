<?php


namespace Embitel\Mymodule\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;


class userdetail implements ResolverInterface{
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    ){
        $stores = [
            [
                "firstname"=>"Niharika",
                "lastname"=>"Acharya",
                "email"=>"emb-nihaacha@embitel.com",
                "telephone"=>"9876543210",
                "city"=>"Bangalore",
                "state"=>"Karnataka",
                "country"=>"India",
                ],
               
               
                [
                "firstname"=>"Nitya",
                "lastname"=>"A",
                "email"=>"nitya@gmail.com",
                "telephone"=>"563214897",
                "city"=>"Mumbai",
                "state"=>"karnataka",
                "country"=>"India",
                ],
               
               
                [
                "firstname"=>"JP",
                "lastname"=>"Pulishi",
                "email"=>"jppulishi28@gmail.com",
                "telephone"=>"9712439820",
                "city"=>"Bangalore",
                "state"=>"karnataka",
                "country"=>"India",
           
                ]

];
            return[
                'total'=>count($stores),
                'list'=>$stores
            ];
    }
}
