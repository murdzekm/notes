<?php $this->view("layout/header", $data) ?>
<div class="container m-lg-5">


    <?php $note = $data['note'] ?? null; ?>
    <?php if ($note) : ?>
    <!--                <li>Id: --><?php //echo $note->id ?><!--</li>-->
    <div class="row align-items-center">


        <div class="col-md-8">
            <h3>Tytuł notatki: <span class="ps-2 text-primary"><?php echo $note->title ?></span></h3>
            <h4 class="pt-3">
                Opis:
            </h4>
            <p>

            <pre class="m-4 ps-5 fs-5 "><?php echo $note->description ?></pre>

            </p>

            <h4 class="pt-3">
                Ostatnia zmiana:</h4>
            <span class="ms-4 ps-5 "><?php echo $note->created ?></span>

            <div class="pt-5">
                <!--                --><?php //if ($data['type'] === 'delete') : ?>
                <!--                    <a class="btn btn-danger fw-bold" href="--><? //= ROOT ?><!--notes/edit/-->
                <?php //echo $note->id ?><!--">-->
                <!--                        Usuń-->
                <!--                    </a>-->
                <!--                --><?php //else : ?>
                <a class="btn btn-primary fw-bold" href="<?= ROOT ?>notes/edit/<?php echo $note->id ?>">
                    Edytuj
                </a>
                <!--                --><?php //endif; ?>
                <?php else : ?>
                    Brak notatki do wyświetlenia
                <?php endif; ?>
                <a class="btn" href="<?= ROOT ?>notes">
                    Powrót do listy notatek
                </a>
            </div>
        </div>
        <!--        </div>-->
    </div>

</div>

<!--            <li class="">Tytuł: --><?php //echo $note->title ?><!--</li>-->
<!--            <li>-->
<!--                <pre>--><?php //echo $note->description ?><!--</pre>-->
<!--            </li>-->
<!--            <li>Zapisano: --><?php //echo $note->created ?><!--</li>-->
<!--        </ul>-->


</div>
<?php $this->view("layout/footer", $data) ?>

