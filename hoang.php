<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./ckeditor1/ckeditor.js"></script> 
</head>
<body>
        <?php
            include("./ck7/long.php");
            include("./ck7/main.php");
            include("./ck7/dashboard.php");
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        	<script>
		CKEDITOR.replace('editor', {
            height: 300,
            filebrowserUploadUrl: "/ckd1/ck7/ck8/ajaxfile.php?type=file",
            filebrowserImageUploadUrl: "/ckd1/ck7/ck8/ajaxfile.php?type=image",
      removeButtons: 'PasteFromWord'
        } );
	</script>
    </body>
</html>