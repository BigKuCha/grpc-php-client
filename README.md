GRPC
====

grpc php版本客户端.   
server: [https://github.com/BigKuCha/grpc-go](https://github.com/BigKuCha/grpc-go)

#### 从server端拷贝proto文件

从go版本的server里拷贝proto文件到php目录

#### 生成php代码

`protoc --php_out=. *.prot`

#### 添加自动加载

```$xslt
"autoload": {
        "psr-4": {
            "GPBMetadata\\": "GPBMetadata",
            "User\\": "User",
            "Client\\": "Client"
        }
    }
```

#### 根据user.proto编写客户端

#### 编写查询和创建请求

#### 结果验证

`php create.php`  

> -----开始创建用户
  创建用户成功,ID是999

`php query.php`

> -------开始查询用户信息
  ID:11, 姓名:张三, 手机号:18898987765, 年龄：12 
