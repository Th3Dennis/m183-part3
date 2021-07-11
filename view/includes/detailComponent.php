<?php

require "./controller/jobService.php";

$jobService = new jobService();
$job = $jobService->getJob($_REQUEST['id']);

$_SESSION['activeJob'] = $job;
?>

<div class="detailComponent">
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100 card bg-light">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./Overview.php">Overview</a></li>
                    <li class="breadcrumb-item active"><?= $job['name'] ?></li>
                </ol>


                <div class="row detail-spacing">
                    <div class="col-sm-7">
                        <h2><?= $job['name'] ?></h2>
                    </div>

                    <div class="col-sm-2"> </div>
                    <!-- <div class="col-sm-2 btn-right"><button type="button" class="btn-right btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button></div>
                    <div class="col-sm-2 btn-right"><button type="button" class="btn-right btn btn-success" data-bs-toggle="modal" data-bs-target="#acceptModal">Accept</button></div> -->
                    <div class="col-sm-3 btn-right">
                        <button type="button" class="btn-right btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" >Delete</button>
                        <button type="button" class="btn-right btn btn-success" data-bs-toggle="modal" data-bs-target="#acceptModal" >Accept</button>
                    </div>

                </div>





                <!-- DeleteJobModal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <?php require "./view/includes/deleteJobModal.php" ?>
                </div>
                <!-- AcceptJobModal -->
                <div class="modal fade" id="acceptModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <?php require "./view/includes/acceptJobModal.php" ?>
                </div>


                <form>

                    <!-- Details input -->
                    <div class=" mb-4">
                        <label class="form-label" for="jobDetails">Details</label>
                        <textarea id="jobDetails" rows="3" class="form-control-plaintext" disabled placeholder="<?= $job['details'] ?>"></textarea>

                        <!-- DateTime input -->
                        <div class=" mb-4">
                            <label class="form-label" for="jobDate">Date & Time</label>
                            <input type="text" id="jobDate" class="form-control-plaintext" placeholder="<?= $job['dateAndTime'] ?>" disabled />
                        </div>

                        <!-- Salary input -->
                        <div class=" mb-4">
                            <label class="form-label" for="jobSalary">Salary per hour</label>
                            <input type="text" id="jobSalary" class="form-control-plaintext" placeholder="<?= $job['salaryPerHour'] ?>" disabled />
                        </div>
                        <!-- Salary input -->
                        <div class=" mb-4">
                            <label class="form-label" for="jobSalary">Job Provider</label>
                            <input type="text" id="jobProvider" class="form-control-plaintext" placeholder="<?= $job['jobProvider'] ?>" disabled />
                        </div>
                </form>
            </div>
        </div>
    </div>