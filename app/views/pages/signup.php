<?php $this->view("layout/header", $data); ?>




<div class="row d-flex justify-content-center pt-3">
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

                            <div class="form-outline mb-4">
                                <input type="password" id="loginPassword" name="password" class="form-control"/>
                                <label class="form-label" for="loginPassword">Hasło</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mb-4">Zaloguj</button>

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
                            <p><?php checkMessage() ?></p>
                            <div class="form-outline mb-4">
                                <input type="text" name="login" class="form-control"/>
                                <label class="form-label" >Login</label>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" name="username" class="form-control"/>
                                <label class="form-label" >Nazwa użytkownika</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" name="email" class="form-control"/>
                                <label class="form-label" >Email</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" class="form-control"/>
                                <label class="form-label" >Hasło</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="repeatPassword" class="form-control"/>
                                <label class="form-label" >Powtórz hasło</label>
                            </div>


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

