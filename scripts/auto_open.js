var spawn = require('child_process').exec;

// // Hexo 2.x 用户复制这段
// // hexo.on('new', function(path){
// //   spawn('start  "D:\Program Files\Typora\Typora.exe" ' + path);
// // });

// // Hexo 3 用户复制这段
hexo.on('new', function(data){
  spawn('start  "D:\Program Files\Typora\Typora.exe" ' + data.path);
});