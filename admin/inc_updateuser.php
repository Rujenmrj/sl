<form method="post" name="updateuser" action="updateuserprocess.php" >
    <fieldset>
        <legend><?php "EDIT $uusername";?></legend>
        <input type="hidden" name="id" value=<?php echo $uid;?> readonly > <br>
        <input type="text" name="username" value=<?php echo $uusername;?> > <br>
        <input type="text" name="email" value=<?php echo $uemail;?> > <br>
        <input type="text" name="role" value=<?php echo $urole;?> > <br>
        <input type="text" name="status" value=<?php echo $ustatus;?> > <br>

        <input type="submit" name="updateuser" value="update">
        <input type="reset" name="reset" value="Clear">
</fieldset>
</form>