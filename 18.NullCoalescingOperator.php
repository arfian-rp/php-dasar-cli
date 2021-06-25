<?php 

//pengecekan variable belum ada atau null
$data = [];
$act = $data['act'] ?? 'nothing';

echo $act;

?>