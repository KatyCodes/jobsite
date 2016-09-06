<?php
    class JobOpening
    {
      public $title;
      public $description;
      public $contactInfo;

    function __construct($position, $jobInfo, $contactDetails)
    {
      $this->title = $position;
      $this->description = $jobInfo;
      $this->contactInfo = $contactDetails;
    }

    }
?>
