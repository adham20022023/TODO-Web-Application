<?php 
require_once 'php_actions/functions.php';
$tasks=view_tasks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <h1 class="top-heading">TODO List Application</h1>
    <div class="container">
        <form action="PHP_Actions/add_task.php" method="POST">
        <div class='input-container'>
            
            <input <?php if(!empty($_GET['error'])):?>style="border:2px dashed orange" value="Empty Field"<?php endif;?>   type="text" name="task" id="inputbox" >
            <button type="submit" name="add" id="add">ADD</button>
        </div>
        </form>
        <?php if(!empty($tasks)): ?>
        <ul class="list">
            <?php foreach ($tasks as $task): ?>
            <li class="item">
                
                <p><?php echo $task['Task'] ?></p>
                <form action="PHP_Actions/check.php" method="POST">
                        <?php if($task['status']=="NO"): ?>
                        <button type="submit" name="check" id="check" value='check'><i class="fa-sharp fa-regular fa-circle-check fa-lg" style="color: #eb770a;"></i></button>
                        <?php else: ?>
                            <i style="color: #eb770a;" class="fa-solid fa-circle-check fa-lg"></i>
                        <?php endif; ?>
                        <input type="hidden" name="id" value="<?php echo $task['ID'] ?>">
                </form>
                <form action="PHP_Actions/delete.php" method="POST">
                    <button type="submit" name="delete" id="Delete"><i style="color:orange" class="fa-solid fa-trash"></i></button>
                    <input type="hidden" name="id" value="<?php echo $task['ID'] ?>">
                </form>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</body>
</html>
