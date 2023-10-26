<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>user_id</td>
            <td>age</td>
            <td>email</td>
            <td>phone</td>
        </tr>
        <?php
        $result = [
            ["user_id" => "finn", "age" => "87", "email" => "dsfdf@gmail.com", "phone" => "09165164"],
            ["user_id" => "芬恩", "age" => "100", "email" => "asdf@gmail.com", "phone" => "87878787"],
        ];

        if (count($result) > 0) {
            foreach($result as $row) {
                // echo var_dump($row);
                ?>
                <tr>
                    <td><?php echo $row["user_id"] ?></td>
                    <td><?php echo $row["age"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["phone"] ?></td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</body>
</html>
