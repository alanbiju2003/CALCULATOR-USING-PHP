<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="cal.css">
</head>

<body>


    <div class="formbox">
        <form action="cal.php" method="post">
            <div class="heading">

                CALCULATOR

            </div>

            <div class="textboxnum">
                NUMBER 1 :<input type="number" name="num1" placeholder="ENTER A NUMBER"> <br><br>
                NUMBER 2 :<input type="number" name="num2" placeholder="ENTER A NUMBER"><br><br>
            </div>

            <div class="selectoperator">

                <select name="operation" id="">
                    <option value="ADD">ADD</option>
                    <option value="SUB">SUB</option>
                    <option value="MULTI">MULTI</option>
                    <option value="DIVIDE">DIVIDE</option>

                </select>


            </div>

            <br><br>
            <div class="calculates">

                <input type="submit" value="CALCULATE" name="submit">

            </div>
            <div class="answerp">
                <p>
                    <?php
            
           



        if(isset($_POST['submit'])){

            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
   
        $opera=$_POST['operation'];
          
            switch ($opera) {
             case 'ADD':
            $num3= $num1 + $num2;
            echo $num3;
                break;

                case 'SUB':
                    $num3= $num1 - $num2;
                    echo $num3;
                        break;
 
                        case 'MULTI':
                            $num3= $num1 * $num2;
                            echo $num3;
                                break;                        

                                case 'DIVIDE':
                                    $num3= $num1 / $num2;
                                    echo $num3;
                                        break;

                
                
            default:
                echo "hi alan";
                    break;
            }
            


            
        }



        ?>
                </p>

            </div>
        </form>


    </div>
</body>


</html>