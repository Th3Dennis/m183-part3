<?php

require "./controller/jobService.php";

$jobService = new jobService();
$allJobs = $jobService->getJobsList();
?>

<div class="list-group">

  <?php foreach ($allJobs as $job) : ?>

    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) :   ?>

      <a href=<?= "./detailPage.php?id=" . $job['id'] ?> class="list-group-item list-group-item-action"><?= $job['name'] ?></a>

    <?php else : ?>

      <a href="#" class="list-group-item list-group-item-action " data-bs-toggle="tooltip" data-bs-placement="top" title="You need to login to see details"><?= $job['name'] ?></a>


    <?php endif; ?>

  <?php endforeach; ?>

</div>