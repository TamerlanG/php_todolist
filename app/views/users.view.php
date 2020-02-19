<?php require('partials/head.php'); ?>
    <h1>All Users</h1>

    <form method="POST" action="/users">
        <input name="name" placeholder="name"/>
        <button type="submit"> Submit </button> 
    </form>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?= $user->name ?>
        <?php endforeach ?>
    </ul>
    
<?php require('partials/footer.php'); ?>