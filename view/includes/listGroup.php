<?php

require "./model/jobService.php";

$jobService = new jobService();
$allJobs = $jobService->getJobsList();
?>

<div class="list-group">

  <?php foreach($allJobs as $job): ?>

  <a href=<?= "/detailPage.php?id=" . $job->id?> class="list-group-item list-group-item-action"><?= $job->name ?></a>


<?php endforeach; ?>

</div>