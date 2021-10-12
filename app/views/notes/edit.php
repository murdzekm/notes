<?php $this->view("layout/header", $data) ?>


<div class="row d-flex justify-content-center mt-3">
    <div class="col-12 col-xl-7">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <!-- Pills navs -->

                <!-- Pills content -->

                <?php if (!empty($data['note'])) : ?>
                    <?php $note = $data['note']; ?>
                    <form method="post">
                        <div class="text-center mb-3">
                            <h2>Edycja notatki</h2>
                        </div>

                        <input type="hidden" name="id" class="form-control ps-3"
                               value="<?php echo $note['id'] ?>"/>

                        <div class="form-outline mb-4">
                            <input type="text" name="title" class="form-control ps-3"
                                   value="<?php echo $note['title'] ?>"/>
                            <label class="form-label">Tytuł</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <textarea name="description"
                                      class="form-control pt-3"><?php echo $note['description'] ?></textarea>
                            <label class="form-label">Treść</label>
                        </div>

                        <a href="<?= ROOT ?>notes">
                            <input type="submit" class="btn btn-primary btn-block mb-4 fs-6" value="Zapisz">
                        </a>

                        <a href="<?= ROOT ?>notes/show/<?php echo $note['id'] ?>">
                            <input type="button" class="btn btn-block mb-4 fs-6" value="Powrót do notatki"/>
                        </a>

                    </form>
                <?php else : ?>
                    <div>
                        Brak danych do wyświetlenia
                        <a href="<?= ROOT ?>notes">
                            <button>Powrót do listy notatek</button>
                        </a>
                    </div>
                <?php endif; ?>

            </div>

        </div>
    </div>
</div>

<?php $this->view("layout/footer", $data) ?>
