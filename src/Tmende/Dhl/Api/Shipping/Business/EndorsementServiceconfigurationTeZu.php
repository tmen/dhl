<?php

class EndorsementServiceconfigurationTeZu
{

    /**
     * @var anonymous172 $active
     * @access public
     */
    public $active = null;

    /**
     * @var anonymous173 $tezuDate
     * @access public
     */
    public $tezuDate = null;

    /**
     * @param anonymous172 $active
     * @param anonymous173 $tezuDate
     * @access public
     */
    public function __construct($active, $tezuDate)
    {
      $this->active = $active;
      $this->tezuDate = $tezuDate;
    }

}
