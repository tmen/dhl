<?php

class ServiceException
{

    /**
     * @var string $id
     * @access public
     */
    public $id = null;

    /**
     * @var string $message
     * @access public
     */
    public $message = null;

    /**
     * @var throwable[] $suppressed
     * @access public
     */
    public $suppressed = null;

    /**
     * @param string $id
     * @param string $message
     * @access public
     */
    public function __construct($id, $message)
    {
      $this->id = $id;
      $this->message = $message;
    }

}
