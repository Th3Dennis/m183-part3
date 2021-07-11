<?php

require "./controller/databaseController.php";

class jobService {

    public function getJobsList()
	{

		// Get the Jobs from the Database
	    return getProducts();

	}

    public function getJob($id)
	{

		return getProductById($id);
	}

	public function acceptJobWithEmail($jobId, $userEmail){
		acceptJob($jobId, $userEmail);
	}
}