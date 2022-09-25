<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>

        <ul>

            <?php foreach($tasks as $task) : ?>

                <li>

                    <?php if($task->completed): ?>

                        <s><?= $task->title . ' : ' . $task->description ?></s>

                    <?php else: ?>

                        <?= $task->title . ' : ' . $task->description ?>

                    <?php endif; ?>

                </li>

            <?php endforeach ?>
            
        </ul>

    </header>

</body>
</html>