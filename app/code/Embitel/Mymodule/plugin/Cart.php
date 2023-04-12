<?php
    
    namespace Embitel\Mymodule\plugin;

    class Cart
    {
        public function beforeAddProduct(
            \Magento\Checkout\model\Cart $subject,
            $productInfo,
            $requestInfo = null
        ) {
            $requestInfo['qty'] = 10; // increasing quantity to 10
            return array($productInfo, $requestInfo);
        }
    }