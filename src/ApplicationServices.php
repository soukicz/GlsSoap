<?php

namespace Soukicz\GlsSoap;

class ApplicationServices extends \SoapClient {

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'svcData' => 'Soukicz\\GlsSoap\\svcData',
        'svcDataArray' => 'Soukicz\\GlsSoap\\svcDataArray',
        'ArrayOfString' => 'Soukicz\\GlsSoap\\ArrayOfString',
        'PrepareReturn' => 'Soukicz\\GlsSoap\\PrepareReturn',
        'ArrayOfPrepareReturn' => 'Soukicz\\GlsSoap\\ArrayOfPrepareReturn',
        'printlabel_result' => 'Soukicz\\GlsSoap\\printlabel_result',
        'printlabelzip_result' => 'Soukicz\\GlsSoap\\printlabelzip_result',
    );

    const WSDL = [
        'HU' => 'https://online.gls-hungary.com/webservices/soap_server.php?wsdl&ver=15.04.18.01',
        'SK' => 'https://online.gls-slovakia.sk/webservices/soap_server.php?wsdl&ver=15.04.18.01',
        'CZ' => 'https://online.gls-czech.com/webservices/soap_server.php?wsdl&ver=15.04.18.01',
        'RO' => 'https://online.gls-romania.ro/webservices/soap_server.php?wsdl&ver=15.04.18.01',
        'SI' => 'https://connect.gls-slovenia.com/webservices/soap_server.php?wsdl&ver=15.04.18.01',
        'HR' => 'https://online.gls-croatia.com/webservices/soap_server.php?wsdl&ver=15.04.18.01',
    ];

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null) {

        foreach (self::$classmap as $key => $value) {
            if(!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        parent::__construct($wsdl, $options);
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $sender_name
     * @param string $sender_address
     * @param string $sender_city
     * @param string $sender_zipcode
     * @param string $sender_country
     * @param string $sender_contact
     * @param string $sender_phone
     * @param string $sender_email
     * @param string $consig_name
     * @param string $consig_address
     * @param string $consig_city
     * @param string $consig_zipcode
     * @param string $consig_country
     * @param string $consig_contact
     * @param string $consig_phone
     * @param string $consig_email
     * @param int $pcount
     * @param string $pickupdate
     * @param string $content
     * @param string $clientref
     * @param int $codamount
     * @param string $codref
     * @param svcDataArray $services
     * @param string $printertemplate
     * @param boolean $printit
     * @param string $timestamp
     * @param string $hash
     * @param boolean $customlabel
     * @param boolean $is_autoprint_pdfs
     * @return printlabel_result
     */
    public function printlabel($username, $password, $senderid, $sender_name, $sender_address, $sender_city, $sender_zipcode, $sender_country, $sender_contact, $sender_phone, $sender_email, $consig_name, $consig_address, $consig_city, $consig_zipcode, $consig_country, $consig_contact, $consig_phone, $consig_email, $pcount, $pickupdate, $content, $clientref, $codamount, $codref, svcDataArray $services, $printertemplate, $printit, $timestamp, $hash, $customlabel, $is_autoprint_pdfs) {
        return $this->__soapCall('printlabel', array($username, $password, $senderid, $sender_name, $sender_address, $sender_city, $sender_zipcode, $sender_country, $sender_contact, $sender_phone, $sender_email, $consig_name, $consig_address, $consig_city, $consig_zipcode, $consig_country, $consig_contact, $consig_phone, $consig_email, $pcount, $pickupdate, $content, $clientref, $codamount, $codref, $services, $printertemplate, $printit, $timestamp, $hash, $customlabel, $is_autoprint_pdfs));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $sender_name
     * @param string $sender_address
     * @param string $sender_city
     * @param string $sender_zipcode
     * @param string $sender_country
     * @param string $sender_contact
     * @param string $sender_phone
     * @param string $sender_email
     * @param string $consig_name
     * @param string $consig_address
     * @param string $consig_city
     * @param string $consig_zipcode
     * @param string $consig_country
     * @param string $consig_contact
     * @param string $consig_phone
     * @param string $consig_email
     * @param int $pcount
     * @param string $pickupdate
     * @param string $content
     * @param string $clientref
     * @param int $codamount
     * @param string $codref
     * @return string
     */
    public function getglshash($username, $password, $senderid, $sender_name, $sender_address, $sender_city, $sender_zipcode, $sender_country, $sender_contact, $sender_phone, $sender_email, $consig_name, $consig_address, $consig_city, $consig_zipcode, $consig_country, $consig_contact, $consig_phone, $consig_email, $pcount, $pickupdate, $content, $clientref, $codamount, $codref) {
        return $this->__soapCall('getglshash', array($username, $password, $senderid, $sender_name, $sender_address, $sender_city, $sender_zipcode, $sender_country, $sender_contact, $sender_phone, $sender_email, $consig_name, $consig_address, $consig_city, $consig_zipcode, $consig_country, $consig_contact, $consig_phone, $consig_email, $pcount, $pickupdate, $content, $clientref, $codamount, $codref));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @return ArrayOfPrepareReturn
     */
    public function preparelabels($username, $password, $senderid, $data) {
        return $this->__soapCall('preparelabels', array($username, $password, $senderid, $data));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @return string
     */
    public function preparelabels_xml($username, $password, $senderid, $data) {
        return $this->__soapCall('preparelabels_xml', array($username, $password, $senderid, $data));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @return string
     */
    public function preparelabels_gzipped_xml($username, $password, $senderid, $data) {
        return $this->__soapCall('preparelabels_gzipped_xml', array($username, $password, $senderid, $data));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @param string $printertemplate
     * @param boolean $is_autoprint_pdfs
     * @return string
     */
    public function getprintedlabels_xml($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs) {
        return $this->__soapCall('getprintedlabels_xml', array($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @param string $printertemplate
     * @param boolean $is_autoprint_pdfs
     * @return string
     */
    public function getprintedlabels_gzipped_xml($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs) {
        return $this->__soapCall('getprintedlabels_gzipped_xml', array($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs));
    }

    /**
     * @param string $username
     * @param string $password
     * @param string $senderid
     * @param string $data
     * @param string $printertemplate
     * @param boolean $is_autoprint_pdfs
     * @return string
     */
    public function getprintedlabels_zipped_pdfs($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs) {
        return $this->__soapCall('getprintedlabels_zipped_pdfs', array($username, $password, $senderid, $data, $printertemplate, $is_autoprint_pdfs));
    }

}
