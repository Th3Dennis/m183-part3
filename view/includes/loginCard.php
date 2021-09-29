<div class="loginModal">
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100 card-bg-grey">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-md-8">
                        <form class="bg-white  rounded-5 shadow-5-strong p-5" action="./controller/loginController.php" method="post">
                        <p><?= isset($_SESSION['errorMessage']) ? $_SESSION["errorMessage"] : "" ?></p>    
                        <legend>Login</legend>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control" required/>
                                <label class="form-label" for="email">Email Address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="Password" name="password" class="form-control" required/>
                                <label class="form-label" for="Password">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col">
                                    <!-- Simple link -->
                                    <a>Don't have an account yet?</a><a href="./register.php">Sign Up</a>
                                </div>

                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>