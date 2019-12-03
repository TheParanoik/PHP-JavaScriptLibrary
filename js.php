<?php
class js
{
function alert($alert)
{
echo "<script> alert(".$alert."); </script>";
}

function confirm($x,$yes,$no)
{
if(!isset($no)){$no = "window.history.back();";}
echo "<script> if(confirm(".$x.")){".$yes.";}else{".$no.";} </script>";
}
  
function cookie($cookie_value)
{
echo '<script> document.cookie = "'.$cookie_value.'"; </script>';
}
  
function consoleLog($log)
{
echo '<script>console.info("PHP: '.$log.'"); </script>';
}
  
function consoleClear()
{
echo '<script> console.clear(); </script>';
}
  
function consoleInfo($info)
{
echo '<script>console.info("'.$info.'"); </script>';
}
 
}
?>
