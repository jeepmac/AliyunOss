AliyunOss
=========

Aliyun OSS Client for Laravel 4


>阿里云OSS

 基于 OSS(Open Storage Services) PHP SDK v1.1.6 修改

- 安装
    1. 修改composer.json
    在require中添加 `"kisay/aliyun-oss": "dev-master"`

    2. 执行composer install 或 composer update

    3. 修改config/app.php
    在providers数组中添加
        `'Kisay\AliyunOss\AliyunOssServiceProvider'`

- 使用

    在项目中直接使用 AliyunOSS::方法名 即可调用SDK中的方法
    具体使用方法参考OSS SDK
