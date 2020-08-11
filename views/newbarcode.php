<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Barcode Generator Cloud API Example</title>
</head>

<body>

    <form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <p>
            <label>API Key</label>
            <input type="text" name="apiKey" placeholder="API Key"/>
            <label>Get your API Key by registering <a href="https://bytescout.com/products/developer/cloudapi/index.html" target="_blank">here</a></label>
        </p>
        <p>
            <label>Barcode Value</label>
            <input type="text" name="inputValue" placeholder="Input Value"/>
        </p>
        <p>
            <label>Barcode type</label>
            <select name="barcodeType">
                <option value="Aztec"> Aztec  </option>
                <option value="Bookland"> Bookland  </option>
                <option value="Codabar"> Codabar  </option>
                <option value="Code128"> Code 128  </option>
                <option value="Code39" selected="selected"> Code 39  </option>
                <option value="Code93"> Code 93  </option>
                <option value="DataMatrix"> DataMatrix  </option>
                <option value="DeutschePostIdentcode"> Deutsche Post Identcode  </option>
                <option value="DeutschePostLeitcode"> Deutsche Post Leitcode  </option>
                <option value="DutchKix"> Dutch KIX  </option>
                <option value="EAN128"> EAN-128  </option>
                <option value="EAN13"> EAN-13  </option>
                <option value="EAN14"> EAN-14  </option>
                <option value="EAN2"> EAN-2  </option>
                <option value="EAN5"> EAN-5  </option>
                <option value="EAN8"> EAN-8  </option>
                <option value="GS1_128"> GS1-128  </option>
                <option value="GS1_DataBar_Expanded"> GS1 DataBar Expanded  </option>
                <option value="GS1_DataBar_Expanded_Stacked"> GS1 DataBar Expanded Stacked  </option>
                <option value="GS1_DataBar_Limited"> GS1 DataBar Limited  </option>
                <option value="GS1_DataBar_Omnidirectional"> GS1 DataBar Omnidirectional  </option>
                <option value="GS1_DataBar_Stacked"> GS1 DataBar Stacked  </option>
                <option value="GS1_DataBar_Stacked_Omnidirectional"> GS1 DataBar Stacked Omnidirectional  </option>
                <option value="GS1_DataBar_Truncated"> GS1 DataBar Truncated  </option>
                <option value="GS1_DataMatrix"> GS1-DataMatrix  </option>
                <option value="GTIN12"> GTIN-12  </option>
                <option value="GTIN13"> GTIN-13  </option>
                <option value="GTIN14"> GTIN-14  </option>
                <option value="GTIN8"> GTIN-8  </option>
                <option value="I2of5"> Interleaved 2 of 5  </option>
                <option value="IntelligentMail"> Intelligent Mail  </option>
                <option value="ISBN"> ISBN  </option>
                <option value="ITF14"> ITF-14  </option>
                <option value="JAN13"> JAN-13  </option>
                <option value="MacroPDF417"> Macro PDF417  </option>
                <option value="MaxiCode"> MaxiCode  </option>
                <option value="MicroPDF417"> Micro PDF417  </option>
                <option value="MSI"> MSI  </option>
                <option value="Numly"> Numly  </option>
                <option value="OpticalProduct"> Optical Product  </option>
                <option value="PDF417"> PDF417  </option>
                <option value="PDF417Truncated"> PDF417 Truncated  </option>
                <option value="Planet"> Planet  </option>
                <option value="Plessey"> Plessey  </option>
                <option value="Postnet"> Postnet  </option>
                <option value="PZN"> PZN  </option>
                <option value="QRCode"> QR Code  </option>
                <option value="RoyalMail"> Royal Mail  </option>
                <option value="SingaporePostalCode"> Singapore Postal Code  </option>
                <option value="SwissPostParcel"> Swiss Post Parcel  </option>
                <option value="Telepen"> Telepen  </option>
                <option value="UPCA"> UPC-A  </option>
                <option value="UPCE"> UPC-E  </option>
                <option value="USPSSackLabel"> USPS Sack Label  </option>
                <option value="USPSTrayLabel"> USPS Tray Label  </option>
            </select>
        </p>

        <input type="submit" name="submit" value="Generate" />
    </form>

</body>
</html>
<!-- generate_barcode.php: -->


<?php 

// Include library
require_once("BytescoutApi/autoload.php");

// Create Barcode API object instance
$barcodeApiInstance = new Bytescout\Client\Api\BarcodeApi();

// Set options
$apikey = $_POST["apiKey"]; // set API Key from submitted form data
$propertiesSymbology = $_POST["barcodeType"]; // set barcode type from submitted form data
$propertiesOutputFileType = "png"; // set result image file format
$inputType = "value"; // set intput type to 'value'
$input = $_POST["inputValue"]; // set barcode value from submitted form data
$outputType = "link"; // result will be a link to generated image file

try 
{
    // Get generated barcode image as link
    $result = $barcodeApiInstance->barcodeGetBarcode($apikey, $propertiesOutputFileType, $propertiesTiffUse1BitFormat, $propertiesProduceMonochromeImages, 
        $propertiesAdditionalCaption, $propertiesAddChecksum, $propertiesAddChecksumToCaption, $propertiesCaption, $propertiesDrawCaption, 
        $propertiesDrawCaptionFor2DBarcodes, $propertiesDrawQuietZones, $propertiesSymbology, $propertiesSupplementValue, $propertiesAdditionalCaptionFont, 
        $propertiesBarHeight, $propertiesCaptionFont, $propertiesNarrowBarWidth, $propertiesWideToNarrowRatio, $propertiesAdditionalCaptionPosition, 
        $propertiesAngle, $propertiesBackColor, $propertiesCaptionPosition, $propertiesForeColor, $propertiesMarginsTop, $propertiesMarginsBottom, 
        $propertiesMarginsLeft, $propertiesMarginsRight, $propertiesSmoothingMode, $propertiesRenderingHint, $propertiesResolutionX, $propertiesResolutionY, 
        $propertiesCutUnusedSpace, $propertiesPreserveMinReadableSize, $propertiesSizeHeight, $propertiesSizeWidth, $propertiesSizeUnitOfMeasure, 
        $outputType, $input, $inputType);
    
    // Display barcode image
    echo "<div><h2>Result:</h2><img src=" . $result . "></div>";
} 
catch (Exception $e) 
{
    echo 'Exception when calling BarcodeApi->barcodeGetBarcode: ', $e->getMessage(), "<br/><br/>";
    
    if ($e instanceof Bytescout\Client\ApiException)
        echo $e->getResponseObject() . "<br/><br/>";
}

?>

</body>
</html>
        

Copyright © 2016 ByteScout. All rights reserved.

Send comments on this topic to ByteScout

