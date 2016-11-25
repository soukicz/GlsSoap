<?php

namespace Soukicz\GlsSoap;

class svcDataArray {

    /**
     * @var svcData[] $svcDataArray
     */
    protected $svcDataArray = null;

    /**
     * @param svcData[] $svcDataArray
     */
    public function __construct(array $svcDataArray) {
        $this->svcDataArray = $svcDataArray;
    }

    /**
     * @return svcData[]
     */
    public function getSvcDataArray() {
        return $this->svcDataArray;
    }

    /**
     * @param svcData[] $svcDataArray
     * @return \Soukicz\GlsSoap\svcDataArray
     */
    public function setSvcDataArray(array $svcDataArray) {
        $this->svcDataArray = $svcDataArray;
        return $this;
    }

}
