<?php
    require_once(__DIR__ . '/../assert.php');
    require_once 'vendor/autoload.php';

    // Authentication Setup
    $config = MuxPhp\Configuration::getDefaultConfiguration()
        ->setUsername(getenv('MUX_TOKEN_ID'))
        ->setPassword(getenv('MUX_TOKEN_SECRET'));

    // API Client Initialization
    $dimensionsApi = new MuxPhp\Api\DimensionsApi(
        new GuzzleHttp\Client(),
        $config
    );

    // ========== list-filters ==========
    $dimensions = $dimensionsApi->listDimensions();
    assert($dimensions->getData() != null);
    assert($dimensions->getData()->getBasic() != null);
    assert($dimensions->getData()->getAdvanced() != null);
    print("list-dimensions OK ✅\n");

    // ========== list-dimension-values ==========
    $dimensionValues = $dimensionsApi->listDimensionValues("browser", [
        "page" => 1,
        "limit" => 25,
        "timeframe" => ["7:days"]
    ]);
    assert(is_array($dimensionValues->getData()));
    print("list-dimension-values OK ✅\n");

?>
