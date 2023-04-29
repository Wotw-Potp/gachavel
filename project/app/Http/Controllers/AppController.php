<?php

namespace App\Http\Controllers;

use App\Services\IStripeService;

class AppController extends Controller
{
  public function __construct(
    protected IStripeService $stripeService
  ) {}

  public function index()
  {
    return view('home', [
      'items' => $this->stripeService->getItems(),
    ]);
  }
}
