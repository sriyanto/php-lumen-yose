<?php

class AstroportTest extends TestCase
{
    /**
     * testElement : test if element existed and has the expected value
     *
     * @return void
     */
    public function testElement()
    {
        echo "\n* AstroportTest::testElement()";
        $dom = new DomDocument();
        $dom->loadHTML( $this->visit('/astroport')->crawler->html() );
        $this->assertEquals($dom->getElementById('astroport-name')->textContent, 'Astroport Name');
    }
}
