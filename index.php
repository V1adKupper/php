
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8" />
<title>Название сайта</title>
</head>
<body>



</body>
<script type="js/script.js"></script>
</html>




<?php 

$arr = array(41,22,46,0,-2,-3,41,0,-17,-1); 
for ($i = 0; $i < count($arr); $i++) {   
    if ($i == 0) { 
        $max = $arr[$i]; 
    }  else { 
        if ($max < $arr[$i]) { 
            $max = $arr[$i]; 
        } 
    }  
} 
echo $max; 
?>  
