<?php
$target_dir = "foodimg/"; // 업로드 폴더 위치
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // 업로드 파일 위치
$uploadOk = 1;  // 0 = 에러 , 1 = 업로드 
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// 진짜,가짜 이미지 체크
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "이미지 파일이 맞습니다 - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "이미지 파일이 아닙니다.";
        $uploadOk = 0;
    }
}
// 이파일이 존재하는지
if (file_exists($target_file)) {
    echo "파일이 이미있습니다.";
    $uploadOk = 0;
}
// 파일사이즈 확인
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "파일이 너무큽니다.";
    $uploadOk = 0;
}
// 특정 파일 형식 허용
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "미안하지만 JPG, JPEG, PNG & GIF 파일만 허용된다.";
    $uploadOk = 0;
}
// 체크 $uploadOk 0 일때 에러 발생
if ($uploadOk == 0) {
    echo "미안하지만, 파일이 업로드되지 않았음.";
// if everything is ok, try to upload file
} else {
    $foodName = $_POST['foodName'];
    $foodBrand = $_POST['foodBrand'];
    $foodKinds = $_POST['foodKinds'];
    $foodExplain = $_POST['foodExplain'];
    $foodTag = $_POST['foodTag'];
    $foodPrice = $_POST['foodPrice'];
    $conn = mysqli_connect('127.0.0.1','root','123456','store') or die("fail");
    $sql = "INSERT INTO foodkinds (foodName,foodBrand,foodKinds,created,imgurl,foodExplain,foodTag,foodPrice) 
    VALUES('{$foodName}','{$foodBrand}','{$foodKinds}',now(),'{$target_file}','${foodExplain}','{$foodTag}','{$foodPrice}')";
    $result = mysqli_query($conn,$sql);
    //move_uploaded_file-> 파일업로드 함수
    if($result){
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "이 파일 ". basename( $_FILES["fileToUpload"]["name"]). " 업로드 완료.";
            echo "<input type=\"text\" onclick=\"location.href='managed.php'\" value=\"돌아가기\">"
        } else {
            echo "죄송합니다, 파일을 업로드하는 동안 오류가 발생함.";
        }
    }else{
        echo "죄송합니다, 파일을 업로드하는 동안 오류가 발생함.";
    }
    
}
?>
