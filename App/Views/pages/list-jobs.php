<?php
    $vacancys = \Src\Repository\Vacancy\AllVacancy::getAll();
?>
<main class="home">
    <div class="columns-two">
        <div>
            <h2>Jobs</h2>
            <p>Lorem ipsum</p>
        </div>
        <div><form method="post">
            <div class="search">
                <button name="action"><i data-feather="search"></i></button>
                <input type="search" name="search" />
    </form></div>
        </div>
    </div>

    <div class="separator"></div>

    <div class="table-list">
        <table>
            <tbody>
                <?php
                if(isset($_POST['search'])){
                    $vacancys = App\Models\Jobs::search($_POST['search']);
                }
                    foreach($vacancys as $key => $vac){ 
                ?>
                <tr>
                    <td><img src="assets/<?= $vac['image'] ?>" /></td>
                    <td><p><?= $vac['title']; ?></p></td>
                    <td><a href="<?= BASE_URL ?>single-job?id=<?= $vac['id']; ?>"><p>Subscribe</p></a></td>
                    <td><p><?= $vac['workload']; ?></p></td>
                    <td><p><?= $vac['wage']; ?></p></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>