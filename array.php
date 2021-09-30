<?php 

$kt = array(
    array('Banten','Pandeglang','Labuan','Rangkasbitung'),
    array('Jakarta','Jakarta Timur','Jakarta Barat','Jakarta Selatan'),
    array('Jawa Barat','Bandung','Tasik Malaya','Cirebon'),
    array('Jawa Timur','Malang','Surabaya','Kediri')
);
$object = (object)$kt;
$tiga_dlm = array(array(
    array(array('Baju','Celana','Topi')
)));
?>
<pre>
<?php 
    print_r($object);
    print_r($tiga_dlm);
?>
</pre>