<?php 
/**
 * 哔哔页面
 * 
 * @package custom 
 * 黑石修改
 * https://www.heson10.com
 */
?>
<?php
$this->need('Base/head.php');
$this->need('Base/navbar.php');
$this->need('Base/hero.php');
?>
<div class="card-box clearfix  <?php echo Helper::options()->indeximg ? '' : 'pt4' ?> mx-auto">
    <div class="card-content mx-auto <?php echo Helper::options()->indeximg || $this->options->qjcbl ? '' : 'mt2' ?>" <?php echo $this->options->qjcbl && in_array('1', $this->options->cblxswz) ?  "" : "style='max-width: 850px'" ?>>
 
        <?php if ($this->options->qjcbl && $this->options->qjcblfx == 0 && in_array('1', $this->options->cblxswz)) : ?>
            <div class="qjcbl md-hide lg-col lg-col-3 mt1">
                <?php $this->need('Base/sidebar.php'); ?>
            </div>
        <?php endif ?>
        <div class="xs-col-12 cuteup lg-col <?php echo $this->options->qjcbl && in_array('1', $this->options->cblxswz) ?  "lg-col-9" : "lg-col-12" ?>  <?php echo Cuteen::isMobile() ? '' : 'mt1' ?>">
            <div class="mybox m1 <?php echo Helper::options()->indeximg ? '' : 'mt2' ?>">
                <div class="Post_content_box">
                    <?php if (!Helper::options()->indeximg) : ?>
                        <div class="detail-title-wrap">
                            <div class="wznydbt mt1 mb3"><?php $this->title() ?></div>
                            <div <?php echo Cuteen::isMobile() ? 'style="line-height:1.8"' : '' ?> class="flex justify-between <?php echo Cuteen::isMobile() ? 'flex-column' : 'pb2' ?>">
                                <nav class="breadcrumb h6">
                                    <ul class="flex">
                                        <li class="flex items-center pr1"> <svg class="icon" aria-hidden="true">
                                                <use xlink:href="#icon-shouye"></use>
                                            </svg><a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>">首页</a></li>
                                        <li class="flex items-center"> <svg class="icon" aria-hidden="true">
                                                <use xlink:href="#icon-biaoqian1"></use>
                                            </svg>独立页面</li>
                                    </ul>
                                </nav>
                                <div class="flex flex-wrap">
 
                                    <span class="h6 flex items-center mr1">
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-huo"></use>
                                        </svg>
                                        <?php Cuteen::getPostviews($this) ?>
                                    </span>
                                    <span class="h6 flex items-center mr1">
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-bidianliang"></use>
                                        </svg>
                                        <?php Cuteen::getWordCount($this->cid) ?> 字
                                    </span>
                                    <span class="h6 flex items-center mr1">
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-pinglun"></use>
                                        </svg>
                                        <?php $this->commentsNum('暂无评论', '%d 条评论'); ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php endif ?>
                  <article id="Post_wysiwyg" class="duta">
          <?php echo Cuteen::parseAll($this->content); ?>
 
                  <main id="app">
                  <article class="message lan"><div class="message_body">共计发送 {{count}} 条说说</div></article>
 
                    <div class="timenode" v-for="item in contents" v-cloak>
                      <div class="meta">
                        <p><time v-bind:datetime="item.attributes.time">{{item.attributes.time}}</time></p>
                      </div>
                      <div class="body">
                        <p v-html='item.attributes.content'></p>
                      </div>
                    </div>
 
        <div class="load-ctn">
        <a class="btn lv" v-on:click="loadMore" v-if="contents" v-cloak>再翻翻</a>
        <p class="tip" v-else>别急，加载呢</p>
        </div>
                  </main>
             </article>
        </div>
    </div>
    <?php $this->need('Base/comment.php'); ?>
</div>
<?php if ($this->options->qjcbl && $this->options->qjcblfx == 1 && in_array('1', $this->options->cblxswz)) : ?>
            <div class="qjcbl md-hide lg-col lg-col-3 mt1">
                <?php $this->need('Base/sidebar.php'); ?>
            </div>
        <?php endif ?>
<style>
    @font-face {
      font-family: "iconfont";
      src: url('//at.alicdn.com/t/font_1755564_z4mhxbw13mq.eot?t=1586882866168');
      /* IE9 */
      src: url('//at.alicdn.com/t/font_1755564_z4mhxbw13mq.eot?t=1586882866168#iefix') format('embedded-opentype'),
        /* IE6-IE8 */
        url('data:application/x-font-woff2;charset=utf-8;base64,d09GMgABAAAAAALcAAsAAAAAB2gAAAKPAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHEIGVgCCfgqCUII8ATYCJAMMCwgABCAFhG0HQBuEBsiuMRkynL4YFCHtLKs4b+k7/80U8DwHIB6+xtr7u3vniDZI6tmnkyDS8NC5iFgJlE7pTPcO8e5b+803aYQy8YtH1JPKyZzY3ttb1EonioVGSBAiRJp4JV9cFppCxLpe2z8sUs37O4QEDFRM0lFeAw4XN6bQPG06zTG8DRwHFOBeGEVWIjE+mP8wduVFPCbQNK4ktN8/OgFJhbEqEFemLkEyFVcUVqoL1ZKDRbyIqafb9AA8+9+PX41IklQyY+PBSZ8KnR+9iBx0OxZcp8PxvGDHyFgACnFY6j8QCfMLIppKPmoCrGtW8OG/y0eufLX/8AiJqDKa22AGWpMzUth6p6aARySQQRUUL4AnSBmuyvIwPdbz21OX5ybO5duOJifaLl6cvkrd1HR7kWEy6yikff29PvgO17V/Tf/9f/oN3PDqz22a719IYlZJHQetpLY08MV6fwFDrF0B6F4XyB3/FyEEnZnU2XGtVwHvpxtA1d6pftKB4AcoWo4U1QQbiiy35Xow27whbwK2NNFlhAc99zeOtM4S6ikFQ1IzhqxuglAoC6ho2UBV3Raa5g0cbxnCRURpYM4pQOh3h6TXG7J+j4RCeULFqFdU9UcETYfRdGHLVJjpHk6SIBXlTTQV5mmWS6SD1jHSVx2JJ1U+a4p4YKawvrSSLQ2QR3yMLcGa3hBCQ40zF/vBc+Q4DH3OLFJExRDCb64un5S9qaIwF9L2cEQiEBWSbUImBePR3PFCOvf5MUS3yiHhNR0VySmEC5jTo7qKWgvCgN5r1XEtrwTW6BoEQYM0HONC/cBLHDPPIL98noUohAqjR7uvWVV1HlVbfWV+o/t8J6DJOJ4jRY6idmVKnmVS1q8tK8zfBAAA') format('woff2'),
        url('//at.alicdn.com/t/font_1755564_z4mhxbw13mq.woff?t=1586882866168') format('woff'),
        url('//at.alicdn.com/t/font_1755564_z4mhxbw13mq.ttf?t=1586882866168') format('truetype'),
        /* chrome, firefox, opera, Safari, Android, iOS 4.2+ */
        url('//at.alicdn.com/t/font_1755564_z4mhxbw13mq.svg?t=1586882866168#iconfont') format('svg');
      /* iOS 4.1- */
    }
  #app img{display: block;}
    .iconfont {
      font-family: "iconfont" !important;
      font-size: 16px;
      font-style: normal;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
 
    .icon-lianjie:before {
      content: "\e6a3";
    }
 
    .icon-lianjie-copy:before {
      content: "\e6a4";
    }
  </style>
<script src="https://cdn.bootcss.com/vue/2.6.11/vue.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leancloud-storage@4.5.3/dist/av-min.js"></script>
<?php echo '<script src="' . CUTEEN_STATIC_PATH . '/Js/bb.js"></script>'; ?>        
        </div>
    </div>
</div>
<?php $this->need('Base/footer.php'); ?>