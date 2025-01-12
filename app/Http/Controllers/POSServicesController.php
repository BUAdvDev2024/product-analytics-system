<?php

namespace App\Http\Controllers;

use App\Services\DeliveryAppService;
use App\Services\OnlineService;
use App\Services\RestaurantService;
use Illuminate\Http\Request;

class POSServicesController extends Controller
{
    protected $onlineService;
    protected $deliveryAppService;
    protected $restaurantService;

    public function __construct(
        OnlineService $onlineService,
        DeliveryAppService $deliveryAppService,
        RestaurantService $restaurantService
    ) {
        $this->onlineService = $onlineService;
        $this->deliveryAppService = $deliveryAppService;
        $this->restaurantService = $restaurantService;
    }

    public function getViews()
    {
        return [
            'online' => $this->onlineService->getViews(),
            'delivery' => $this->deliveryAppService->getViews(),
            'restaurant' => $this->restaurantService->getViews(),
        ];
    }

    public function getSales()
    {
        return [
            'online' => $this->onlineService->getSales(),
            'delivery' => $this->deliveryAppService->getSales(),
            'restaurant' => $this->restaurantService->getSales(),
        ];
    }

    public function getProducts()
    {
        $allPosProducts = [
            'online' => $this->onlineService->getProducts(),
            'delivery' => $this->deliveryAppService->getProducts(),
            'restaurant' => $this->restaurantService->getProducts(),
        ];

        $allProducts = [];
        foreach ($allPosProducts as $posType => $products) {
            foreach ($products as $product) {
                $productName = $product['name'];
                if (isset($allProducts[$productName])) {
                    $allProducts[$productName]['current_sales'] += $product['current_sales'];
                    $allProducts[$productName]['views'] += $product['views'];
                } else {
                    $allProducts[$productName] = $product;
                }
            }
        }

        foreach ($allProducts as $productName => $product) {
            $allProducts[$productName]['conversion_rate'] = round(($product['current_sales'] / $product['views']) * 100, 2);
        }

        return [
            'online' => $this->onlineService->getProducts(),
            'delivery' => $this->deliveryAppService->getProducts(),
            'restaurant' => $this->restaurantService->getProducts(),
            'all' => $allProducts,
        ];
    }
}
