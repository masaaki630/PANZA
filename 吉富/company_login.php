<?php

  use Config\DirectorySettings;
  use Libs\App\Util\TmpEngine;
  use Libs\App\Util;

  require_once dirname(__DIR__,1).'/bootstrap.php';
  
  $view=new TmpEngine();
  $view->setTemplate($_SERVER['DOCUMENT_ROOT'].DirectorySettings::COMPONENTS_PATH.'login.tmp.php');

  $params=[
    'sys_file'=>$_SERVER['DOCUMENT_ROOT'].DirectorySettings::COMPONENTS_PATH.'system_message.php',
    'title'=>'システム',
    'toController'=>'company_login_check.php',
    'login_id'=>'company_email',
    'password'=>'company_password',
  ];

  $view->set_params($params);

  $view->show();

?>
