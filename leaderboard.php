<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Leader Board</title>
</head>
<body>
<table class="table table-bordered">
             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">Usename</th>
                     <th scope="col">Score</th>
                 </tr>
             </thead>
             <tbody>
  
         <?php
         $index = 0;
         foreach($list as $item){
             $index++;
             ?>
  
             <tr>
                 <th scope="row"><?php echo $index ?></th>
                 <td><?php echo $item['username'] ?></td>
                 <td><?php echo $item['score'] ?></td>
             </tr>
  
             <?php
         }
  
         ?>
             </tbody>
         </table>
</body>
</html>
