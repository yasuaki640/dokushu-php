windowsだと($pwd)が上手く展開されんので以下のように絶対パスを指定して実行すれば行ける  
```
C:\Users\yasua\PhpstormProjects\dokushu-php>docker run --rm -v c//Users//yasua//PhpstormProjects//dokushu-php//web//app://app composer require vlucas/phpdotenv
```