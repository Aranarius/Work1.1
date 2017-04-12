<?php

echo "12345 <br/>";
$name = 'Alex';
$surname = 'Kolomietc';
$age =14
;
echo "My name is $name<br/>";
;
echo "My surname is $surname<br/>";
echo "$age<br/>";
echo '<br/>';

if( $age > 1 && $age< 7 )
{
    echo 'idi v dedsad';
}
elseif ( $age > 6 && $age< 19)
{
    echo "shkolnik";
}
elseif ( $age > 18 && $age < 61)
{
    echo "you are student or imployer(worker)";
}
elseif ($age > 60)
    {
        echo "go to the grave!";
    }

   /* switch( $age )
    {
        case 6;
        echo "v sadic";
        break;
        case 14;
        echo 'v school';
        break;
        case 20;
        echo 'v univer';
        break;
    }*/
    //for
echo '<br/>';
$i = 0;
for ($i=1; ;$i++ )
{
    if($i >100) {
        break;
    }
    echo "$i<br/>";
}
?>

