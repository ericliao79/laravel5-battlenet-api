<?php

namespace Maras0830\BattleNetApi\Core;


class Users extends Base
{

    /**
     * Returns a user object.
     *
     * @required scope: user_read
     *
     * 
     * @param null $token
     * @return mixed
     */
    public function authenticatedUser($token = null)
    {
        $token = $this->getToken($token);

        $parameters = $this->getDefaultHeaders($token);

        $response = $this->client->request('GET', '/account/user?access_token=' . $token, $parameters);

        $response = json_decode($response->getBody()->getContents(), true);

        return $response;
    }

}
