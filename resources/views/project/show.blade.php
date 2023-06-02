<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Proyectos</h2>
    <?php 
        echo "Usuario: ".$user->name."<br>";
        foreach ($projects as $project) {
            // echo "Proyecto: ".$project->name."<br>";
            foreach ($project->tasks as $task) {
                // echo "Tarea: ".$task->user_id."<br>";
                if ($task->user_id==$user->id){
                    echo "Proyecto: ".$project->id." ".$project->name."<br>";
                    break;            
                }
            }
            echo "<br>";
        }
    ?>
</body>
</html>
