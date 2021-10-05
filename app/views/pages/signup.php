<?php $this->view("layout/header", $data); ?>

<!--<div class="login-page">-->
  <p><?php check_message() ?></p>
<!--  <div class="form">-->
<!--    <form class="register-form" method="post">-->
<!--      <input type="text" name="username" placeholder="name"/>-->
<!--      <input type="password" name="password" placeholder="password"/>-->
<!--      <input type="text" name="email" placeholder="email address"/>-->
<!--      <button>create</button>-->
<!--      <p class="message">Already registered? <a href="#">Sign In</a></p>-->
<!--    </form>-->
<!--    <form class="login-form" method="post">-->
<!--      <input type="text" name="username" placeholder="username"/>-->
<!--      <input type="password" name="password" placeholder="password"/>-->
<!--      <button>login</button>-->
<!--      <p class="message">Not registered? <a href="#">Create an account</a></p>-->
<!--    </form>-->
<!--  </div>-->
<!--</div>-->

<div class="row d-flex justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a
                                class="nav-link "
                                id="tab-login"
                                data-mdb-toggle="pill"
                                href="#pills-login"
                                role="tab"
                                aria-controls="pills-login"
                                aria-selected="false"
                        >Zaloguj</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                                class="nav-link active"
                                id="tab-register"
                                data-mdb-toggle="pill"
                                href="#pills-register"
                                role="tab"
                                aria-controls="pills-register"
                                aria-selected="true"
                        >Rejestracja</a
                        >
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div
                            class="tab-pane fade "
                            id="pills-login"
                            role="tabpanel"
                            aria-labelledby="tab-login"
                    >
                        <form method="post">
                            <div class="text-center mb-3">
                                <h2>Zaloguj</h2>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" id="loginName" name="username" class="form-control"/>
                                <label class="form-label" for="loginName">Nazwa użytkownika</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="loginPassword" name="password" class="form-control"/>
                                <label class="form-label" for="loginPassword">Hasło</label>
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Zaloguj</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Nie posiadasz konta? <a href="#!">Zarejestruj się</a></p>
                            </div>
                        </form>
                    </div>
                    <div
                            class="tab-pane fade show active"
                            id="pills-register"
                            role="tabpanel"
                            aria-labelledby="tab-register"
                    >
                        <form method="post">
                            <div class="text-center mb-3">
                                <h2>Rejestracja</h2>
                            </div>


                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" name="username" class="form-control"/>
                                <label class="form-label" for="registerUsername">Nazwa użytkownika</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" class="form-control"/>
                                <label class="form-label" for="registerEmail">Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" class="form-control"/>
                                <label class="form-label" for="registerPassword">Hasło</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="repeatPassword" class="form-control"/>
                                <label class="form-label" for="registerRepeatPassword">Powtórz hasło</label>
                            </div>

                            <!--                            <!-- Checkbox -->
                            <!--                            <div class="form-check d-flex justify-content-center mb-4">-->
                            <!--                                <input-->
                            <!--                                        class="form-check-input me-2"-->
                            <!--                                        type="checkbox"-->
                            <!--                                        value=""-->
                            <!--                                        id="registerCheck"-->
                            <!--                                        checked-->
                            <!--                                        aria-describedby="registerCheckHelpText"-->
                            <!--                                />-->
                            <!--                                <label class="form-check-label" for="registerCheck">-->
                            <!--                                    I have read and agree to the terms-->
                            <!--                                </label>-->
                            <!--                            </div>-->

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-3">Zarejestruj</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    $('.message a').click(function () {
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });

    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");

</script>

<?php $this->view("layout/footer", $data); ?>

