<?php

namespace Dnsimple;


class MiscService extends ClientService
{
    public function whoami()
    {
        $response = $this->client->get(Client::versioned("whoami"));

        $json = json_decode($response->getBody());
        return $json->data;
    }
}
