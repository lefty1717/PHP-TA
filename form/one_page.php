<?php
    $username=$password=$gender=$birth=$age="";
    $usernameErr=$passwordErr=$genderErr=$birthErr="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST["submit"])){
            if(empty($_POST["username"])){
                $usernameErr="請輸入名字";
            }
            else{
                $username=$_POST["username"];
            }

            if(empty($_POST["password"])){
                $passwordErr="請輸入密碼";
            }
            else{
                $password=$_POST["password"];
            }

            if(empty($_POST["gender"])){
                $genderErr="請選擇性別";
            }
            else{
                if($_POST["gender"]=="male"){
                    $gender="男性";
                }else{
                    $gender="女性";
                }
            }

            if(empty($_POST["birth"])){
                $birthErr="請選擇出生年月日";
                $age=0;
            }
            else{
                $birth=$_POST["birth"];
                echo date("Y");
                echo date("Y",strtotime($birth));
                $age=date("Y") - date("Y",strtotime($birth));
            }
        }
    }
?>

<h1>Welcome <?php echo $username ?></h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
    姓名：<input type="text" name="username" placeholder="輸入姓名"> &nbsp <?php echo $usernameErr?><br><br>
    密碼：<input type="password" name="password" placeholder="輸入密碼"> &nbsp <?php echo $passwordErr?><br><br>
    性別：<input type="radio" name="gender" value="male">
        男 <input type="radio" name="gender" value="female">
        女  &nbsp&nbsp <?php echo $genderErr?><br><br>
    生日：<input type="date" name="birth">&nbsp <?php echo $birthErr?><br><br>
    <input type="submit" name="submit" value="送出">
</form

<?php
if (isset($_POST["submit"]) && !empty($username) && !empty($password) && !empty($gender) && !empty($birth)){
    echo "<h2>Hello ".$username."!</h2><br>";
    echo "你的密碼是：".$password."<br>";
    echo "你的性別是：".$gender."<br>";
    echo "你的生日是：".$birth."<br>";
    echo "你今年".$age."歲<br>";
}
echo "<h2>Hello ".$username."!</h2><br>";
echo "你的密碼是：".$password."<br>";
echo "你的性別是：".$gender."<br>";
echo "你的生日是：".$birth."<br>";
echo "你今年".$age."歲<br>";
?>