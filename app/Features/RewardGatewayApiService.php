<?php

namespace App\Features;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use Log;

class RewardGatewayApiService
{
    const API_URL = 'http://hiring.rewardgateway.net/list';

    public static function getEmployees()
    {
        $client = new Client();
        try {
            $res = $client->get(self::API_URL, ['auth' => ['hard', 'hard']]);
            if ($res->getStatusCode() === 200) {
                $employees = json_decode($res->getBody());
                return $employees;
            }
        } catch (ServerException $e) {
            Log::error($e->getMessage());
            throw new Exception("Server error");
        } catch (Exception $e) {
            Log::error($e->getMessage());
            throw new Exception('General error');
        }
    }
}
