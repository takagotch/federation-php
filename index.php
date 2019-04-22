<?php

function run()
{
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  
  $data = json_decode();
  
  if (!$data) {
    send_error('unavailable', 'The endpoint is unable to read its configuration file.');
  }
  
  $result = array();
  
  if(!isset($_GET['domain']) || !strlen($_GET['domain'])) {
    send_error('invalidParams', 'No domain provided.');
  }
  
  $doamin = strtolower($_GET['domain']);
}
>

