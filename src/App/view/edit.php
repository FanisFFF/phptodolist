<p><?php echo $data[0][1] ?></p>
<form method='post'>
    <h1>Edit</h1>
    <input type="text" name="id" hidden value="<?php echo $data[0][0]; ?>">
    <input type='text' name='task'/>
    <input type='submit' value='Edit'/>
</form>