<?php
class js
{
function script($code)
{
  echo "<script>".$code."</script>";
}
  
function alert($alert)
{
return "alert(".$alert.");";
}

function confirm($x,$yes,$no)
{
if(!isset($no)){$no = "window.history.back();";}
return "if(confirm(".$x.")){".$yes.";}else{".$no.";}";
}
  
function cookie($cookie_value)
{
return 'document.cookie = "'.$cookie_value.'";';
}
  
function consoleLog($log)
{
return 'console.info("PHP: '.$log.'");';
}
  
function consoleClear()
{
return 'console.clear();';
}
  
function consoleInfo($info)
{
return 'console.info("'.$info.'");';
}
 
  //Ajax (DON'T WORK FOR MICROSOFT BROWSERS!)
  $ajax = array(
            "Name" => "",
            "Target" => "",
            "Type" => "POST",
            "Async" => true,
            "Data" => "",
            "onReadyState" => array('1' => '', '2' => '', '3' => '', 4 => '')
            );
  function ajaxConstructor($ajax){
    if(empty($ajax['Name'])){
      $ajax['Name'] = "xmlHttp";
    }
    if(
      echo $ajax['Name']." = new XMLHttpRequest();";
      
        if(!empty($ajax['onReadyState']['1'])){
            echo $ajax['Name']."onreadystatechange=function() {
             if (this.readyState==1 ) {".$ajax['onReadyState']['1']."}
            }";
        }
        if(!empty($ajax['onReadyState']['2'])){
            echo $ajax['Name']."onreadystatechange=function() {
             if (this.readyState==2) {".$ajax['onReadyState']['2']."}
            }";
        }
        if(!empty($ajax['onReadyState']['3'])){
            echo $ajax['Name']."onreadystatechange=function() {
             if (this.readyState==3 ) {".$ajax['onReadyState']['3']."}
            }";
        }
        if(!empty($ajax['onReadyState']['4'])){
            echo $ajax['Name']."onreadystatechange=function() {
             if (this.readyState==4 && this.status==200) {".$ajax['onReadyState']['4']."}
            }";
        }
      
      echo $ajax['Name'].".open(".$ajax['Type'].",".$ajax['Target'].",".$ajax['Async'].");
           ".$ajax['Name'].".send(".$ajax['Data']."); ";
  }
  
}
?>
