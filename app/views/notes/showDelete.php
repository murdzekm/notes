<?php $this->view("layout/header", $data) ?>

<div class="container m-lg-5">
    <?php $note = $data['note'] ?? null; ?>
    <?php if ($note) : ?>
    <div class="row align-items-center">
        <div class="col-md-8">
            <h3>Tytuł notatki: <span class="ps-2 text-primary"><?php echo $note['title'] ?></span></h3>
            <h4 class="pt-3">
                Opis:
            </h4>
            <p>
            <pre class="m-4 ps-5 fs-5 "><?php echo $note['description'] ?></pre>
            </p>

            <h4 class="pt-3">
                Ostatnia zmiana:</h4>
            <span class="ms-4 ps-5 "><?php echo $note['created'] ?></span>

            <div class="pt-5">
<!--                <form method="POST">-->
                    <input name="id" type="hidden" value="<?php echo $note['id'] ?>"/>
                    <a class="btn btn-danger" href="<?= ROOT."notes/delete/". $note['id'] ?>">
                        Usuń
                    </a>
<!--            </form>-->
                <?php else : ?>
                    Brak notatki do wyświetlenia
                <?php endif; ?>
                <a class="btn" href="<?= ROOT ?>notes">
                    Powrót do listy notatek
                </a>
            </div>

        </div>
    </div>
</div>
<?php $this->view("layout/footer", $data) ?>
