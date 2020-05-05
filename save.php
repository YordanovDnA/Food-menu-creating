<?php
    ob_start();
    include_once 'config.php';
    //include database configuration file
    
    //get records from database
    $query = $conn->query("SELECT * FROM newtable");
    
    if($query->num_rows > 0){
        $delimiter = ",";
        $filename = "Menu" . date('Y-m-d') . ".csv";
        
        //create a file pointer
        $f = fopen('php://memory', 'w');
        
        
        
        //output each row of the data, format line as csv and write to file pointer
        while($row = $query->fetch_assoc()){
            
            $lineData = array( $row['Name'], $row['Gram'], $row['Price']);
            fputcsv($f, $lineData, $delimiter);
        }
        
        //move back to beginning of file
        fseek($f, 0);
        
        //set headers to download file rather than displayed
        header('Content-Encoding: UTF-8');
        echo "\xEF\xBB\xBF";
        header('Content-Type: text/csv; charset=utf-8' );
        echo "\xEF\xBB\xBF";
        header(sprintf( 'Content-Disposition: attachment; filename=my-csv-%s.csv', date( 'dmY-His' ) ) );
        echo "\xEF\xBB\xBF";
        ob_end_flush();
        
        //output all remaining data on a file pointer
        fpassthru($f);
    }
    exit;
    
    ?>

?>