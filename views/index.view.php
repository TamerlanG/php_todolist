<?php require('partials/head.php'); ?>
    <h1>To Do List</h1>

    <form method="POST" action="/add-task">
        <input name="title" placeholder="title"/>
        <button type="submit"> Submit </button> 
    </form>
    <ul>
        <?php foreach($tasks as $task): ?>
            <li><?= $task->description ?>
        <?php endforeach ?>
    </ul>
    
<?php require('partials/footer.php'); ?>