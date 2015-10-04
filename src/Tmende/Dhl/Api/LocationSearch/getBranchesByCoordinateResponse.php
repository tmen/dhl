<?php

class getBranchesByCoordinateResponse
{

    /**
     * @var branch[] $branch
     * @access public
     */
    public $branch = null;

    /**
     * @param branch[] $branch
     * @access public
     */
    public function __construct($branch)
    {
      $this->branch = $branch;
    }

}
