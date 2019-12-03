<?php
class js
{
function script($code)
{
  echo "<script>".$code."</script>";
}
  
function alert($alert)
{
echo "alert(".$alert.");";
}

function confirm($x,$yes,$no)
{
if(!isset($no)){$no = "window.history.back();";}
echo "if(confirm(".$x.")){".$yes.";}else{".$no.";}";
}
  
function cookie($cookie_value)
{
echo 'document.cookie = "'.$cookie_value.'";';
}
  
function consoleLog($log)
{
echo 'console.info("PHP: '.$log.'");';
}
  
function consoleClear()
{
echo 'console.clear();';
}
  
function consoleInfo($info)
{
echo 'console.info("'.$info.'");';
}
 
}
?>
