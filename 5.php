<?php 

$q = "CREATE TABLE IF NOT EXISTS".$tab_name."(";
for($i=1;$i=$col;$i++){
    $q .= $col_name_$i."  ".$col_type.$i;
    if(isset($_post['val_$i'])){
        $q.="(".$POST['val_$i'].")";

    }
    if($i<$col){$q.=",";}
    else{$q.=")";}
}


?>