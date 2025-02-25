<!--view/todo.php-->
<?php require __DIR__ . '/partials/header.php';?>
<body>
<?php require __DIR__ . '/partials/navigation.php';?>
<form method='post'>
    <h1>form</h1>
    <input type='text' name='task'/>
    <input type='submit' value='Submit'/>
</form>
  <ul>
  <?php foreach($data as $task): ?>
    <li >
        <form method="post" style="display: flex; align-items:center;gap:1rem;">
            <input type="hidden" name="_METHOD" value="DELETE" />
            <p><?php echo htmlspecialchars($task[1]); ?></p>
            <input type="text" name="delete" hidden value="<?php echo $task[0]; ?>">
            <button type="submit">x</button>
        </form>
    </li>
<?php endforeach; ?>
  </ul>
