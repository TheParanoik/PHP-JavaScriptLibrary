<?php
function js_alert($alert)
{
echo "<script> alert(".$alert."); </script>";
}

function js_confirm($x,$yes,$no)
{
if(!isset($no)){$no = "window.history.back();";}
echo "<script> if(confirm(".$x.")){".$yes.";}else{".$no.";} </script>";
}
function js_cookie($cookie_value)
{
echo '<script> document.cookie = "'.$cookie_value.'"; </script>';
}
function js_console-log($log)
{
echo '<script>console.info("'.$log.'"); </script>';
}
function js_console-clear()
{
echo '<script> console.clear(); </script>';
}
function js_console-info($info)
{
echo '<script>console.info("'.$info.'"); </script>';
}
?>
