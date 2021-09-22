<form action="files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="picture">
    <br>
    <input type="submit" value="Войти" name="enter">
    <br>
    <input type="hidden" name="MAX_FILE_SIZE" value="8*1024*1024">
</form>

<?php
    if(isset($_POST['enter'])) {
        echo '<img src="img\2.png">';
        move_uploaded_file($_FILES['picture']['tmp_name'],'img\2.png');
    }
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
?>