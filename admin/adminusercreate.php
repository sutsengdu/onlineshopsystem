<?php include('../cdn.php') ?>
<form method="POST" action="adminusercreate_process.php" enctype="multipart/form-data">
	<input type="text" name="name" placeholder="Enter Username" class="form-control"><br>
    <input type="password" name="password" placeholder="Enter Password" class="form-control"><br>
    <input type="email" name="email" placeholder="Enter email" class="form-control"><br>
    <input type="file" name="photo"></br>
    <button type="submit" class="btn btn-secondary mt-2"><i class="fas fa-registered mr-1"></i>Submit</button>
</form>