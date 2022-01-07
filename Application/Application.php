<?php
if(isset($_GET["url"]))
{
    if($_GET["url"] != "" && $_GET["url"]!="index.php" && $_GET["url"]!="index")
    {
        if(file_exists("./Controller/".$_GET["url"].".php"))
        {
            require_once "./Controller/".$_GET["url"].".php";  
        }
        else 
        {
            require_once "./Controller/404.php";  
        }
    }
    else
    {
        require_once "./Controller/Home.php";
    }   
}
else 
{
    require_once "./Controller/Home.php";
}
