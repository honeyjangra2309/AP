<<html>
   <body>
     <form method="get">
     Enter number:<input type="text" name="no">
     <input type="submit" value="check">
     </form>
      <?php
         $data=$_GET["no"];
         $c=0;
         for($i=2;$i<=$data/2;$i++)
         {
             if($data%$i==0)
             {
                 $c++;
             }
         }
         if($c==0)
         echo"The number ".$data." is prime.";
         else
         echo"The number ".$data." is not prime.";
      ?>

   </body>
</html>