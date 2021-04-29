---
title: Java中Swing的焦点的问题
data: 2020 09-05 21:22:00
author: HsDodo
img: https://s1.ax1x.com/2020/09/05/wEdWSH.png
tags: Swing
categories: Java
keywords: 博客
reprintPolicy: noreprint
---



之前在做一个小游戏的时候，我给按钮加上了监听，但开始游戏之后点了按钮，键盘监听就失效了，按了没反应


**原因：**

焦点切换问题。

点击按钮后，焦点就到了按钮上，现在按键盘只能被按钮接收到，而不会被面板接收到。

焦点其实是很基础的一个问题，但是没有系统的学习过swing，这就是后果，gg。

**解决办法**

①每次鼠标点击按钮后，把用requestFocus方法重新把焦点放到主面板上，
如下:

```
        panel.requestFocus();

```
②为你的主面板设置焦点

```
        panel.setFocusable(true);

```