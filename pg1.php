<?php
$file=fopen("f1.txt","r");
$cont=readfile("f1.txt");
echo"<br>";
$str=file_get_contents("f1.txt");
$vcount=0;
$ccount=0;
$dcount=0;
$scount=0;
$str=strtolower($str);
for($i=0;$i<strlen($str); $i++)
{
    if($str[$i]=='a' || $str[$i]=='e' || $str[$i]=='i' || $str[$i]=='o' || $str[$i]=='u')
    {
	$vcount++;
    }
    else if($str[$i]>='a' && $str[$i]<='z')
    {
	$ccount++;
    }
   else if($str[$i]>='0' && $str[$i]<='9')
    {
	$dcount++;
    }
    else
     {
     	$scount++;
     }
}
$line=count(file("f1.txt"));
echo "No of lines:" ,$line;
echo "<br>No of words:" ,str_word_count($str);
echo "<br>No of character:" ,mb_strlen($str);
echo "<br>No of vowels:" ,$vcount;
echo "<br>No of consonants:" ,$ccount;
echo "<br>No of digits:" ,$dcount;
echo "<br>No of special characters:" ,$scount-$dcount-1;
$data=fileSize("f1.txt");
echo "<br>Size of file:" ,$data;
fclose($f1);
?>
