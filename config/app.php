<?php

return array(
    'PHPMailer' => array(
        'email' => array(
            'host' => 'smtp.yeah.net',
            'port'=>'465',//服务器端口
            'Secure'=>'ssl',//ssl链接
            'username' => 'xxxxx@yeah.net',
            'password' => 'xxxxxxx',
            'from' => 'xxxxxx@yeah.net',
            'fromName' => 'xxxxxxxx',
            'sign' => '<br/><br/>请不要回复此邮件，谢谢！<br/><br/>-- xxxxxx ',
        ),
    ),
);
