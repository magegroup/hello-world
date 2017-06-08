<?php
$data =array("hello"=>abcd);
header('Content-Type: application/json');
echo json_encode($data);
