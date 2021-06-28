<div class="modal-dialog createJobModal">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Job</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="jobName">Name</label>
                    <input type="text" id="jobName" class="form-control" />
                </div>

                <!-- Details input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="jobDetails">Details</label>
                    <textarea id="jobDetails" class="form-control" rows="4"></textarea>

                    <!-- DateTime input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="jobDate">Date & Time</label>
                        <input type="text" id="jobDate" class="form-control" />
                    </div>

                    <!-- Salary input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="jobSalary">Salary per hour</label>
                        <input type="text" id="jobSalary" class="form-control" />
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Create</button>
        </div>
    </div>
</div>