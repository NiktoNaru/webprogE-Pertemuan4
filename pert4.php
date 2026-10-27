<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Copywriting</title>

    <link rel="stylesheet" href="style.css">

    <style>
        .sembunyi{
            display: none;
        }
        .kotak-info{
            background-color: #ffffff;
            padding: 15px;
            margin: 10px;
            border: 2px solid #1100ff;
            border-radius: 6px;
        }
        .btn-close{
            position: relative;
            top: 8px;
            right: 10px;
            border: none;
            background: none;
            font-size: 18px;
            cursor: pointer;
            color: #ff0000;
        }
        .btn-close:hover{
            color: #002fff;
        }

    </style>
</head>
<body>

<h2> Contoh text </h2>
<div class="flex-center">
<div class="kartu-profile">
    <h2>Nikto Naru</h2>
    <p>Web Desain</p>
    <button id="btndetail" onclick="info()" class="btn-detail">info lengkap</button>
</div>
</div>  

<div class="kotak-info sembunyi" id="infobox">
    <button onclick="tutupdetail()"class="btn-close">&times;</button>
    <h1> informasi detail</h1>
</div>


<script>
    function info (){
        //alert("Tombol Lengkap di ke clik");
        let info=document.getElementById("infobox");
        let btndetail=document.getElementById("btndetail");

        info.style.display = "block";
        btndetail.style.display = "none"
    }
    function tutupdetail (){
        //alert("Tombol Lengkap di ke clik");
        let info=document.getElementById("infobox");
        let btndetail=document.getElementById("btndetail");

        info.style.display = "none";
        btndetail.style.display = "inline-block"
    }
</script>
    
</body>
</html>