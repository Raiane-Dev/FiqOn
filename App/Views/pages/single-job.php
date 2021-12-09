<?php
    $vacancys = \Src\Repository\Vacancy\AllVacancy::getAll();
    $job = \Src\Repository\Vacancy\SingleVacancy::getSingle($_GET['id']);
?>
<main class="single-job">
    <div class="columns-two">
        <div>
            <h2>Single Job</h2>
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

    <div class="job-details">
        <div class="columns-two">
            <div>
                <img src="assets/<?= $job['image']; ?>" class="round" />
            </div>
            <div>
                <p><?= $job['description']; ?></p>

                <div class="divider"></div>
                <ul>
                    <li><?= $job['color']; ?></li>
                    <li><?= $job['workload']; ?></li>
                    <li><?= $job['modality']; ?></li>
                    <li><?= $job['wage']; ?></li>
                    <li><?= $job['roles']; ?></li>
                    <li><?= $job['minimum_requirements']; ?></li>
                    <li><?= $job['differentials']; ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="separator"></div>

    <h2>Apply</h2>
    <div class="separator"></div>
    <div class="form">
        <form method="post" enctype="multipart/form-data" class="pages">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="<?= $_SESSION['name'] ?>" />

            <label>Email</label>
            <input type="text" name="email" placeholder="Email" value="<?= $_SESSION['email'] ?>" />

            <label>Whatsapp</label>
            <input type="text" name="whatsapp" />

            <label>Repository Link</label>
            <input type="text" name="repository_link" />

            <input type="file" name="cv" />

            <input type="submit" name="action" placeholder="Subscribe" />
        </form>
    </div>
</main>