<?php
$host = "localhost";
$username = "ezekiel";
$password = "Oluwaseun1@";

return array(
    'doctrine' => array(
        'connection' => array(
            
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array(
                    
                    'host' => $host,
                    'port' => '8889',
                    'user' => $username,
                    'password' => $password,
                    'dbname' => 'yii',
                    
                    // 'host' => 'us-cdbr-azure-east-c.cloudapp.net',
                    // 'port' => '3306',
                    // 'user' => 'b7488980d7038c',
                    // 'password' => '45329998',
                    // 'dbname' => 'imapp',
                    
                    // 'host' => 'localhost',
                    // 'port' => '3306',
                    // 'user' => 'divancre_crest',
                    // 'password' => 'Simple123!@#',
                    // 'dbname' => 'divancre_divan',
                    
//                     'charset' => 'utf8', // extra
//                     'driverOptions' => array(
//                         1002 => 'SET NAMES utf8'
//                     )
                )
            )
        
        )
    
    )

);

