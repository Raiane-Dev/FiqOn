<?php
    $cvs = \Src\Repository\Subscribed\AllSubscribed::getAll();
?>
<main class="home">
    <div class="columns-two">
        <div>
            <h2>Dashboard</h2>
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

    <div class="columns-four">
        <div class="box">
            <i data-feather="credit-card"></i>
            <p>Lorem ipsum</p>
            <h4>120,00</h4>
        </div>

        <div class="box">
            <i data-feather="credit-card"></i>
            <p>Lorem ipsum</p>
            <h4>120,00</h4>
        </div>

        <div class="box">
            <i data-feather="credit-card"></i>
            <p>Lorem ipsum</p>
            <h4>120,00</h4>
        </div>

        <div class="box">
            <i data-feather="credit-card"></i>
            <p>Lorem ipsum</p>
            <h4>120,00</h4>
        </div>
    </div>

    <div class="separator"></div>

    <div class="container">
        <div id="chart"></div>
    </div>


    <div class="separator"></div>
    <div class="columns-two">
        <div>
            <h2>Dashboard</h2>
            <p>Lorem ipsum</p>
        </div>
    </div>

    <?php
        if($_SESSION['function'] == 0){
    ?>
    <div class="table-list">
        <table>
            <tbody>
                <?php
                foreach($cvs as $key => $cv){ 
                    $user = \Src\Repository\Users\SingleUser::getSingle($cv['user_id']);
                ?>
                <tr>
                    <td><img src="assets/<?= $user['image']; ?>" /></td>
                    <td><p><?= $cv['name']; ?></p></td>
                    <td><a href="<?= $cv['repository_link']; ?>"><p><?= $cv['repository_link']; ?></p></a></td>
                    <td><p><?= $cv['whatsapp']; ?></p></td>
                    <td><p><?= $cv['email']; ?></p></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php } ?>
</main>