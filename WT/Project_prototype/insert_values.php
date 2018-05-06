<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//$sql = "ALTER TABLE car_details ADD COLUMN company VARCHAR(30) NOT NULL";
//$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Honda','Amaze','Sedan',560000,95)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Maruti','Baleno','Hatchback',540000,70)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Maruti','Ciaz','Sedan',800000,95)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Honda','City','Sedan',880000,95)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Honda','Civic','Sedan',1350000,95)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Hyundai',' Creta',' SUV',930000,100)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Ford','Ecosport','SUV',730000,100)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Ford','Endeavour','SUV',2500000,100)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Ford','Fiesta','Sedan',650000,95)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Ford','Figo','Hatchback',480000,70)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Mahindra','KUV100','Hatchback',450000,70)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Maruti','Swift','Hatchback',490000,70)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Mahindra','XUV500','SUV',1260000,100)";
$conn->query($sql);
$sql = "INSERT INTO car_details (company,model_name,type,price,rent) VALUES ('Mahindra','Scorpio','SUV',1000000,100)";
$conn->query($sql);
$conn->close();
?>
