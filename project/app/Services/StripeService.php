<?php

namespace App\Services;

use Stripe\StripeClient;

class StripeService extends AppBaseService implements IStripeService
{
  private StripeClient $client;

  public function __construct() {
    $this->client = new StripeClient(config('stripe.api_key.secret'));
  }

  public function getItems()
  {
    try {
      return $this->client->products->all();
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
