<?php
namespace App\Billing;

use Twocheckout;
use Twocheckout_Charge;

class TwoCheckoutPaymentGateway implements PaymentGatewayContract
{
    private $token = null;

    public function __construct($twoCheckoutToken)
    {
        $this->token = $twoCheckoutToken;
        Twocheckout::privateKey('BD6E38F2-566A-4E90-8783-7A5B0DD3B74B');
        Twocheckout::sellerId('252443856666');
        Twocheckout::verifySSL(false);
    }

    public function payDue($order)
    {
        return;
    }

    public function charge($validated)
    {
        $charge = Twocheckout_Charge::auth([
            "sellerId" => "252443856666",
            "demo" => true,
            'type' => 'test',
            "merchantOrderId" => $validated['tracking'],
            "token" => $this->token,
            "currency" => 'USD',
            "total" => '10.00',
            "billingAddr" => [
                "name" => 'John Doe',
                "addrLine1" => '123 Test St',
                "city" => 'Columbus',
                "state" => 'OH',
                "zipCode" => '43123',
                "country" => 'USA',
                "email" => 'testingtester@2co.com',
                "phoneNumber" => '555-555-5555',
            ],
            "shippingAddr" => [
                "name" => 'John Doe',
                "addrLine1" => '123 Test St',
                "city" => 'Columbus',
                "state" => 'OH',
                "zipCode" => '43123',
                "country" => 'USA',
                "email" => 'testingtester@2co.com',
                "phoneNumber" => '555-555-5555',
            ],
        ]);
        $validated['pre_paid'] = $validated['total_charges'];
        $validated['payment_info'] = $charge;
        $validated['payment_status'] = 'APPROVED' === $charge['response']['responseCode'] ? true : false;
        return [
            'success' => $validated['payment_status'],
            'data' => $validated,
        ];
    }
}
