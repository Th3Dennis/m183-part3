<br>
<br>

<?php
$email = '';
if (isset($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
}
?>
<div class="registerModal">
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100 card-bg-grey" ;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <form class="bg-white  rounded-5 shadow-5-strong p-5" action="./controller/registerController.php" method="post">
                            <legend>Register</legend>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="EmailField" class="form-control" name="email" value="<?= htmlspecialchars(
                                    $email
                                ) ?>" required />
                                <label class="form-label" for="EmailField">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="PasswordField" class="form-control" name="password" required/>
                                <label class="form-label" for="PasswordField">Password</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="repeatPassword" class="form-control" name="passwordConfirm" required/>
                                <label class="form-label" for="repeatPassword">Repeat Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col">
                                    <!-- Simple link -->
                                    <a>Already have an account? </a><a href="./login.php">Login</a>
                                </div>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>