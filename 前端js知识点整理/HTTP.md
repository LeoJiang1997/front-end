# HTTP
HTTP（hypertext transport protocol）协议『超文本传输协议』，协议详细规定了浏览器和万维网服务器之间互相通信的规则。
约定, 规则

使用HTTP时大家会有一个约定，即所有的“控制类”信息应该放在请求头中，具体的数据放在请求体里“ 

## 请求报文
重点是格式与参数
```
行      POST  /s?ie=utf-8  HTTP/1.1 
头      Host: atguigu.com
        Cookie: name=guigu
        Content-type: application/x-www-form-urlencoded
        User-Agent: chrome 83
空行
体      username=admin&password=admin
```

## 响应报文
```
行      HTTP/1.1  200  OK
头      Content-Type: text/html;charset=utf-8
        Content-length: 2048
        Content-encoding: gzip
空行    
体      <html>
            <head>
            </head>
            <body>
                <h1>尚硅谷</h1>
            </body>
        </html>
```
* 404
* 403
* 401
* 500
* 200



对于HTTP，**需要区分【头】和【体】**，Http Request和Http Response都这么区分。Http这么干主要用作**：**

- 对于HTTP代理

- - 支持转发规则，比如nginx先要解析请求头，拿到URL和Header才能决定怎么做（转发proxy_pass，重定向redirect，rewrite后重新判断……）
  - 需要用请求头的信息记录log。尽管请求体里的数据也可以记录，但一般只记录请求头的部分数据。
  - 如果代理规则不涉及到请求体，那么请求体就可以不用从内核态的page cache复制一份到用户态了，可以直接zero copy转发。这对于上传文件的场景极为有效。
  - ……

- 对于HTTP服务器

- - 可以通过请求头进行ACL控制，比如看看Athorization头里的数据是否能让认证通过
  - 可以做一些拦截，比如看到Content-Length里的数太大，或者Content-Type自己不支持，或者Accept要求的格式自己无法处理，就直接返回失败了。
  - 如果body的数据很大，利用Stream API，可以方便支持一块一块的处理数据，而不是一次性全部读取出来再操作，以至于占用大量内存。

 

 

 

 

 