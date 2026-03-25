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


?>
