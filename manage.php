<!DOCTYPE html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자</title>
</head>
<body>
<form action="food_upload.php" method="post" enctype="multipart/form-data">
<fieldset>
<legend>브랜드 종류 업데이트</legend>
    <p><input type="text" name="foodName" placeholder="푸드이름이연"></p>
    <p>
        <label for="foodBrand">브란도 선택</label>
        <select name="foodBrand" id="foodBrand">
            <option value="">브랜드 선택ㄱㄱ</option>
            <option value="통합">통합</option>
            <option value="cu">cu</option>
            <option value="gs25">gs25</option>
            <option value="emart24">emart24</option>
            <option value="ministop">ministop</option>
            <option value="7-eleven">7-eleven</option>
        </select>
    </p>
    <p><input type="text" name="foodKinds" placeholder="푸드종류연"></p>
    <p><input type="text" name="foodExplain" placeholder="푸드설명"></p>
    <p><input type="text" name="foodTag" placeholder="푸드태그"></p>
    <p><input type="text" name="foodPrice" placeholder="푸드가격"></p>
    <p><input type="file" name="fileToUpload" id="fileToUpload"></p>
    <p><input type="submit" value="업로드" name="submit"></p>
</fieldset>

</form>
</body>
</html>