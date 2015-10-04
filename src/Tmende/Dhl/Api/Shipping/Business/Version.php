<?php

class Version
{

    /**
     * @var majorRelease $majorRelease
     * @access public
     */
    public $majorRelease = null;

    /**
     * @var minorRelease $minorRelease
     * @access public
     */
    public $minorRelease = null;

    /**
     * @var build $build
     * @access public
     */
    public $build = null;

    /**
     * @param majorRelease $majorRelease
     * @param minorRelease $minorRelease
     * @param build $build
     * @access public
     */
    public function __construct($majorRelease, $minorRelease, $build)
    {
      $this->majorRelease = $majorRelease;
      $this->minorRelease = $minorRelease;
      $this->build = $build;
    }

}
