---
title: Java中Swing的removeAll()的问题
data: 2020 09-06 09:37:00
author: HsDodo
tags: 
     - Java
     - Swing
categories: Java
keywords: 
     - Swing
     - removeAll()
reprintPolicy: noreprint
---



之前在做一个小游戏的时候，我有一步是点击按钮之后游戏重置,一开始我给按钮加的监听是Frame.remove()，结果点击按钮之后

没有东西显示，再添加组件也没得显示

**原因：**

焦点切换问题。

要是调用Frame中的removeAll()方法,可能会把contentpane remove掉,其他的一些glasspane, rootpane, layerdpane,什么的也可能被移除掉

**解决办法**

尽量不要用Frame的removeAll() 用Frame中的contentpane.removeAll()

```java

frame.getContentPane().removeAll();

```

