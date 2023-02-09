<?php

$conn = mysqli_connect('localhost','root','root','spin');

if(isset($_GET['item'])){
    // $column = '';
    // switch($_GET['item']){
    //     case 'T-shirt':
    //         $column = 'Tshirts';
    //         break;
    //     case 'Cap':
    //         $column = 'Caps';
    //         break;
    //     case 'Wristband':
    //         $column = 'FiftyBR';
    //         break;
    //     case '50 Br.':
    //         $column = 'Wristbands';
    //         break;
    // }
    $column = $_GET['item'];
    mysqli_query($conn,'update counter set '.$column.' = '.$column.' + 1');
}

$query = mysqli_query($conn,'select * from counter');
while($row = mysqli_fetch_array($query)){
    print_r($row);
}


// if(isset($_GET)){
//     //mysqli_query($conn,'insert into counter values(1)');
//     return 1;//$_GET['item'];
// }

?>