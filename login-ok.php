<?php
    $id = $_POST["userid"];
    $pw = $_POST["userpw"];

    if($id == "admin" && $pw == "1234"){
        $_SESSION["userid"] = $id;
        $_SESSION["userpw"] = $pw;

        echo "
            <script>
                alert('관리자로 로그인 되었습니다.');
                location.href='reservation.php';
            </script>
        ";
    }else if($id == "manager" && $pw == "1234"){
        $_SESSION["userid"] = $id;
        $_SESSION["userpw"] = $pw;

        echo "
            <script>
                alert('담당자로 로그인 되었습니다.');
                location.href='reservation.php';
            </script>
        ";
    }else {
        $_SESSION["userid"] = $id;
        $_SESSION["userpw"] = $pw;

        echo "
            <script>
                alert('일반회원으로 로그인 되었습니다.');
                location.href='reservation.php';
            </script>
        ";
    }
?>