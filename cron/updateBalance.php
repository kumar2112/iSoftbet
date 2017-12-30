<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "isoftbet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$customerSql="SELECT id from customer";
$customerResult = $conn->query($customerSql);
if ($customerResult->num_rows > 0) {
    while($row = $customerResult->fetch_assoc()) {
          // Get the Total of all Credits of Customer
          $totalCreditSql="SELECT SUM(amount) as totalCredit FROM transaction WHERE transaction_type='C' AND customer_id=".$row['id'];
          $totalCreditResult=$conn->query($totalCreditSql);
          $totalCredits = $totalCreditResult->fetch_assoc();
          $totalCredit=$totalCredits['totalCredit'];

          // Get the Total of all Debits of Customer
          $totalDebitSql="SELECT SUM(amount) as totalDebit FROM transaction WHERE transaction_type='D' AND customer_id=".$row['id'];
          $totalDebitResult=$conn->query($totalDebitSql);
          $totalDebits = $totalDebitResult->fetch_assoc();
          $totalDebit=$totalDebits['totalDebit'];

          if($totalCredit || $totalDebit){
                echo $custBlncUpdateSql="UPDATE customer SET balance=".($totalCredit-$totalDebit)." WHERE id=".$row['id'];
                echo "<br>";
                if ($conn->query($custBlncUpdateSql) === TRUE) {
                    echo "Balance Updated Successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
          }


    }
}
$conn->close();
