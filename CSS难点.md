# CSS难点

## overflow：

表示文字超出文本框时怎么处理

auto：超出时自动加滚动条，不超出不加

scroll：超出时加滚动条，不超出也加。



## 盒模型：

盒模型中的宽高为内容的宽高，而量取一个盒模型时量取的是content+padding+border的宽高，所以得进行计算来换算。

可以使用css3中的border-sizing，将其设置成border-box，就是边框模型，此时宽高就一样了。普通宽高的样式在border-sizing中为content-box。