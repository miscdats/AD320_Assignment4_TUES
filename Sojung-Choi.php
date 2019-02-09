<!DOCTYPE html>
<html>
    <head>
    <title>Sojung Choi, NSC Winter 2019</title>
    <?php
        require "testData.php";
    ?>  
    </head>

    <style>  
        #navButton {
            width: 15%;
            border:1px #222 solid;
            text-align:center;
            margin:0px 1px 0px 1px;
            padding:2px;
        }
        
        #pageHead {
            width:90%;
            background-color:#999;
            padding:5px; 
            float:left;
        }
        
        #wrapper {
            width:90%;
        }
        
        #outputRow {
            display:block;
            border: 1px solid black;
            padding-left:10px;
            margin:5px;
            width:50%;
            float:left;
            clear:both;
            
        }
        
        h1 {
            font-size: 1.5em;
            font-family:sans-serif;
            color:#666;
            text-align:center;
        }
        
        h3 {
            font-size: 1.1em;
            font-family:sans-serif;
            color:#666;
        }
    </style>
    
    <body>
    <h1>
    Sojung Choi Assignment 4, AD320_TUES
    </h1>
        <div id='pageHead'>
        <span id="navButton">Fake Nav Button 1</span>
        <span id="navButton">Fake Nav Button 2</span>
        <span id="navButton">Fake Nav Button 3</span>
    </div>
    <div id="wrapper">
     

    <?php
        $array = get2dArray();
        $rowBeg = "<div id='outputRow'>";
        $rowEnd= "</ul></div><br>";
        
         
        while (list($var, $val)=each($array)){
            $size = sizeOf($val);
            echo $rowBeg;
            echo "<h3>" . $var . "</h3><ul>";
            for ($i=0; $i<$size; $i++){
                echo "<li>" . $val[$i] . "</li>";
            }
            echo $rowEnd;
        }
    ?>
        
    
    </div> <!--end wrapper-->
        
    </body>
    
    
</html>




