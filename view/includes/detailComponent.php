<?php

require "./controller/jobService.php";

$jobService = new jobService();
$job = $jobService->getJob($_REQUEST['id']);
?>

<div class="detailComponent">
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100 card bg-light" ;">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./Overview.php">Overview</a></li>
                    <li class="breadcrumb-item active">Clean Windows</a></li>
                </ol>


                <div class="row detail-spacing">
                    <div class="col-sm-7">
                        <h2>Clean Windows</h2>
                    </div>

                    <div class="col-sm-2"> </div>
                    <!-- <div class="col-sm-2 btn-right"><button type="button" class="btn-right btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button></div>
                    <div class="col-sm-2 btn-right"><button type="button" class="btn-right btn btn-success" data-bs-toggle="modal" data-bs-target="#acceptModal">Accept</button></div> -->
                    <div class="col-sm-3 btn-right">
                        <button type="button" class="btn-right btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                        <button type="button" class="btn-right btn btn-success" data-bs-toggle="modal" data-bs-target="#acceptModal">Accept</button>
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
                        <textarea id="jobDetails" rows="3" class="form-control-plaintext" disabled placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut libero sed justo interdum pretium. Proin tempor ante sit amet leo pellentesque, in scelerisque arcu sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc eget est eget eros volutpat vulputate vitae molestie sapien. Aenean augue. "></textarea>

                        <!-- DateTime input -->
                        <div class=" mb-4">
                            <label class="form-label" for="jobDate">Date & Time</label>
                            <input type="text" id="jobDate" class="form-control-plaintext" placeholder="Saturday 20.07.2021" disabled />
                        </div>

                        <!-- Salary input -->
                        <div class=" mb-4">
                            <label class="form-label" for="jobSalary">Salary per hour</label>
                            <input type="text" id="jobSalary" class="form-control-plaintext" placeholder="12CHF.-" disabled />
                        </div>
                        <!-- Salary input -->
                        <div class=" mb-4">
                            <label class="form-label" for="jobSalary">Job Provider</label>
                            <input type="text" id="jobProvider" class="form-control-plaintext" placeholder="John Doe" disabled />
                        </div>
                </form>
            </div>
        </div>
    </div>