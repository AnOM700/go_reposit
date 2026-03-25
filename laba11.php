<?php
    $file=fopen("test.txt","w");
    fwrite($file,"Привет мир");
    fclose($file);
$file =fopen("test.txt","r");
    while (!feof($file))
{
$str = fgets($file);
echo $str."<br />";
}
rename("test.txt","mir.txt");
mkdir("folder",0700);
rename("mir.txt","folder/mir.txt");
copy("folder/mir.txt","folder/world.txt");
$size=filesize("folder/world.txt");
echo "В байтах: ".$size." В мегабайтах: ".($size/1024)." В гигабайтах: ".($size/(1024*1024));

?>
