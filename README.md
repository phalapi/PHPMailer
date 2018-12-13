# PHPMailer
PhalApi 2.x扩展类库，基于PHPMailer的邮件发送。

## 安装和配置
修改项目下的composer.json文件，并添加：  
```
    "phalapi/phpmailer":"dev-master"
```
然后执行```composer update```，如果PHP版本过低，可使用```composer update --ignore-platform-reqs```。  

安装成功后，添加以下配置到./config/app.php文件：  
```php
    'PHPMailer' => array(
        'email' => array(
            'host' => 'smtp.gmail.com',
            'username' => 'XXX@gmail.com',
            'password' => '******',
            'from' => 'XXX@gmail.com',
            'fromName' => 'PhalApi团队',
            'sign' => '<br/><br/>请不要回复此邮件，谢谢！<br/><br/>-- PhalApi团队敬上 ',
        ),
    ),
```

## 注册
在./config/di.php文件中，注册邮件服务：  
```php
$di->mailer = function() {
    return new \PhalApi\PHPMailer\Lite(true);
};
```

上面将依赖composer版本的PHPMailer；如果你的PHP版本 <= PHP 5.3，则需要切换到第一版本：
```php
$di->mailer = function() {
    return new \PhalApi\PHPMailer\LiteOne(true);
};
```

## 使用
如下代码示例：
```php
\PhalApi\DI()->mailer->send('chanzonghuang@gmail.com', 'Test PHPMailer Lite', 'something here ...');
```

稍候将会收到：


![123123](http://webtools.qiniudn.com/20150411005257_6e6c7a610357cf80e4513557a110d86d)


如果需要发送邮件给多个邮箱时，可以使用数组，如：  
```php
$addresses = array('chanzonghuang@gmail.com', 'test@phalapi.com');
\PhalApi\DI()->mailer->send($addresses, 'Test PHPMailer Lite', 'something here ...');
```

## 调试日志
在注册初始化时，传入true可开启调试日志，并可以看到类如：  
```
2017-09-03 10:10:58|DEBUG|Succeed to send email|{"addresses":["chanzonghuang@gmail.com"],"title":"Test PHPMailer Lite"}
```

