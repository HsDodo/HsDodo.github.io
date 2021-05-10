//随机背景图片数组,图片可以换成图床链接，注意最后一条后面不要有逗号
var backimg =[
    "url(https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/2.jpg)"
  ];
  //获取背景图片总数，生成随机数 Math.random() * (backimg.length-1)
  var bgindex =Math.ceil(Math.random() * (backimg.length-1));
  //重设背景图片
  document.getElementById("web_bg").style.backgroundImage = backimg[bgindex];
  //随机banner数组,图片可以换成图床链接，注意最后一条后面不要有逗号
  var bannerimg =[
    "url(https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/6.jpg)",
    "url(https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/4.jpg)",
    "url(https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/5.jpg)",
    "url(https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/20210508170657.jpg)",
    "url(https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/20210507235034.jpg)",
    "url(https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/20210508170700.jpg)",
    "url(https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/20210508171936.jpg)",
    "url(https://cdn.jsdelivr.net/gh/HsDodo/blogImage/images/20210508171935.jpg)"
  ];
  //获取banner图片总数，生成随机数 Math.random() * (bannerimg.length-1)
  var bannerindex =Math.ceil(Math.random() * (bannerimg.length-1));
  //重设banner图片
  document.getElementById("page-header").style.backgroundImage = bannerimg[bannerindex];