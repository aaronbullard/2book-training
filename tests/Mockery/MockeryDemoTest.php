<?php

namespace Training\Mockery;

use Mockery;

class MockeryDemoTest extends \TestCase
{
    public function tearDown()
    {
        Mockery::close();
        parent::tearDown();
    }

    public function test_dependency_injection()
    {
        // Assemble
        $client = Mockery::mock(Client::class);
        $client->shouldReceive('getSmsPhone')
               ->once()
               ->andReturn('867-5309');

        $repo = Mockery::mock(ClientRepository::class);
        $repo->shouldReceive('findById')
             ->with(42)
             ->once()
             ->andReturn($client);

        $phoneService = Mockery::mock(PhoneService::class);
        $phoneService->shouldReceive('sendText')
                     ->with(['number' => '867-5309', 'message' => "Hello World!"])
                     ->once()
                     ->andReturn(TRUE);

        // Act
        $boolean = (new SmsService($repo, $phoneService))->execute(
            new SmsRequest(42, "Hello World!")
        );

        // Assert
        $this->assertTrue($boolean);
    }
}
