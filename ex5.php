<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Itim&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    <body> {
  font-family: "Noto Sans Thai", sans-serif;
  font-style: normal;

}
</style>
    </body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ตัวอย่าง 2 </title>
</head>

<body>
    <h1> ทดสอบการรับค่าผ่าน Method POST </h1>
    <?php
        echo "ชื่อคุณคือ ".$_POST["name"];
        echo "  นามสกุลคุณคือ     ".$_POST["surname"];

    ?>
</body>
</html>