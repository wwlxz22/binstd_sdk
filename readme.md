#BinSTD SDK

    this project provide sdk for https://www.binstd.com
    
## 安装
- 安装
```
composer require wwlxz22/binstd_sdk
```
- Laravel 安装


## 使用

```php
<?php
$key="";
$sec="";
$sdk=new Sdk($key,$sec);
$sdk->sms->createChildAccount();
?>
```

## API 列表

- 快递相关
    - 获取物流信息
    
    
- 短信
    - 发送短信
    - 获取账户余额
    - 创建子账号
    - 更改子账号    


