<?php

class poboxes
{

    /**
     * @var pobox $pobox
     * @access public
     */
    public $pobox = null;

    /**
     * @param pobox $pobox
     * @access public
     */
    public function __construct($pobox)
    {
      $this->pobox = $pobox;
    }

}
