<?php



function scapeRoom()
{
    $lock = 1;
    while($lock)
    {
        $disk1 = inputInsertToArray();
        $disk2 = inputInsertToArray();

    
    
        
        $sum  = ($disk1[1]+$disk2[1])%10 . ($disk1[2]+ $disk2[2])%10 . ($disk1[3]+$disk2[3])%10;
    
        echo (string)$sum.PHP_EOL;
        if ($sum % 6 == 0 and strlen((string)$sum) == 3 )
            {
            echo 'Boro joloo :)' . PHP_EOL;
            return  $lock = 0;
            }
        else
            echo 'Gir oftadi :(' . PHP_EOL;
    }

}


function inputInsertToArray()
{
    $input = readline();
    for ($i = 0; $i <= 4; $i++) {
        $disk[4 - $i] = $input % 10;
        $input =  $input / 10;
    }
    return $disk;
}
scapeRoom();