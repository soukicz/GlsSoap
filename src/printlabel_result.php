<?php

namespace Soukicz\GlsSoap;

class printlabel_result {

    /**
     * @var ArrayOfString $pcls
     */
    protected $pcls = null;

    /**
     * @var ArrayOfString $pcls_withcheckdigit
     */
    protected $pcls_withcheckdigit = null;

    /**
     * @var string $pdfdata
     */
    protected $pdfdata = null;

    /**
     * @var string $depo
     */
    protected $depo = null;

    /**
     * @var string $driver
     */
    protected $driver = null;

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
     * @param ArrayOfString $pcls
     * @param ArrayOfString $pcls_withcheckdigit
     * @param string $pdfdata
     * @param string $depo
     * @param string $driver
     * @param boolean $successfull
     * @param int $errcode
     * @param string $errdesc
     */
    public function __construct($pcls, $pcls_withcheckdigit, $pdfdata, $depo, $driver, $successfull, $errcode, $errdesc) {
        $this->pcls = $pcls;
        $this->pcls_withcheckdigit = $pcls_withcheckdigit;
        $this->pdfdata = $pdfdata;
        $this->depo = $depo;
        $this->driver = $driver;
        $this->successfull = $successfull;
        $this->errcode = $errcode;
        $this->errdesc = $errdesc;
    }

    /**
     * @return ArrayOfString
     */
    public function getPcls() {
        return $this->pcls;
    }

    /**
     * @param ArrayOfString $pcls
     * @return \Soukicz\GlsSoap\printlabel_result
     */
    public function setPcls($pcls) {
        $this->pcls = $pcls;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getPcls_withcheckdigit() {
        return $this->pcls_withcheckdigit;
    }

    /**
     * @param ArrayOfString $pcls_withcheckdigit
     * @return \Soukicz\GlsSoap\printlabel_result
     */
    public function setPcls_withcheckdigit($pcls_withcheckdigit) {
        $this->pcls_withcheckdigit = $pcls_withcheckdigit;
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
     * @return \Soukicz\GlsSoap\printlabel_result
     */
    public function setPdfdata($pdfdata) {
        $this->pdfdata = $pdfdata;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepo() {
        return $this->depo;
    }

    /**
     * @param string $depo
     * @return \Soukicz\GlsSoap\printlabel_result
     */
    public function setDepo($depo) {
        $this->depo = $depo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDriver() {
        return $this->driver;
    }

    /**
     * @param string $driver
     * @return \Soukicz\GlsSoap\printlabel_result
     */
    public function setDriver($driver) {
        $this->driver = $driver;
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
     * @return \Soukicz\GlsSoap\printlabel_result
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
     * @return \Soukicz\GlsSoap\printlabel_result
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
     * @return \Soukicz\GlsSoap\printlabel_result
     */
    public function setErrdesc($errdesc) {
        $this->errdesc = $errdesc;
        return $this;
    }

}
