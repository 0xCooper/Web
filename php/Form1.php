/*
 * @Descripttion: 写一个get判断 (注释，判断，变量)
 * @version: 
 * @Author: myc
 * @Date: 2021-02-26 02:30:23
 */


<?php
    $var=$_GET['a'];
    //PHP 中的变量名是区分大小写的
    if($var=="aabbcc"){

        echo  "Hello world!<br>"
    } else{
        echo "you are not our user";
    }

?>