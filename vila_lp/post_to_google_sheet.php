<?php

 

$name=$_POST['name'];
$phone=$_POST['phone'];
$date = date('Y/m/d H:i:s');


echo $name.$phone;










$postParameter = array(
    'date_and_time' => $date,
    'name' => $name,
    'phone' => $phone
    
);

$curlHandle = curl_init('https://script.google.com/macros/s/AKfycbxAAiy6ogGoh2HRpW-bEgh1I7R25FIe5ab-aqvVi0PzWeYQZtfYAeWrhyyxLt45FKHT/exec');
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
$curlResponse = curl_exec($curlHandle);
curl_close($curlHandle);


//echo $curlResponse."";


echo '<script type="text/javascript">
                
alert("       تمت العملية بنجاح  وسيصلك كود الخصم عبر وتساب         ");

window.history.go(-1);
 
</script>

';


















?>