<?php
namespace Square\Tests;

use Square\Exceptions\ApiException;
use Square\Exceptions;
use Square\ApiHelper;
use Square\Apis\PaymentsApi;
use Square\Models\CancelPaymentByIdempotencyKeyRequest;
use Square\Models\CompletePaymentResponse;
use Square\Models\CreatePaymentRequest;
use Square\Models\CreatePaymentResponse;
use Square\Models\Currency;
use Square\Models\GetPaymentResponse;
use Square\Models\ListPaymentsResponse;
use Square\Models\Payment;
use Square\Models\Money;

use PHPUnit\Framework\TestCase;

class PaymentsTest extends TestCase
{
    /**
     * @var \Square\Apis\PaymentsApi Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected static $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$httpResponse = new HttpCallBackCatcher();
        self::$controller =  ClientFactory::create(self::$httpResponse)->getPaymentsApi();
    }


    public function testListPayments()
    {
        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->listPayments()->getResult();
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        $this->assertTrue($result instanceof ListPaymentsResponse);
    }

    public function testCreatePayment()
    {
        $body_sourceId = 'cnon:card-nonce-ok';
        $body_idempotencyKey = uniqid();
        $body_amountMoney = new Money;
        $body_amountMoney->setAmount(200);
        $body_amountMoney->setCurrency(Currency::USD);
        $body = new CreatePaymentRequest(
            $body_sourceId,
            $body_idempotencyKey,
            $body_amountMoney
        );
        $body->setAppFeeMoney(new Money);
        $body->getAppFeeMoney()->setAmount(10);
        $body->getAppFeeMoney()->setCurrency(Currency::USD);
        $body->setAutocomplete(true);

        $result = self::$controller->createPayment($body);

        $this->assertTrue($result->isSuccess());
        $this->assertTrue($result->getResult() instanceof CreatePaymentResponse);
        $this->assertEquals($body->getAppFeeMoney()->getCurrency(), $result->getResult()->getPayment()->getAppFeeMoney()->getCurrency());
        $this->assertEquals($body->getAppFeeMoney()->getAmount(), $result->getResult()->getPayment()->getAppFeeMoney()->getAmount());
        $this->assertEquals($body->getAmountMoney()->getAmount(), $result->getResult()->getPayment()->getAmountMoney()->getAmount());
        $this->assertEquals($body->getAmountMoney()->getCurrency(), $result->getResult()->getPayment()->getAmountMoney()->getCurrency());

        return $result->getResult()->getPayment()->getId();
    }

    /**
     * @depends testCreatePayment
     */
    public function testGetPayment($paymentId)
    {
        $result = self::$controller->getPayment($paymentId);

        $this->assertTrue($result->isSuccess());
        $this->assertTrue($result->getResult() instanceof GetPaymentResponse);
        $this->assertTrue($result->getResult()->getPayment() instanceof Payment);
        $this->assertEquals($result->getResult()->getPayment()->getId(), $paymentId);

        return $paymentId;
    }

    public function testCreatePaymentDelayed()
    {
        $body_sourceId = 'cnon:card-nonce-ok';
        $body_idempotencyKey = uniqid();
        $body_amountMoney = new Money;
        $body_amountMoney->setAmount(200);
        $body_amountMoney->setCurrency(Currency::USD);
        $body = new CreatePaymentRequest(
            $body_sourceId,
            $body_idempotencyKey,
            $body_amountMoney
        );
        $body->setAppFeeMoney(new Money);
        $body->getAppFeeMoney()->setAmount(10);
        $body->getAppFeeMoney()->setCurrency(Currency::USD);
        $body->setAutocomplete(false);

        $result = self::$controller->createPayment($body);

        $this->assertTrue($result->isSuccess());
        $this->assertEquals($body->getAppFeeMoney()->getCurrency(), $result->getResult()->getPayment()->getAppFeeMoney()->getCurrency());
        $this->assertEquals($body->getAppFeeMoney()->getAmount(), $result->getResult()->getPayment()->getAppFeeMoney()->getAmount());
        $this->assertEquals($body->getAmountMoney()->getAmount(), $result->getResult()->getPayment()->getAmountMoney()->getAmount());
        $this->assertEquals($body->getAmountMoney()->getCurrency(), $result->getResult()->getPayment()->getAmountMoney()->getCurrency());

        return $result->getResult()->getPayment()->getId();
    }

    /**
     * @depends testCreatePaymentDelayed
     */
    public function testCompletePayment($paymentId) 
    {
        $body = ApiHelper::deserialize('{"key1":"val1"}');
        $result = self::$controller->completePayment($paymentId,$body);

        $this->assertTrue($result->isSuccess());
        $this->assertTrue($result->getResult() instanceof CompletePaymentResponse);
    }

    public function testCancelPaymentByIdempotency () {
        $body_sourceId = 'cnon:card-nonce-ok';
        $body_idempotencyKey = uniqid();
        $body_amountMoney = new Money;
        $body_amountMoney->setAmount(200);
        $body_amountMoney->setCurrency(Currency::USD);
        $body = new CreatePaymentRequest(
            $body_sourceId,
            $body_idempotencyKey,
            $body_amountMoney
        );
        $body->setAppFeeMoney(new Money);
        $body->getAppFeeMoney()->setAmount(10);
        $body->getAppFeeMoney()->setCurrency(Currency::USD);
        $body->setAutocomplete(false);

        $createPaymentResult = self::$controller->createPayment($body);

        $this->assertTrue($createPaymentResult->isSuccess());


        $cancelBody = new CancelPaymentByIdempotencyKeyRequest(
            $body_idempotencyKey
        );

        $apiResponse = self::$controller->cancelPaymentByIdempotencyKey($cancelBody);
        
        $this->assertTrue($apiResponse->isSuccess());
    }
}
