<div class="listGroupOverview">

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h2>Jobs</h2>
            </div>
            <div class="col-sm-8"> </div>

            <?php
            if (isset($_SESSION['loggedIn'])) {

                if ($_SESSION['loggedIn']) { ?>
                    <div class="col-sm-2">
                        <div class="createButton btn-right">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Create</button>
                        </div>
                        <div class="modal createModal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <?php require "./view/includes/createJobModal.php" ?>
                        </div>

                    </div>
        </div>
    <?php
                }
            } else { ?>

    </div>
<?php
            }
            require "./view/includes/listGroup.php";
?>


</div>
</div>