<?php
// تأسيس اتصال قاعدة البيانات
$servername = "localhost";
$username = "rooot" ;
$password = "root";
$dbname = "saave";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli(localhost,rooot, root, saave);

// التحقق من اتصال قاعدة البيانات
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// استقبال المتغير من نوع GET
$value = $_GET['قيمة'];

// تحضير استعلام SQL لإدخال القيمة في قاعدة البيانات
$sql = "INSERT INTO GET VALUES ('$value')";

// تنفيذ استعلام SQL
if ($conn->query($sql) === TRUE) {
    echo "تم تخزين القيمة بنجاح في قاعدة البيانات";
} else {
    echo "حدث خطأ أثناء تنفيذ الاستعلام: " . $conn->error;
}

// إغلاق اتصال قاعدة البيانات
$conn->close();
?>

