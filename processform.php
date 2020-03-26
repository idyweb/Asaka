<?php
$FirstName=$_POST["FirstName"];
$Lastname=$_POST["LastName"];
#$contact_Number=$_POST['contact Number'];
#$visitor_message=$_POST['message'];

$input= "FirstName:" . $FirstName . "LastName:" . $Lastname .
$fp = fopen('Firstname.txt', 'a');

fwrite($fp, $input);

fclose($fp);

echo 'your file is saved as text'
#extract($_REQUEST);
#$_FILES=fopen('form.txt', 'a');

#fwrite($_FILES, 'name :');
#fwrite($_FILES, $Firstname,'\n');
#fwrite($_FILES, 'name:');
#fwrite($_FILES, $Lastname,'\n');
#fclose($_FILES);



?>