<?php $this->view("layout/header", $data) ?>

<div class="row d-flex justify-content-center mt-3">
    <div class="col-12 col-xl-7">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <form method="post">
                    <div class="text-center mb-3">
                        <h2>Dodawanie notatki</h2>
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="title" class="form-control"/>
                        <label class="form-label" for="loginName">Tytuł</label>
                    </div>

                    <div class="form-outline mb-4">
                        <textarea type="" name="description" class="form-control"></textarea>
                        <label class="form-label" for="loginPassword">Treść</label>
                    </div>

                    <a href="<?= ROOT ?>notes">
                        <input type="submit" class="btn btn-primary btn-block mb-4 fs-6" value="Zapisz">
                    </a>

                    <a href="<?= ROOT ?>notes">
                        <input type="button" class="btn btn-block mb-4 fs-6" value="Powrót do listy notatek"/>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->view("layout/footer", $data) ?>

