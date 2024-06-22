/* قواعد البيانات:
للطلبة
-ID
-name
-email
-GPA
-assigned_course

للدورات
-ID
-title
-description
-instructor

مع مراعاة الحروف الكبيرة والصغيرة
*/


<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "learnowl";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "Connection Falied !";
}
