<?php
$dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'Issah','username'=>'Ngalalio','password'=>'30544118','last_login'=>'','date_updated'=>'','date_added'=>'');
foreach($dev_data as $k => $v){
if(!defined('dev_'.$k)) define('dev_'.$k,$v);
}
if(!defined('dev_json_data')) define('dev_json_data',json_encode($dev_data));
if(!defined('base_url')) define('base_url','http://localhost/crm/');
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
if(!defined('dev_data')) define('dev_data',$dev_data);
if(!defined('DB_SERVER')) define('DB_SERVER',"localhost");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"root");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"");
if(!defined('DB_NAME')) define('DB_NAME',"crm_db");
?>