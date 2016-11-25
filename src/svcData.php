<?php

namespace Soukicz\GlsSoap;

class svcData {

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $info
     */
    protected $info = null;

    /**
     * @param string $code
     * @param string $info
     */
    public function __construct($code, $info) {
        $this->code = $code;
        $this->info = $info;
    }

    /**
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * @param string $code
     * @return \Soukicz\GlsSoap\svcData
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getInfo() {
        return $this->info;
    }

    /**
     * @param string $info
     * @return \Soukicz\GlsSoap\svcData
     */
    public function setInfo($info) {
        $this->info = $info;
        return $this;
    }

}
