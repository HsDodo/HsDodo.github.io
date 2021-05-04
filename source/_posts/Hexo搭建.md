---
title: Hexo 搭建
data: 2021 04-17 21:25:00
author: 花森°
categories: Hexo
reprintPolicy: noreprint
cover: https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/15.jpg

---



## Page Font-matter

```markdown
---
title:
date:
updated:
type:
comments:
description:
keywords:
top_img:
mathjax:
katex:
aside:
aplayer:
highlight_shrink:
---
```

<table><thead><tr><th>写法</th><th>解释</th></tr></thead><tbody><tr><td>title</td><td>【必需】页面标题</td></tr><tr><td>date</td><td>【必需】页面创建日期</td></tr><tr><td>type</td><td>【必需】标籤、分类和友情链接三个页面需要配置</td></tr><tr><td>updated</td><td>【可选】页面更新日期</td></tr><tr><td>description</td><td>【可选】页面描述</td></tr><tr><td>keywords</td><td>【可选】页面关键字</td></tr><tr><td>comments</td><td>【可选】显示页面评论模块(默认 true)</td></tr><tr><td>top_img</td><td>【可选】页面顶部图片</td></tr><tr><td>mathjax</td><td>【可选】显示mathjax(当设置mathjax的per_page: false时，才需要配置，默认 false)</td></tr><tr><td>katex</td><td>【可选】显示katex(当设置katex的per_page: false时，才需要配置，默认 false)</td></tr><tr><td>aside</td><td>【可选】显示侧边栏 (默认 true)</td></tr><tr><td>aplayer</td><td>【可选】在需要的页面加载aplayer的js和css,请参考文章下面的<code>音乐</code> 配置</td></tr><tr><td>highlight_shrink</td><td>【可选】配置代码框是否展开(true/false)(默认为设置中highlight_shrink的配置)</td></tr></tbody></table>

## Post Font-matter

<table><thead><tr><th style="text-align:center">写法</th><th style="text-align:center">解释</th></tr></thead><tbody><tr><td style="text-align:center"> title</td><td style="text-align:center">【必需】文章标题</td></tr><tr><td style="text-align:center"> date</td><td style="text-align:center">【必需】文章创建日期</td></tr><tr><td style="text-align:center"> updated</td><td style="text-align:center">【可选】文章更新日期</td></tr><tr><td style="text-align:center"> tags</td><td style="text-align:center">【可选】文章标籤</td></tr><tr><td style="text-align:center"> categories</td><td style="text-align:center">【可选】文章分类</td></tr><tr><td style="text-align:center"> keywords</td><td style="text-align:center">【可选】文章关键字</td></tr><tr><td style="text-align:center"> description</td><td style="text-align:center">【可选】文章描述</td></tr><tr><td style="text-align:center"> top_img</td><td style="text-align:center">【可选】文章顶部图片</td></tr><tr><td style="text-align:center"> cover</td><td style="text-align:center">【可选】文章缩略图 (如果没有设置 top_img, 文章页顶部将显示缩略图，可设为 false / 图片地址 / 留空)</td></tr><tr><td style="text-align:center">comments</td><td style="text-align:center">【可选】显示文章评论模块 (默认 true)</td></tr><tr><td style="text-align:center">toc</td><td style="text-align:center">【可选】显示文章 TOC (默认为设置中 toc 的 enable 配置)</td></tr><tr><td style="text-align:center">toc_number</td><td style="text-align:center">【可选】显示 toc_number (默认为设置中 toc 的 number 配置)</td></tr><tr><td style="text-align:center">copyright</td><td style="text-align:center">【可选】显示文章版权模块 (默认为设置中 post_copyright 的 enable 配置)</td></tr><tr><td style="text-align:center">copyright_author</td><td style="text-align:center">【可选】文章版权模块的<code>文章作者</code></td></tr><tr><td style="text-align:center">copyright_author_href</td><td style="text-align:center">【可选】文章版权模块的<code>文章作者</code>链接</td></tr><tr><td style="text-align:center"> copyright_url</td><td style="text-align:center">【可选】文章版权模块的<code>文章连结</code>链接</td></tr><tr><td style="text-align:center"> copyright_info</td><td style="text-align:center">【可选】文章版权模块的<code>版权声明</code>文字</td></tr><tr><td style="text-align:center"> mathjax</td><td style="text-align:center">【可选】显示 mathjax (当设置 mathjax 的 per_page: false 时，才需要配置，默认 false)</td></tr><tr><td style="text-align:center">katex</td><td style="text-align:center">【可选】显示 katex (当设置 katex 的 per_page: false 时，才需要配置，默认 false)</td></tr><tr><td style="text-align:center">aplayer</td><td style="text-align:center">【可选】在需要的页面加载 aplayer 的 js 和 css, 请参考文章下面的<code>音乐</code> 配置</td></tr><tr><td style="text-align:center"> highlight_shrink</td><td style="text-align:center">【可选】配置代码框是否展开 (true/false)(默认为设置中 highlight_shrink 的配置)</td></tr><tr><td style="text-align:center">aside</td><td style="text-align:center">【可选】显示侧边栏 (默认 true)</td></tr><tr><td style="text-align:center">hide</td><td style="text-align:center">【可选】隐藏文章</td></tr><tr><td style="text-align:center"> sticky</td><td style="text-align:center">【可选】文章置顶，值越大越考上</td></tr></tbody></table>



## 外挂标签

参考:[小康的 butterfly 主题使用文档 | 小康博客 (antmoe.com)](https://www.antmoe.com/posts/3b43914f/#文件头)