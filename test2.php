...........................................................
............................................................
...............................................................
.................................................................
...................................................................
CRON JOBS
...................

<?php
  
$file = 'people.txt';
// The new person to add to the file
$person = "John Smith\n";
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file ///c34fecdfb0873230b1d6b409ba63e5ae
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
//file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
file_put_contents($file, $person,LOCK_EX);

$file = 'currency_layer.txt';
$aJson  = file_get_contents("http://www.apilayer.net/api/live?access_key=xxxxxxxxxxxxxxxxxx&from=USD&format=1");
file_put_contents($file, $aJson,LOCK_EX);

?>
process... 
Done
----------------------------------------------------------------
-----------------------------------------------------------------
-------------------------------------------------------------------
----------------------------------------------------------------------

CURRENCY CONVERTER
----------------------

<?php
/**
* https://finance.google.com/bctzjpnsun/converter?a=56&from=USD&to=INR
https://finance.google.com/bctzjpnsun/converter?a=$encode_amount&from=$from_Currency&to=$to_Currency
http://www.apilayer.net/api/live?access_key=xxxxxxxxxxxx&from%20=%20USD&to=INR&amount=25&format=1
**/
/**
$file = 'currency_layer.txt';
$aJson  = file_get_contents("http://www.apilayer.net/api/live?access_key=xxxxxxxxxxxxxxxx&from=USD&format=1");
file_put_contents($file, $aJson,LOCK_EX);
/**/
$aJsonLOCAL  = file_get_contents("currency_layer.txt");

$dataProcess= json_decode($aJsonLOCAL);
$aCurrencySet='USD';
$aCurrencySet.= strtoupper($_GET['currency']);
echo $aCurrencySet;
	foreach ($dataProcess->quotes as $key =>$value){
 	  if($aCurrencySet==$key){
	  echo "<br> ".$aCurrencySet.'=='.$key .'=>'.$value;
	  $CurrentVal = $value;
      }
	}
 
echo "<br>Amount:".$amount=56;
echo "<br>$aCurrencySet:".$CurrentVal;
echo "</pre><hr>";
echo $amount * $CurrentVal;

