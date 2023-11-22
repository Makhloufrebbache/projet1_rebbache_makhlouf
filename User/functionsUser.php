<?php
/*Fonction de création dun utilisateur dans la base de données*/
function createUser( $data)
 {
    global $conn;
    $query = "INSERT INTO user VALUES (NULL,?,?,?,?,?,'','','',3)";
    if ($stmt = mysqli_prepare($conn, $query)) {
       
        mysqli_stmt_bind_param(
            $stmt,
            "sssss",
            $data['user_name'],
            $data['email'],
            $data['pwd'],
            $data['fname'],
            $data['lname'],
        );

        $result = mysqli_stmt_execute($stmt);
    }
}

?>



