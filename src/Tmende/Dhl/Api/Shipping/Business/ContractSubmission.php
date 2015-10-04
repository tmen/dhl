<?php

class ContractSubmission
{

    /**
     * @var TotalPages $TotalPages
     * @access public
     */
    public $TotalPages = null;

    /**
     * @var TotalSignatures $TotalSignatures
     * @access public
     */
    public $TotalSignatures = null;

    /**
     * @var TotalDocsSender $TotalDocsSender
     * @access public
     */
    public $TotalDocsSender = null;

    /**
     * @var TotalDocsReceiver $TotalDocsReceiver
     * @access public
     */
    public $TotalDocsReceiver = null;

    /**
     * @param TotalPages $TotalPages
     * @param TotalSignatures $TotalSignatures
     * @param TotalDocsSender $TotalDocsSender
     * @param TotalDocsReceiver $TotalDocsReceiver
     * @access public
     */
    public function __construct($TotalPages, $TotalSignatures, $TotalDocsSender, $TotalDocsReceiver)
    {
      $this->TotalPages = $TotalPages;
      $this->TotalSignatures = $TotalSignatures;
      $this->TotalDocsSender = $TotalDocsSender;
      $this->TotalDocsReceiver = $TotalDocsReceiver;
    }

}
