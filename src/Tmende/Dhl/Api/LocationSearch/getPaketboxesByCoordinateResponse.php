<?php

class getPaketboxesByCoordinateResponse
{

    /**
     * @var automatWS[] $paketbox
     * @access public
     */
    public $paketbox = null;

    /**
     * @param automatWS[] $paketbox
     * @access public
     */
    public function __construct($paketbox)
    {
      $this->paketbox = $paketbox;
    }

}
