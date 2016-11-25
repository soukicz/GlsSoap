<?php

namespace Soukicz\GlsSoap;

class PrepareReturn {

    /**
     * @var string $clientref
     */
    protected $clientref = null;

    /**
     * @var string $pclid
     */
    protected $pclid = null;

    /**
     * @var string $error
     */
    protected $error = null;

    /**
     * @param string $clientref
     * @param string $pclid
     * @param string $error
     */
    public function __construct($clientref, $pclid, $error) {
        $this->clientref = $clientref;
        $this->pclid = $pclid;
        $this->error = $error;
    }

    /**
     * @return string
     */
    public function getClientref() {
        return $this->clientref;
    }

    /**
     * @param string $clientref
     * @return \Soukicz\GlsSoap\PrepareReturn
     */
    public function setClientref($clientref) {
        $this->clientref = $clientref;
        return $this;
    }

    /**
     * @return string
     */
    public function getPclid() {
        return $this->pclid;
    }

    /**
     * @param string $pclid
     * @return \Soukicz\GlsSoap\PrepareReturn
     */
    public function setPclid($pclid) {
        $this->pclid = $pclid;
        return $this;
    }

    /**
     * @return string
     */
    public function getError() {
        return $this->error;
    }

    /**
     * @param string $error
     * @return \Soukicz\GlsSoap\PrepareReturn
     */
    public function setError($error) {
        $this->error = $error;
        return $this;
    }

}
