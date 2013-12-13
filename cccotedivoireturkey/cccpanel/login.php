<?php include 'header.php'; ?>

<div class="wrapper">

    <div class="container">
        <!-- LOGIN FORM -->
        <form method="post" action="in.php">
        <div class="loginLeft">

            <div class="loginTop"><span>Hesabın ile giriş yap</span></div>

            <div class="loginMiddle">

                <div class="userNameLayer">
                    <span>Kullanıcı adı:</span>
                    <div><input type="text" id="username" name="username" class="userNameInput"/></div>
                </div>

                <div class="passLayer">
                    <span>Parola :</span>
                    <div><input type="password" id="password" name="password" class="passwordInput"/></div>
                </div>

            </div>

            <div class="loginBottom">
                <span>Parolanımı unuttun?</span>
                <input type="submit" class="SubmitBtn" name="loginSubmitBtn" value=""/>
            </div>

        </div>
        </form>

        <div class="loginRight">

            <div class="loginTop"><span>Üye ol</span></div>

            <div class="loginMiddle">
                <span>
                    Sitenin üyeler özel kısımlarını kullanabilmek haber listemize katılmak
                    ve gelişmelerden haberdar olmak için üye olabilirsiniz.
                </span>
            </div>

            <div class="loginBottom">
                <a href="signin.php" name="loginSignBtn" class="SignBtn"></a>
            </div>

        </div>

    </div>
</div>
</body>
</html>