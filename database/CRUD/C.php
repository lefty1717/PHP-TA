<?php
    $user_id = $_POST['user_id'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // upload file
    if ($_FILES['photo']['error'] === UPLOAD_ERR_OK){
      
        # 檢查檔案是否已經存在
        if (file_exists('upload/' . $_FILES['photo']['name'])){
          echo '檔案已存在。<br/>';
        } else {
          $file = $_FILES['photo']['tmp_name'];
          $dest = 'file_upload/' . $_FILES['photo']['name'];
      
          # 將檔案移至指定位置
          move_uploaded_file($file, $dest);
        }
      } else {
          echo '錯誤代碼：' . $_FILES['photo']['error'] . '<br/>';
          
      }
      ?>
      <?php 
      if($_FILES['photo']['type']=="image/jpeg"){
          ?>
          <img src="<?php echo $dest?>">
          
      <?php 
      }else{
              ?>
      <video src="<?php echo $dest?>" controls></video>

    $connect = require_once('../db_setting.php');
    $sql = "INSERT INTO test_table (user_id, age, email, phone) VALUES('$user_id', '$age', '$email', '$phone')";
    if(mysqli_query($connect, $sql)){
        echo "insert success<br>";
        echo mysqli_info($connect);
        header("refresh: 3; url=C.html");
    }
    else{
        echo "insert fail<br>";
        echo mysqli_errno($connect);
        header("refresh: 3; url=C.html");
    }

    mysqli_close($connect);