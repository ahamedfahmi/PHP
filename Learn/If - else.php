<?PHP

    $mark = (int)readline("Enter the marks : ");
    $result;
    
    if ($mark >= 75) {
        // code...
        $result = 'A';
    }
        
    elseif ($mark < 75 and $mark >= 65 ) {
        // code...
        $result = 'B';
    }
    elseif ($mark < 65 and $mark >= 55)
    {
        $result = 'B-';
    }
    elseif ($mark < 55 and $mark >= 45)
    {
        $result = 'C';
    }
    else 
    {
       $result = 'Fail';
    }
    
    echo($result);

?>
