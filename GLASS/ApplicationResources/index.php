<?php
echo  nl2br ("Application Resources have been generously provided by previous graduate students.\n Please use them for your personal use only and do not share without permission.\n");
$path = ".";
$dh = opendir($path);
$files = array();
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." 
 && $file != "index.php" && $file != ".index.php.swp" 
 && $file != ".htaccess" && $file != ".htaccess.swp" 
 && $file != ".htpasswd.php" && $file != ".htpasswd" 
 && $file != "error_log" && $file != "cgi-bin"
 && $file != ".DS_Store") {
         $files[]=$file;
     }
}

natsort($files);

foreach($files as $file) {
        echo "<a href='$path/$file'>$file</a><br /><br />";
}
closedir($dh);
?> 
