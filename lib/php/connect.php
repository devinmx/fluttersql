<?php
$connect = new mysqli("gantinamahostanda", "gantinamadatabaseanda","gantinamausernamemysql","gantipasswordmysqlanda");
if($connect){
    echo "Connection Succesfull";
} else {
    echo "Connection failed";
    exit();
}
?>