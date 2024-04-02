<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="reservation.css">
</head>
<body>
    <div id="wrap">
        <header>
            Reservation
            <nav class="login-nav">
                <div class="btn login-btn">로그인</div>
                <div class="btn join-btn">회원가입</div>
            </nav>
        </header>
        <section id="visual">
            <h2>Reservation Page</h2>
        </section>
        <section id="contents"></section>
        <footer>
            Footer
        </footer>
    </div>
    <form action="login-ok.php" method="post" class="login form">
        <ul>
            <li><h3>아이디</h3><input type="text" name="userid" id="userid" required></li>
            <li><h3>비밀번호</h3><input type="password" name="userpw" id="userpw" required></li>
            <li><h3>회원구분</h3>
                <select name="usergrade" id="usergrade">
                    <option value="g-admin">관리자</option>
                    <option value="g-manager">담당자</option>
                    <option value="g-user">일반회원</option>
                </select>
            </li>
            <li>
                <input type="submit" value="로그인" id="login-submit" class="btn">
                <input type="reset" value="취소" id="login-reset" class="btn">
            </li>
        </ul>
    </form>
    <form action="join-ok.php" method="post" class="join form">
        <ul>
            <li><h3>아이디</h3><input type="text" name="userid" id="userid" required><input type="button" value="중복확인" class="id_check"></li>
            <li><h3>비밀번호</h3><input type="password" name="userpw" id="userpw" required></li>
            <li>
            <li><h3>비밀번호 확인</h3><input type="password" name="userpw" id="userpw" required></li>
            <li><h3>회원구분</h3>
                <select name="usergrade" id="usergrade">
                    <option value="g-admin">관리자</option>
                    <option value="g-manager">담당자</option>
                    <option value="g-user">일반회원</option>
                </select>
            </li>
            <li><h3>캡챠</h3><img src="capcha.png" alt="capchar"><input type="text"></li>
            <li>
                <input type="submit" value="회원가입" id="join-submit" class="btn">
                <input type="reset" value="취소" id="join-reset" class="btn">
            </li>
        </ul>
    </form>
    <script src="jquery-1.12.3.js"></script>
    <script src="script.js"></script>
</body>
</html>