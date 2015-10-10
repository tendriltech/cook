<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="cook.css" type="text/css">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $ingCount =10;
        $stepCount=10;
        ?>
        <form action="collect_vals.php" method="POST">
        <div class="box">
                <h1> Contact Form : </h1>
 <label><span> Full name </span>
                        <input type="text" class="input_text" name="name" id="name"/>
</label>
<label> <span> Email </span>
                       <input type="text" class="input_text" name="email" id="email"/>
</label>
                <label>
                        <span> Subject </span>
                        <input type="text" class="input_text" name="subject" id="subject"/>
                </label>
                <label>
                         <span> Post </span>
                        <textarea class="message" name="feedback" id="feedback"> </textarea>
                        <input type="button" class="button" value="send" />
                </label>
        </div>
           
           <div class="ingbox">
               <h1> Ingredients: </h1>
       <?php
      for ($ing = 0; $ing < $ingCount; $ing++) {
   
       ?>
               <label >
                   <span class="idx">
                       (    
           <?php
             echo "$ing" +  "     ";
             ?> )   
                        Name : 
   </span>
                       <input type="text" class="input_text" name="ingname[]" />
                       
                       Qty : <input type="text" class="input_text_small" name="ingqty[]" />
Description : <input type="text" class="input_text" name="ingdesc[]" />
                       
                 </label>    
               
           
       <?php 
     echo '<input type="hidden"  name="ingorder[]"  value= "' .$ing. '"/>';
      }
     
       ?>
                   
       </div>
            
            <div class="stepbox">
               <h1> Instructions : </h1>
       <?php
      for ($ing = 0; $ing < $stepCount; $ing++) {
   
       ?>
               <label >
                   <span >
                       Step  
           <?php
             echo "$ing" +  "     ";
             ?> )   
                        
   </span>
                   <input type="text" size="55px" class="input_text_desc" name="instructiondesc[]" />
                       
                       

                       
                 </label>    
               
           
       <?php 
     echo '<input type="hidden"  name="instructionorder[]"  value= "' .$ing. '"/>';
      }
     
       ?>
                   
       </div>
        </form>
    </body>
</html>
