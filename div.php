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

        <h1>Formulaire validation Email</h1>

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
                    <input type="text" name="email" placeholder="tapez votre Email" id="text"> 
    </div>          
            <br>
            

    <div class="item3">       
            <button type="submit" name="submit" value="submit" class="bouton" onclick="return valider()">Submit</button>
            
        </form>
 
    </div> 

    <div class="item4"></div>
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
            background:#FFE;
            color:blue;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        h1{
            color:blue;
            font-family: 'Lato', sans-serif;
        }

        .formulaire{
            width:600px;
            height:100px;
          /*  border:solid 1px black; */
            margin:auto;
            display:grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
        }

        .item1{
            text-align:right;
        }

        /*
        .item1{
            grid-column:1/2;
            grid-row:1/2;
        }
        .item2{
            grid-column:2/3;
            grid-row:2/3;
        }
        .item3{
            grid-column:3/4;
            grid-row:3/4;
        }
        .item4{
            grid-column:4/5;
            grid-row:4/5;
        }
        .item5{
            grid-column:5/6;
            grid-row:5/6;
        }
        .item6{
            grid-column:6/7;
            grid-row:6/7;
        }

      */

    </style>



</body>
</html>