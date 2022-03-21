<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        <?php
        
            // $conn = @mysqli_connect("localhost", "root", "");
            
            // $dbName = "website";

            // $select = @mysqli_select_db($conn, $dbName);
            // $sql = "SELECT * FROM barangwebtest";

            // $count = 0;
            // $id = array();
            // $query = @mysqli_query($conn, $sql);
            // while(($row = $query -> fetch_assoc()) !== NULL)
            // {
            //     $itemID = $row["namaBarangWeb"];

            //     if(!in_array($itemID, $id))
            //         array_push($id, $itemID);
            //     else
            //         $count++;
            // }

            // $index = array_rand($id, 5);

            // foreach($index as $i)
            //     echo "Nama item: " . $id[$i] . "</br>";

            // echo $count;

            function limit_text($text, $limit) {
                if (str_word_count($text, 0) > $limit) {
                    $words = str_word_count($text, 2);
                    $pos   = array_keys($words);
                    $text  = substr($text, 0, $pos[$limit]) . '...';
                }
                return $text;
            }
            
            $in = "ajjdhjashdjhajkdhajkfhajkhfjkahfjkhasjkhfa jkasfhjkahsfjkahsjkfhasjf";

            $out = strlen($in) > 20 ? substr($in,0,20)."..." : $in;
            echo $out;

            //$itemName = $_GET["itemName"];
           //echo $itemName;

            $string = $_POST["search"];

        ?>
    </body>
</html>