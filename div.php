<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

    <div class="header">

        <h1>FORMULAIRE VALIDATION EMAIL</h1>

    </div>

    <script>

    function valider(){

        let email = document.form.email.value;

        let verif = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.a-z]+)?$/;

        if(!verif.test(email)){

            alert("L'email est invalide")
            return false;
        }

        else{
            return true;
        }
    }

    </script>

    <div class="formulaire">

        <div class="item1">
                <form name="form" method="POST" action="div.php?submit=1">
                    <label for="email" class="label">Email</label>
        </div>

        <div class="item2">
                <input type="text" name="email" placeholder="Tapez votre Email" class="input">     
        </div>          
            
        <div class="item3"></div> 

 
        <div class="item4">
                <button type="submit" name="submit" value="submit" class="bouton" onclick="return valider()">Submit</button>
        </div>

        <div class="item5"></div>

        <div class="item6">
    
            <?php
                if (isset($_POST['submit'])){
                echo "L'email ".$_POST['email']." est valide!";      
                            }
                        ?>
        </div>



    </div>



    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        .header{
            width:100%;
            height:120px;
            background:black;
            color:blue;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        h1{
            color:white;
            font-family: 'Lato', sans-serif;
        }

        .label{
            font-size:18px;
            font-family:arial;
        }

        .input{
            width: 150px;
            height: 25px;
            border: solid 1px black;
            font-size:12px;
            text-align:center;
        
        }

        .formulaire{
            width:500px;
            height: 90px;
            margin:auto;
            margin-top:30px;
            display:grid;
            grid-template-columns: 30% 70%;
            grid-column-gap: 2px;
        }

        .item1{
            text-align:right;
        }

        .item6{
            font-family: 'Lato', sans-serif;
            color:red;
        }

        .bouton{
            width:150px;
            height:25px;
            font-size:15px;
            border: solid 1px black;
            background-color:#FFF;
        }

        .bouton:hover{
            background-color:black;
            color:white;
            transition:1s;
            cursor:pointer;
        }

    </style>



    </body>
</html>
