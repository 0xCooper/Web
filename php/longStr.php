/*
 * @Descripttion: 通过定界符输入常常的字符串
 * @version: 
 * @Author: myc
 * @Date: 2021-02-26 02:45:15
 */
<?php
    $website = '垃圾网站';
    $url = 'http://lajiwang.com';
    $title = 'hello';
    $str = <<<str
        <!DOCTYPE html>
        <html>
        <head>
            <title> $title </title>
        </head>
        <body>
            您正在访问的是：<strong style="color:red">$website</strong><br>
            网址：<a href="$url" target="_blank">$url</a>
        </body>
        </html>
str;
    echo $str;
?>