<!DOCTYPE html>
<html>
<head>

    <title>Document</title>
   
</head>
<body>
  
    <ul>
        <?php foreach ($person as $key => $feature): ?>
            <li><strong><?=$key?></strong> <?=$feature?></li>
        <?php endforeach ?>

    </ul>


</body>
</html>