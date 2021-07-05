<div class="detailComponent">
    <div id="intro" class="bg-image shadow-2-strong">
        <div class="mask d-flex align-items-center h-100 card bg-light" ;">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./Overview.php">Overview</a></li>
                    <li class="breadcrumb-item active">CleanWindows</a></li>
                </ol>

                <div class="btn-right">
                    <button type="button" class="btn-right btn btn-danger">Delete</button>
                    <button type="button" class="btn-right btn btn-success">Accept</button>
                </div>
                <form>
                    <!-- Name input -->
                    <div class=" mb-4">
                        <label class="form-label" for="jobName">Name</label>
                        <input type="text" id="jobName" class="form-control" placeholder="Clean Windows" disabled />
                    </div>
                    <!-- Details input -->
                    <div class=" mb-4">
                        <label class="form-label" for="jobDetails">Details</label>
                        <textarea id="jobDetails" class="form-control" rows="4" disabled placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut libero sed justo interdum pretium. Proin tempor ante sit amet leo pellentesque, in scelerisque arcu sollicitudin. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc eget est eget eros volutpat vulputate vitae molestie sapien. Aenean augue. "></textarea>

                        <!-- DateTime input -->
                        <div class=" mb-4">
                            <label class="form-label" for="jobDate">Date & Time</label>
                            <input type="text" id="jobDate" class="form-control" placeholder="Saturday 20.07.2021" disabled />
                        </div>

                        <!-- Salary input -->
                        <div class=" mb-4">
                            <label class="form-label" for="jobSalary">Salary per hour</label>
                            <input type="text" id="jobSalary" class="form-control" placeholder="12CHF.-" disabled />
                        </div>
                </form>
            </div>
        </div>
    </div>