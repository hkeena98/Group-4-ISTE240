<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Zesty Penguin</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>../assets/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,900" rel="stylesheet">
    <script src="../assets/js/menuhider.js"></script> 
    <script src="<?php echo $path;?>../assets/js/menuhider.js"></script> 
    <script src="<?php echo $path;?>../assets/js/dropdown.js"></script> 
    <script>
        window.onscroll = function(){
            var count = 300;
            var main = document.getElementById('main');
            var x = main.scrollTop;
            console.log(x);
            if (count < x) {
                    document.getElementById(mainText).style.color="blue";
            }
        }
        
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("quickTop").style.display = "block";
                document.getElementById("head").style.display = "none";
            } 
            else {
                document.getElementById("quickTop").style.display = "none";
                document.getElementById("head").style.display = "block";
            }
        }
    
    </script>
</head>
<body>