<?php
/**
* Bobby Palmer, CSC-465, GNN-Earth
* Class constructs template for site-wide
* page footer.
*/

class Footer {

    public function getFooter() {
        return  <<<HTML
        
    <div id="login-user" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form method="get" action="">
                <div id="login-header">
                    <p>Welcome to</p>
                    <img src="./img/logo.png" alt="logo" class="logo-img">
                </div><br>
                <input class="modal-form" type="text" name="email" placeholder="Email address"><br>
                <input class="modal-form" type="password" name="password" placeholder="Password"><br>
                <input type="submit" name="login" value="Login"><br>
            </form>
            <p id="register-prompt">Don't have an account?</p>
            <button id="modal-register">Register</button>
        </div>
    </div>
    <div id="register-user" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <form method="get" action="">
                <div id="login-header">
                    <p>Register for</p>
                    <img src="./img/logo.png" alt="logo" class="logo-img">
                </div><br>
                <div class="input-area">
                    <input class="modal-form" type="text" name="registerEmail1" placeholder="Please enter your email address"><br>
                    <input class="modal-form" type="text" name="registerEmail2" placeholder="Please re-enter your email address"><br>
                </div>
                <div class="input-area">
                    <input class="modal-form" type="password" name="registerPassword1" placeholder="Please enter a password (8-30 characters)"><br>
                    <input class="modal-form" type="password" name="registerPassword2" placeholder="Please re-enter your password"><br>
                </div>
                <input type="submit" name="registerUser" value="Register"><br>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>

HTML;

    }

}

