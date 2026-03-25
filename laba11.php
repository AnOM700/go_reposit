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
mkdir("folder",0775);
rename("mir.txt","folder/mir.txt");
copy("folder/mir.txt","folder/world.txt");
$size=filesize("folder/world.txt");
echo "В байтах: ".$size." В мегабайтах: ".($size/1024)." В гигабайтах: ".($size/(1024*1024));
unlink("folder/world.txt");
if(!file_exists("folder/world.txt")){
    echo "<br>Файл world.txt не существует<br>";
}
if(file_exists("folder/mir.txt")){
    echo "Файл mir.txt существует<br>";
}
mkdir("test",0775);
rename("test","www");
rmdir("www");
$folders = ['Images', 'Documents', 'Projects', 'Archive'];
$root = 'test';

if (!is_dir($root)) {
    mkdir($root, 0775);
}

foreach ($folders as $folderName) {
    $path = $root ."/". $folderName;

    if (!is_dir($path)) {
        if (mkdir($path, 0777)) {
            echo "Создана папка: $path<br>";
        }
    } else {
        echo "Папка уже существует: $path<br>";
    }
}

echo "<br>--- Поиск JPG файлов ---<br>";

$jpgFiles = glob("*.jpg");

if (!empty($jpgFiles)) {
    echo "Найдены JPG файлы:<br>";
    foreach ($jpgFiles as $file) {
        echo $file . "<br>";
    }
} else {
    echo "Файлы с расширением .jpg не найдены в текущей директории.\n";
}
?>
