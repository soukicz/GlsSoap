<?php

namespace Soukicz\GlsSoap;

class printlabelzip_result {

    /**
     * @var ArrayOfString $pclids
     */
    protected $pclids = null;

    /**
     * @var string $pdfdata
     */
    protected $pdfdata = null;

    /**
     * @var boolean $successfull
     */
    protected $successfull = null;

    /**
     * @var int $errcode
     */
    protected $errcode = null;

    /**
     * @var string $errdesc
     */
    protected $errdesc = null;

    /**
     * @param ArrayOfString $pclids
     * @param string $pdfdata
     * @param boolean $successfull
     * @param int $errcode
     * @param string $errdesc
     */
    public function __construct($pclids, $pdfdata, $successfull, $errcode, $errdesc) {
        $this->pclids = $pclids;
        $this->pdfdata = $pdfdata;
        $this->successfull = $successfull;
        $this->errcode = $errcode;
        $this->errdesc = $errdesc;
    }

    /**
     * @return ArrayOfString
     */
    public function getPclids() {
        return $this->pclids;
    }

    /**
     * @param ArrayOfString $pclids
     * @return \Soukicz\GlsSoap\printlabelzip_result
     */
    public function setPclids($pclids) {
        $this->pclids = $pclids;
        return $this;
    }

    /**
     * @return string
     */
    public function getPdfdata() {
        return $this->pdfdata;
    }

    /**
     * @param string $pdfdata
     * @return \Soukicz\GlsSoap\printlabelzip_result
     */
    public function setPdfdata($pdfdata) {
        $this->pdfdata = $pdfdata;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccessfull() {
        return $this->successfull;
    }

    /**
     * @param boolean $successfull
     * @return \Soukicz\GlsSoap\printlabelzip_result
     */
    public function setSuccessfull($successfull) {
        $this->successfull = $successfull;
        return $this;
    }

    /**
     * @return int
     */
    public function getErrcode() {
        return $this->errcode;
    }

    /**
     * @param int $errcode
     * @return \Soukicz\GlsSoap\printlabelzip_result
     */
    public function setErrcode($errcode) {
        $this->errcode = $errcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrdesc() {
        return $this->errdesc;
    }

    /**
     * @param string $errdesc
     * @return \Soukicz\GlsSoap\printlabelzip_result
     */
    public function setErrdesc($errdesc) {
        $this->errdesc = $errdesc;
        return $this;
    }

}
