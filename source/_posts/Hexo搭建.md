title: Hexo 搭建
data: 2021 04-17 21:25:00
author: 花森°
categories: Hexo
reprintPolicy: noreprint
img: https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/15.jpg


----------

<h4 id="toc-heading-39"><a href="#Hexo文章-Front-matter-介绍" class="headerlink" title="Hexo文章 Front-matter 介绍" target="_blank"></a>Hexo文章 Front-matter 介绍</h4><p><code>Front-matter</code> 选项中的所有内容均为非必填的。但我仍然建议至少填写 <code>title</code> 和 <code>date</code> 的值。</p>
<table>
<thead>
<tr>
<th>配置选项</th>
<th>默认值</th>
<th>描述</th>
</tr>
</thead>
<tbody><tr>
<td>title</td>
<td>Markdown 的文件标题</td>
<td>文章标题，强烈建议填写此选项</td>
</tr>
<tr>
<td>date</td>
<td>文件创建时的日期时间</td>
<td>发布时间，强烈建议填写此选项，且最好保证全局唯一</td>
</tr>
<tr>
<td>author</td>
<td>根 _config.yml 中的 author</td>
<td>文章作者</td>
</tr>
<tr>
<td>img</td>
<td>featureImages 中的某个值</td>
<td>文章特征图，推荐使用图床(腾讯云、七牛云、又拍云等)来做图片的路径.如: <a target="_blank" rel="noopener" href="http://xxx.com/xxx.jpg">http://xxx.com/xxx.jpg</a></td>
</tr>
<tr>
<td>top</td>
<td>true</td>
<td>推荐文章（文章是否置顶），如果 top 值为 true，则会作为首页推荐文章</td>
</tr>
<tr>
<td>cover</td>
<td>false</td>
<td>v1.0.2版本新增，表示该文章是否需要加入到首页轮播封面中</td>
</tr>
<tr>
<td>coverImg</td>
<td>无</td>
<td>v1.0.2版本新增，表示该文章在首页轮播封面需要显示的图片路径，如果没有，则默认使用文章的特色图片</td>
</tr>
<tr>
<td>password</td>
<td>无</td>
<td>文章阅读密码，如果要对文章设置阅读验证密码的话，就可以设置 password 的值，该值必须是用 SHA256 加密后的密码，防止被他人识破。前提是在主题的 config.yml 中激活了 verifyPassword 选项</td>
</tr>
<tr>
<td>toc</td>
<td>true</td>
<td>是否开启 TOC，可以针对某篇文章单独关闭 TOC 的功能。前提是在主题的 config.yml 中激活了 toc 选项</td>
</tr>
<tr>
<td>mathjax</td>
<td>false</td>
<td>是否开启数学公式支持 ，本文章是否开启 mathjax，且需要在主题的 _config.yml 文件中也需要开启才行</td>
</tr>
<tr>
<td>summary</td>
<td>无</td>
<td>文章摘要，自定义的文章摘要内容，如果这个属性有值，文章卡片摘要就显示这段文字，否则程序会自动截取文章的部分内容作为摘要</td>
</tr>
<tr>
<td>categories</td>
<td>无</td>
<td>文章分类，本主题的分类表示宏观上大的分类，只建议一篇文章一个分类</td>
</tr>
<tr>
<td>tags</td>
<td>无</td>
<td>文章标签，一篇文章可以多个标签</td>
</tr>
<tr>
<td>keywords</td>
<td>文章标题</td>
<td>文章关键字，SEO 时需要</td>
</tr>
<tr>
<td>reprintPolicy</td>
<td>cc_by</td>
<td>文章转载规则， 可以是 cc_by, cc_by_nd, cc_by_sa, cc_by_nc, cc_by_nc_nd, cc_by_nc_sa, cc0, noreprint 或 pay 中的一个</td>
</tr>
</tbody></table>
<div class="code-area" style="position: relative"><i class="fas fa-angle-up code-expand" aria-hidden="true"></i><div class="codecopy_notice"></div><i class="fas fa-copy code_copy" title="复制代码" aria-hidden="true"></i><div class="code_lang" title="代码语言">bash</div><pre class="line-numbers language-bash" data-language="bash"><code class="language-bash">注意:
    如果 img 属性不填写的话，文章特色图会根据文章标题的 hashcode 的值取余，然后选取主题中对应的特色图片，从而达到让所有文章都的特色图各有特色。
    <span class="token function">date</span> 的值尽量保证每篇文章是唯一的，因为本主题中 Gitalk 和 Gitment 识别 <span class="token function">id</span> 是通过 <span class="token function">date</span> 的值来作为唯一标识的。
    如果要对文章设置阅读验证密码的功能，不仅要在 Front-matter 中设置采用了 SHA256 加密的 password 的值，还需要在主题的 _config.yml 中激活了配置。有些在线的 SHA256 加密的地址，可供你使用：开源中国在线工具、chahuo、站长工具。
    您可以在文章md文件的 front-matter 中指定 reprintPolicy 来给单个文章配置转载规则<span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span><span></span></span></code></pre></div>

<p>以下为文章的 <code>Front-matter</code> 示例。<br>最简示例</p>
<div class="code-area" style="position: relative"><i class="fas fa-angle-up code-expand" aria-hidden="true"></i><div class="codecopy_notice"></div><i class="fas fa-copy code_copy" title="复制代码" aria-hidden="true"></i><div class="code_lang" title="代码语言">bash</div><pre class="line-numbers language-bash" data-language="bash"><code class="language-bash">---
title: typora-vue-theme主题介绍
date: <span class="token number">2018</span>-09-07 09:25:00
---<span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre></div>