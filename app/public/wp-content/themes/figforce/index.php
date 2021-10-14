<?php
    function myfunction($hero,$heroin){
        echo "$hero  weds  $heroin"."<br>";  
    };

    myfunction('Ramki','Geetha');
    myfunction('Surya','Jyothika');
?>


<?php
    function myfunction2($name, $color){
        echo "<p>Hi, my name is $name and my favorite color is $color.</p><br>";
    }

myfunction2('john','blue');
myfunction2('Jane', 'green');
myfunction2('Ramki','red');

?>
<h2>
<?php 
bloginfo('name');

?>

</h2>