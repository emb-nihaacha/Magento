<?php
namespace Embitel\Mymodule\Cron;



 class Test
  {
   
    public function execute() 
    {
    
    $current_date=date("YMd_his");
    $file_name='customer'.$current_date.'.csv';
    $header_info=array(
        'FirstName',
        'LastName',
        'Email',
        'Telephone'
    );


    $header_info=array_combine($header_info,$header_info);
    $data=[];

    $data[] = $header_info;

    $data[] = [
        'FirstName' => 'Niharika',
        'LastName'  => 'Acharya',
        'Email'     => 'niha@gmail.com',
        'Telephone' => '9876543210'
    ];

    $data[] = [
        'FirstName' => 'Nitya',
        'LastName'  => 'A',
        'Email'     => 'nitya@gmail.com',
        'Telephone' => '9482305684'
    ];

    $fp = fopen('/var/www/html/magento/var/export/'.$file_name, 'w');

     foreach ($data as $fields) {
        fputcsv($fp, $fields);
    }
   }
}