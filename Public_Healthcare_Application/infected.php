<!DOCTYPE html>
<html>
    <head>
        <title>Infected Table</title>
        <link rel="stylesheet" type="text/css" href="cssCommon.css">
        <style>
            /* CSS for the table */
            table {
                font-family: Arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                margin-top: 20px;
            }
            
            td, th {
                border: 1px solid #ddd;
                text-align: center;
                padding: 8px;
            }
            
            th {
                background-color: #4CAF50;
                color: white;
            }
            
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            
            /* CSS for the headings */
            h1 {
                font-size: 36px;
                text-align: center;
                margin-top: 50px;
            }
            
            h3 {
                font-size: 24px;
                margin-top: 30px;
            }
            
            /* CSS for the links */
            a {
                color: #008CBA;
                text-decoration: none;
            }
            
            a:hover {
                text-decoration: underline;
            }
  
        </style>
    </head>
    <body>
        <h1>Infected</h1>
        <h3><a href="index.php">Back to Home Page</a></h3>
        <h3><a href="infectedNewEntry.php">Create a New Entry</a></h3>
        <table>
            <tr>
                <th>Infected ID</th>
                <th>Medicare Number</th>
                <th>Date</th>
                <th colspan="3">Actions</th>
            </tr>
            <?php
                 $servername = "xac353.encs.concordia.ca";
                 $username = "xac353_4";
                 $password = "COMP2023";
                 $db_name = "xac353_4";
                 
                 // Connecting to the database
                 $conn = new mysqli($servername, $username, $password, $db_name);
     
                 //Check connection
                 if(!$conn){
                     echo "Connection Error..!!" . mysqli_connect_error();
                 }
     
                 // Write sql query for all the tables
                 $sql = "SELECT * FROM infected;";
     
                 // Make query and get results.
                 $result = mysqli_query($conn, $sql);
     
                 // Fetch the resulting rows as an array.
                 $tables = mysqli_fetch_all($result,MYSQL_ASSOC);
                 // Display list of tables
                 if (mysqli_num_rows($result) > 0) {
                     echo "<tr>";
                     foreach ($tables as $row) {
                        $inf_id = $row['inf_id'];
                        $medicare_number =  $row['medicare_number'];
                        $date = $row['date'];
                        foreach($row as $col){
                            echo "<td>" . $col ."</td>";
                        }
                        echo "<td><form action='infected.php' method='post'><input type=text value='" . $inf_id . "' name='inf_id'  hidden><input type=text value='" . $medicare_number . "' name='med_num'  hidden><input type=text value='" . $date . "' name='date'  hidden><input type='Submit' name='Submit' value = 'DELETE'></form>";
                        echo "</tr>";
                     }

                     if (isset($_POST['Submit'])){
                        $inf_id = $_POST['inf_id'];
                        $medicare_number = $_POST['med_num'];
                        $date = $_POST['date'];
                        $sql = "delete FROM infected where inf_id = '$inf_id' AND medicare_number = '$medicare_number' AND date='$date';";
                        echo "<script>alert('Value has been deleted..!!');</script>";
     
                        // Make query and get results.
                        mysqli_query($conn, $sql);
                     }
                     
                 } else {
                        echo "No tables found";
                 }
     
                 // Free Result from memory.
                 mysqli_free_result($result);
     
                 // close connection
                 mysqli_close($conn);
            ?>
        </table>
    </body>
</html>