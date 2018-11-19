
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

$arr = array(1,45,3,4,5); 
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