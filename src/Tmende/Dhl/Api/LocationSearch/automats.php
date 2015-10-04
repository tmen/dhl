<?php

class automats
{

    /**
     * @var automatWS $automat
     * @access public
     */
    public $automat = null;

    /**
     * @param automatWS $automat
     * @access public
     */
    public function __construct($automat)
    {
      $this->automat = $automat;
    }

}
