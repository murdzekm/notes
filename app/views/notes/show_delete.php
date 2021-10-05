<?php $this->view("layout/header", $data) ?>
<div class="container">
    <?php $note = $data['note'] ?? null; ?>
    <?php if ($note) : ?>
        <ul>
            <li>Id: <?php echo $note->id ?></li>
            <li>Tytuł: <?php echo $note->title ?></li>
            <li>
                <pre><?php echo $note->description ?></pre>
            </li>
            <li>Zapisano: <?php echo $note->created ?></li>
        </ul>
        <form method="POST">
            <input name="id" type="hidden" value="<?php echo $note->id ?>"/>
<!--            -->
            <a href="<?= ROOT."notes/delete/". $note->id ?>">

                <input type="button" value="Usuń"/>
            </a>
        </form>
    <?php else : ?>
        <div>Brak notatki do wyświetlenia</div>
    <?php endif; ?>
    <a href="<?=ROOT?>notes">
        <button>Powrót do listy notatek</button>
    </a>
</div>
<?php $this->view("layout/footer", $data) ?>
