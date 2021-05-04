---
title: Linux学习小抄
date: 2021-04-21 08:27:09
cover: https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/4.jpg
tags: 
     - Linux
categories: Linux
---

# Linux 学习小抄

## 💫 <font color='#ff7f50'>JDK配置</font>

- 网上下好Linux版本的JDK ，例如: jdk-8u181-linux-x64.tar.gz ,并放到Linux 系统下面/usr/local/jdk/

  本地下好了JDK 可以用Xftp上传上去，或者用在cmd中用scp命令上传

  ```
  scp 源文件路径 用户名@目标主机名或IP地址: 目标文件路径
  ```

  

- 解压JDK

  ```
  tar zxvf jdk-8u181-linux-x64.tar.gz
  ```

- 配置环境变量

  打开profile配置文件

  ```
  vim /etc/profile
  ```

  尾部添加以下信息(根据自己需要改自己的实际目录)

  ```
  export JAVA_HOME=/usr/local/jdk/jdk1.8.0_181
  export CLASSPATH=$:CLASSPATH:$JAVA_HOME/lib/
  export PATH=$PATH:$JAVA_HOME/bin
  ```

- 刷新配置使其生效

  ```
  source /etc/profile
  ```

- 查看是否安装成功 java -version

  ```
  java -version
  ```



## 💫 <font color='#ff7f50'>SSH远程连接服务器或者虚拟机</font>

- ssh 命令使用格式:

  ```
  ssh 用户名@目标主机名或IP地址
  例:
  ssh root@192.168.2.5
  ```

- scp 从windows 上传文件到Linux系统 

  ```
  scp 源文件路径 用户名@目标主机名或IP地址: 目标文件路径
  ```

  

