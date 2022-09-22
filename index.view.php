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
            <?php foreach($names as $i => $name) : ?>
                <?php if($i == 3): break; endif; ?>
                <!-- continue:  skips to the next iteration in the loop. -->
                <!-- break: jumps out of the loop and not processes any more of the remaining iterations. -->
                <li>
                    <strong><?= $name ?></strong>
                </li>
            <?php endforeach ?>
        </ul>

        <ul>
        <li>
            <strong><?= ucwords('title') ?>: </strong> <?= $task['title'] ?>
        </li>
        <li>
            <strong><?= ucwords('due') ?>: </strong> <?= $task['due'] ?>
        </li>
        <li>
            <strong><?= ucwords('assigned to') ?>: </strong> <?= $$task['assigned_to'] ?>
        </li>
        <li>
            <strong><?= ucwords('status') ?>: </strong> <?= $$task['completed']? 'Completed' : 'Incompleted' ?>
        </li>
        </ul>
    </header>

</body>
</html>