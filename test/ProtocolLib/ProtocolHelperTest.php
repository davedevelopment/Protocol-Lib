<?php

namespace ProtocolLib;

class ProtocolHelperTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function shouldReturnTrueRegardlessIfDisabled()
    {
        ProtocolHelper::disable();

        $this->assertTrue(ProtocolHelper::doesImplement(
            new \stdClass,
            "ProtocolLib\TestProtocol"
        ));

        $this->assertTrue(ProtocolHelper::doesMethodImplement(
            array($this, "shouldReturnTrueRegardlessIfDisabled"),
            "ProtocolLib\TestProtocol::foo"
        ));

        $this->assertTrue(ProtocolHelper::doesFunctionImplement(
            function (\stdClass $dave) {},
            "ProtocolLib\TestProtocol::foo"
        ));
    }
}

interface TestProtocol
{
    public function foo(array $bar);
}
