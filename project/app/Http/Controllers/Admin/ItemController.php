<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\IStripeService;

class ItemController extends Controller
{
  public function __construct(
    protected IStripeService $stripeService,
  ) {}

  public function index()
  {
    return view('admin.items.index', [
      'items' => $this->stripeService->getItems(),
    ]);
  }
}
