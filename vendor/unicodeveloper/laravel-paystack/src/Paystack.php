<?php

/*
 * This file is part of the Laravel Paystack package.
 *
 * (c) Prosper Otemuyiwa <prosperotemuyiwa@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Unicodeveloper\Paystack;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;

class Paystack {

    /**
     * Transaction Verification Successful
     */
    const VS = 'Verification successful';

    /**
     *  Invalid Transaction reference
     */
    const ITF = "Invalid transaction reference";

    /**
     * Issue Secret Key from your Paystack Dashboard
     * @var mixed
     */
    protected $secretKey;

    /**
     * Instance of Client
     * @var object
     */
    protected $client;

    /**
     *  Response from requests made to Paystack
     * @var mixed
     */
    protected $response;

    /**
     * Paystack API base Url
     * @var string
     */
    protected $baseUrl;

    /**
     * Authorization Url - Paystack payment page
     * @var string
     */
    protected $authorizationUrl;

    public function __construct()
    {
        $this->setKey();
        $this->setBaseUrl();
        $this->setRequestOptions();
    }

    /**
     * Get Base Url from Paystack config file
     */
    public function setBaseUrl()
    {
        $this->baseUrl = Config::get('paystack.paymentUrl');
    }

    /**
     * Get secret key from Paystack config file
     * @return  void
     */
    public function setKey()
    {
        $this->secretKey = Config::get('paystack.secretKey');
    }

    /**
     * Set options for making the Client request
     * @return  void
     */
    private function setRequestOptions()
    {
        $authBearer = 'Bearer '. $this->secretKey;

        $this->client = new Client(['base_uri' => $this->baseUrl,
            'headers' => [
                'Authorization' => $authBearer,
                'Content-Type'  => 'application/json',
                'Accept'        => 'application/json'
        ]]);
    }

    /**
     * Initiate a payment request to Paystack
     * @return Unicodeveloper\Paystack\Paystack
     */
    public function makePaymentRequest()
    {
        $this->setResponse('/transaction/initialize');

        return $this;
    }

    /**
     * Make the client request and get the response
     * @param string $relativeUrl
     * @return Unicodeveloper\Paystack\Paystack
     */
    public function setResponse($relativeUrl)
    {
        $data = [
            "amount" => intval(request()->amount),
            "reference" => request()->reference,
            "email" => request()->email
        ];

        $this->response = $this->client->post($this->baseUrl . $relativeUrl, [
            'body' => json_encode($data)
        ]);

        return $this;
    }

    private function setGetResponse($relativeUrl)
    {
        $this->response = $this->client->get($this->baseUrl . $relativeUrl, []);

        return $this;
    }

    /**
     * Get the authorization url from the callback response
     * @return Unicodeveloper\Paystack\Paystack
     */
    public function getAuthorizationUrl()
    {
        $this->makePaymentRequest();

        $this->url = $this->getResponse()['data']['authorization_url'];

        return $this;
    }

    /**
     * Hit Paystack Gateway to Verify that the transaction is valid
     * @return void
     */
    private function verifyTransactionAtGateway()
    {
        $transactionRef = request()->query('trxref');

        $relativeUrl = "/transaction/verify/{$transactionRef}";

        $this->response = $this->client->get($this->baseUrl . $relativeUrl, []);
    }

    /**
     * True or false condition whether the transaction is verified
     * @return boolean
     */
    public function isTransactionVerificationValid()
    {
        $this->verifyTransactionAtGateway();

        $result = $this->getResponse()['message'];

        switch ($result)
        {
            case self::VS:
                $validate = true;
                break;
            case self:ITF:
                $validate = false;
                break;
            default:
                $validate = false;
                break;
        }

        return $validate;
    }

    /**
     * Get Payment details if the transaction was verified successfully
     * @throws Unicodeveloper\Paystack\Exceptions\PaymentVerificationFailedException
     * @return json
     */
    public function getPaymentData()
    {
        if ($this->isTransactionVerificationValid()) {
            return $this->getResponse();
        } else {
            throw new PaymentVerificationFailedException("Invalid Transaction Reference");
        }
    }

    /**
     * Fluent method to redirect to Paystack Payment Page
     * @return Illuminate\Support\Redirect
     */
    public function redirectNow()
    {
        return redirect($this->url);
    }

    /**
     * Get Access code from transaction callback respose
     * @return string
     */
    public function getAccessCode()
    {
        return $this->getResponse()['data']['access_code'];
    }

    /**
     * Generate a Unique Transaction Reference
     * @return string
     */
    public function genTranxRef()
    {
        return TransRef::getHashedToken();
    }

    /**
     * Get all the customers that have made transactions on your platform
     * @return array
     */
    public function getAllCustomers()
    {
        $this->setRequestOptions();

        return $this->setGetResponse("/customer")->getData();
    }

    /**
     * Get all the plans that you have on Paystack
     * @return array
     */
    public function getAllPlans()
    {
        $this->setRequestOptions();

        return $this->setGetResponse("/plan")->getData();
    }

    /**
     * Get all the transactions that have happened overtime
     * @return array
     */
    public function getAllTransactions()
    {
        $this->setRequestOptions();

        return $this->setGetResponse("/transaction")->getData();
    }

    /**
     * Get the whole response from a get operation
     * @return array
     */
    private function getResponse()
    {
        return json_decode($this->response->getBody(), true);
    }

    /**
     * Get the data response from a get operation
     * @return array
     */
    private function getData()
    {
        return $this->getResponse()['data'];
    }

}