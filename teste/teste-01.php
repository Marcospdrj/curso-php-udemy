<?php
class SOAPStruct {
    function SOAPStruct($s, $i, $f)
    {
        $this->varString = $s;
        $this->varInt = $i;
        $this->varFloat = $f;
    }
}
$client = new SoapClient(null, array('location' => "http://localhost/soap.php",
                                     'uri'      => "http://test-uri/"));
$struct = new SOAPStruct('arg', 34, 325.325);
$soapstruct = new SoapVar($struct, SOAP_ENC_OBJECT, "SOAPStruct", "http://soapinterop.org/xsd");
$client->echoStruct(new SoapParam($soapstruct, "inputStruct"));
?>
