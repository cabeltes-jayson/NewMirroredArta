<?php
include 'config.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $searchQuery = "
    SELECT 
        m.member_id,
        m.fname,
        m.mname,
        m.lname,
        m.extension,
        b.brgy_name,
        m.regdate,
        m.occupation,
        m.beneficiary_type
    FROM 
        member_tbl m
    INNER JOIN 
        brgy_tbl b
    ON 
        m.brgy_id = b.brgy_id
    WHERE 
    (
        CONCAT(m.fname, ' ', m.mname, ' ', m.lname, ' ', m.extension) LIKE '%$query%' OR
        CONCAT(m.fname, ' ', m.mname, ' ', m.lname) LIKE '%$query%' OR
        CONCAT(m.fname, ' ', m.lname) LIKE '%$query%' OR
        CONCAT(m.fname, ' ', m.mname) LIKE '%$query%' OR
        m.fname LIKE '%$query%' OR 
        m.mname LIKE '%$query%' OR  
        m.lname LIKE '%$query%' OR  
        brgy_name LIKE '%$query%' OR  
        occupation LIKE '%$query%' OR  
        m.extension LIKE '%$query%'
    )
    OR 
    (
        CONCAT(m.fname, ' ', m.lname) LIKE CONCAT('%', REPLACE('$query', ' ', '%'), '%')
    )
    ORDER BY 
        m.member_id ASC";
    
    $result = mysqli_query($conn, $searchQuery);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_array($result)) {
        $suggestion = $row['fname'] . " ".$row['mname'] . " "  . $row['lname']. " "  . $row['extension'];
        echo "<li>" . htmlspecialchars($suggestion) . "</li>";
    }
}
?>
