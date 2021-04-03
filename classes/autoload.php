<?php
function classLoader($class){
  require_once PROJECT_ROOT.'/classes/'.str_replace('\\','/',$class.'.php');
}
spl_autoload_register('classLoader');
