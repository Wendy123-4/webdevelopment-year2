<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query3 = "SELECT * FROM `form1` WHERE CONCAT(`candidate_name`, `contact`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query3);

}
 else {
    $query3 = "SELECT * FROM `form1`";
    $search_result = filterTable($query3);
}

// function to connect and execute the query
function filterTable($query3)
{
    $connect = mysqli_connect("localhost", "root", "", "multi_login");
    $filter_Result = mysqli_query($connect, $query3);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <form action="view.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br><br><br>

            <table style="text-align:center">
                <tr>
                    <th>Candidate</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>About Yourself</th>
                    <th>Interests</th>
                    <th>Why ASA</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['candidate_name'];?></td>
                    <td><?php echo $row['candidate_email'];?></td>
                    <td><?php echo $row['contact'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['about_yourself'];?></td>
                    <td><?php echo $row['interests'];?></td>
                    <td><?php echo $row['why_asa'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>

    </body>
</html>

