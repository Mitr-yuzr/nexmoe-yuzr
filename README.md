# nexmoe-yuzr

> 🌻 OneIndex - nexmoe主题美化

参考与修改自

- [GitHub - dl233/OneIndex-theme-nexmoes: 一个基于nexmoe主题的部署在oneindex上的二次元主题](https://github.com/dl233/OneIndex-theme-nexmoes) 

- [GitHub - coolssr/oneindex-embellish: oneindex的主题美化，更多自定义](https://github.com/coolssr/oneindex-embellish)

感谢各位大佬对nexmoe主题作出的贡献

## 预览

[示例站点 - 失迹云](https://pan.reincarnatey.net)

![](https://s2.loli.net/2023/01/16/d7hFOg1ZHj9fnEx.png)

## 修改内容

- 修改了顶部导航栏
  
  - 原先的导航栏设计真的一言难尽，真有人看了不难受吗

- 启用了背景与半透明面板，但同时保持了fab和路径为蓝色
  
  - 这真的很难
  
  - 我几乎把CSS全看了才解决了CSS冲突

- 将排序的触发器由箭头改为文字与箭头
  
  - 原先只能点箭头而不能点文字，属实反人类设计

- 将随机背景图改回了固定背景
  
  - 当然，你可以再改回去，这很简单

## 使用方法

- 将本仓库的 `nexmoe` 覆盖至 `/view/themes` 目录下的 `nexmoe`文件夹

- 将以下内容替换为你自己需要的内容
  
  - `layout.php`
    
    - [第108行](https://github.com/Mitr-yuzr/nexmoe-yuzr/blob/main/nexmoe/layout.php#L108)：可以替换背景图片
    
    - [第119-124行](https://github.com/Mitr-yuzr/nexmoe-yuzr/blob/main/nexmoe/layout.php#L119-L124)：顶部的头像与导航栏
  
  - `picture/logo.png` 替换为你自己的头像
  
  - `bg.png` 替换为你自己的背景
  
  - `favicon.ico` 替换为你自己的图标
  
  - `password.php` 可以修改密码界面的文字

## 问题

示例站点全部采用的绝对路径来访问js和css资源，在上传本仓库时全部修改为相对路径。

如果在替换过后页面有问题，可以打开控制台看看是否是找不到资源。如果是的话，你可以将此处的链接改为绝对路径（如`https://pan.reincarnatey.net/view/themes/nexmoe/js/urusai.js`）

若有其他问题，小问题可以自己修改源码，较大的问题欢迎提issue，也欢迎pr。
