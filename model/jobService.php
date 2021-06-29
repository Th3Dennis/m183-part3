<?php

include_once("./model/jobs.php");

class jobService {

    public function getJobsList()
	{
		// Get the sunglasses for the home-page from the json file
	    return json_decode(file_get_contents("./model/jobs.json"));

	}

    public function getJobs($id)
	{
		// we use the previous function to get all the books and then we return the requested one.
		// in a real life scenario this will be done through a db select command
		$allJobs = $this->getJobsList();

		return $allJobs[$id-1];
	}
}