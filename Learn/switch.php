<?PHP

    $favColour = 'red';
    $result;
    
    switch ($favColour) {
        case 'red':
            $result = 'Your favourite colour is Red';
            break;
        
        case 'blue':
            $result = 'Your favourite colour is Blue';
            break;
            
        case 'green':
            $result = 'Your favourite colour is green';
            break;
            
        default:
            $result = 'Invalid colour';
            break;
    }

    
    echo($result);

?>
