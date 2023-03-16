
<html>
    <head>
        <link rel="stylesheet" href="Custom.css">
    </head>
    <body>
        <div class="Container">
            <h1>Đăng nhập</h1>
            <form action="Action_page.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <label>Tên</label>
                        </td>

                            <td><input type="Text" id="userName" name="userName"></td>
                    </tr>

                    <tr>
                        <td>
                            <label for="">Mật khẩu</label>
                        </td>

                        <td>
                                <input type="text" id="userPassword" name="userPassword">
                        </td>
                    </tr>
                </table>
                
                <div class="lgnButton">
                    <input value="submit" type="submit">submit</input>
                </div>

            </form>
            
        </div>
    </body>
</html>