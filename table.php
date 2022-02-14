<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .header{
            width:100%;
            height:90px;
        }

        h1{
            color:blue;
            text-align:center
        }

        table{
            margin:auto;
        }

        .reponse{
            color:red;
        }

        
    </style>

        <!--Tittle header container-->

<div class="header">
        <H1>Formulaire validation Email</H1>
</div>
        <!--JS email verification-->
<script>
    function valider(){

        var email = document.form.email.value;

        var verif = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.a-z]+)?$/;
            

        if(!verif.test(email)){
            alert("Email invalide")
            return false;
        }
        else{
            return true;
            
        }
    }

</script>

  <div id="formulaire">
        <form name="form" method="POST" action="table.php?submit=1">
            <table id="table-1">
                <tr>
                    <td> <label for="email">Email</label>  </td>
                    <td> <input type="text" name="email" placeholder="tapez votre Email" id="text"> </td>
                </tr>
                
                <br>

                <tr>
                    <td></td>
                    <td> <button type="submit" name="submit" value="submit" class="bouton" onclick="return valider()">Submit</button></td>
                </tr>
        </form>
    </div>


                <tr>
                    <td></td>

                    <td class="reponse">
                        <?php
                            if (isset($_POST['submit'])){

                            echo "L'email ".$_POST['email']." est valide!";      
        
                            }
                        ?>
                    </td>
                </tr>
    </table>



</body>
</html>