<?php
namespace Alphagov\GovWifi;

use PHPUnit_Framework_TestCase;

class SmsRequestTest extends PHPUnit_Framework_TestCase {
    function testClassInstantiates() {
        $this->assertInstanceOf(SmsRequest::class, new SmsRequest());
    }
}
