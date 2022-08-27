<form enctype="multipart/form-data" action="uploader.php" method="POST">
    Send this file: <input name="userfile" type="file"/>
    <input type="submit" value="Send File"/>
</form>

<?php
if ($handle = opendir('C:/xampp/htdocs/uploads/')) {
   while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != "..") {
            $filelist = '<li><a href="'.$file.'">'.$file.'</a></li>';
          }
       }
  closedir($handle);
  }
?>
<h1>File list:</h1>
<ul><?php echo $filelist; ?></ul>
