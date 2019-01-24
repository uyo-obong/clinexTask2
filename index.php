
<?php
// Start the session
session_start();
if (!empty($_POST['name'])){
    $_SESSION['name'][] = $_POST['name'];
}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="bootstrap.css">
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4 card">
                    <h1 class="text-center card-header">Todo List</h1>
                    <form action="#" method="POST">                
                    <div class="form-group">
                    <input type="text" class="form-control " name="name" value="" aria-describedby="emailHelpId" placeholder="Enter Todo Task">
                    </div>
                    <button type="submit" class="btn btn-outline-success  " btn-lg btn-block">Add To List</button>
                    </form>

                <table class="table card-body">
                    <tr>
                        <th>Task</th>
                        <th></th>
                        <th></th>
                        <th>Delete</th>      
                    </tr>
                    <?php  if (!empty($_SESSION['name'])):?>
                    <?php  foreach ($_SESSION['name'] as $key => $items):?>
                            
                            <tr>
                                <tbody>
                                <td>
                                    <?php echo $items ?> 
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                <a class="btn btn-outline-danger" href="delete.php?id=<?php echo $key + 1 ?> ">DELETE</a>
                                </td>
                                </tbody>
                                 
                            </tr>
                        <?php endforeach ?>
                    <?php endif ?>
                </table>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>

 