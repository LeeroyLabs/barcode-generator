<?php

use PHPUnit\Framework\TestCase;

class BarcodeSvgTest extends TestCase
{
    public function test_svg_barcode_generator_can_generate_ean_13_barcode()
    {
        $generator = new Picqer\Barcode\BarcodeGeneratorSVG();
        $generated = $generator->getBarcode('ASKIPP23014462339', $generator::TYPE_CODE_128, 2.1, 110, 'black', true);
        $this->assertStringContainsString('ASKIPP23014462339', $generated);
    }
}
