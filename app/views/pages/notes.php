<?php $this->view("layout/header", $data) ?>

    <div class="container col-lg-10">
        <div class="table-responsive">
            <table class="table text-center">
                <thead class="thead-dark">
                <tr>
                    <!--                    <th scope="col">Id</th>-->
                    <th class="fw-bold" scope="col">Tytuł</th>
                    <th class="fw-bold" scope="col">Data</th>
                    <th class="fw-bold" scope="col">Opcje</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data['notes'] ?? [] as $note) : ?>
                    <tr>
                        <td><?php echo $note['title'] ?></td>
                        <td><?php echo $note['created'] ?></td>
                        <td>

                            <a class="btn btn-primary btn-sm px-3" href="<?= ROOT ?>notes/show/<?php echo $note['id'] ?>">
                                Szczegóły
                            </a>
                            <a class="btn btn-danger btn-sm px-3"
                               href="<?= ROOT ?>notes/showDelete/<?php echo $note['id'];
                               ?>">
                                <?php $data['type'] = "delete" ?>Usuń
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


<?php $this->view("layout/footer", $data) ?>