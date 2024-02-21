<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KOUIZE</title>
<link rel="stylesheet" href="style.css">
<script src="https://cdn.tailwindcss.com"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>

<?php

include 'layout/header.php';


include 'layout/banner.php';


include 'layout/question.php';


?>

<script>
    function sidebar(e){
        let list = document.querySelector("ul");
        e.name === "menu"
        ? ((e.name ="close"),
        list.classList.add("top-[80px]"),
        list.classList.add("opacity-100"))
        : ((e.name = "menu"),
        list.classList.remove("top-[80px]"),
        list.classList.remove("opacity-100"));
    }
</script>
</body>
</html>
