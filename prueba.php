<?php
$conn = pg_connect("host=localhost port=5433 dbname=ejemplo user=postgres password=admin");
//echo $dbconn3;
$arr = [];
if (!$conn) {
    echo "Ocurrió un error.\n";
    exit;
}else{
    $result = pg_query($conn, "SELECT * FROM editoriales");
    /*print_r($result);
    var_dump($result);

    print_r(pg_fetch_row($result));*/
    
    //var_dump(pg_fetch_row($result));
    
    //while ($row = pg_fetch_row($result)) {
    //    var_dump($row);
    //    //echo "Author: $row[0]  E-mail: $row[1]";
    //    //echo "<br />\n";
    //}

    //$arr = pg_fetch_array($result);
    //var_dump($arr);

    while ($data = pg_fetch_object($result)) {
        //header("Content-Type: application/json");
        //echo json_encode($data);
        array_push($arr, $data);
    }


    header("Content-Type: application/json");
    echo json_encode($arr);
    //$data = pg_fetch_object($result);
    //var_dump($data);

    //$arr = [];
    //array_push($arr, ["casa"=>3], ["patio"=>4]);
    //var_dump($arr);

}

?>