<?php $this->view("layout/header", $data) ?>

<div class="row d-flex justify-content-center pt-3">
    <div class="col-12 col-md-8 col-lg-6">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <h2>Profil użytkownika</h2>
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">

                        <a
                                class="nav-link active"
                                id="tab-login"
                                data-mdb-toggle="pill"
                                href="#pills-login"
                                role="tab"
                                aria-controls="pills-login"
                                aria-selected="true"
                        >Ogólne</a
                        >
                    </li>
                    <li class="nav-item" role="presentation">
                        <a
                                class="nav-link"
                                id="tab-register"
                                data-mdb-toggle="pill"
                                href="#pills-register"
                                role="tab"
                                aria-controls="pills-register"
                                aria-selected="false"
                        >Zmiana hasła</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div
                            class="tab-pane fade show active"
                            id="pills-login"
                            role="tabpanel"
                            aria-labelledby="tab-login"
                    >
                        <?php if (!empty($data['user'])) : ?>
                        <?php $user = $data['user']; ?>
                        <form method="post">
                            <div class="text-center mb-3">
                                <h2>Ogólne</h2>
                            </div>
                            <p style="color: #dc003a"><?php checkMessage() ?></p>

                            <div class="form-outline mb-4">
                                <input type="text" name="login" class="form-control" value="<?= $user['login'] ?>"/>
                                <label class="form-label">Login</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>"/>
                                <label class="form-label">Nazwa użytkownika</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="text" name="email" class="form-control" value="<?= $user['email'] ?>"/>
                                <label class="form-label">Email</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mb-4">Zapisz</button>

                        </form>
                    </div>
                    <div
                            class="tab-pane fade"
                            id="pills-register"
                            role="tabpanel"
                            aria-labelledby="tab-register"
                    >
                        <form method="post">
                            <div class="text-center mb-3">
                                <h2>Zmiana hasła</h2>
                            </div>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="password" name="password" class="form-control"/>
                                <label class="form-label" for="registerUsername">Aktualne hasło</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="newPassword" class="form-control"/>
                                <label class="form-label" for="registerEmail">Nowe hasło</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="repeatPassword" class="form-control"/>
                                <label class="form-label" for="registerPassword">Powtórz hasło</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mb-3">Zmień hasło</button>
                        </form>
                    </div>
                    <a class="btn" href="<?= ROOT ?>notes">
                        Powrót do listy notatek
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


<?php $this->view("layout/footer", $data) ?>