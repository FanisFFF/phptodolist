<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname='todoapp';
$sql = "SELECT id,user,task FROM task WHERE user=user";
$db =  new mysqli($servername,$username,$password,$dbname);
$data = $db->query($sql);
$isOpen = false;
$module = '<h1>Hello worl</h1>';
?>
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
            <p><?php echo htmlspecialchars($task['task']); ?></p>
            <input type="text" name="delete" hidden value="<?php echo $task['id']; ?>">
            <button type="submit">x</button>
        </form>
    </li>
<?php endforeach; ?>
  </ul>
