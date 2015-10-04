<?php

class getPackstationsFilialeDirektByAddressResponse
{

    /**
     * @var automatFD[] $packstation_filialedirekt
     * @access public
     */
    public $packstation_filialedirekt = null;

    /**
     * @param automatFD[] $packstation_filialedirekt
     * @access public
     */
    public function __construct($packstation_filialedirekt)
    {
      $this->packstation_filialedirekt = $packstation_filialedirekt;
    }

}
