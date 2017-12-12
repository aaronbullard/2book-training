<?php

namespace Training\Mockery;

class SmsService
{
    public function __construct(ClientRepository $repo, PhoneService $phoneService)
    {
        $this->repo = $repo;
        $this->phoneService = $phoneService;
    }

    public function execute(SmsRequest $request)
    {
        $client = $this->repo->findById($request->getClientId());

        return $this->phoneService->sendText([
            'number' => $client->getSmsPhone(),
            'message' => $request->getMessage()
        ]);
    }
}
