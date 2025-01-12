<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $posServicesController;

    public function __construct(POSServicesController $posServicesController)
    {
        $this->posServicesController = $posServicesController;
    }

    public function dashboard()
    {
        //** Views */
        $viewsPerPos = $this->posServicesController->getViews();

        // for each POS, add the total views to the array
        $totalViews = 0;
        foreach ($viewsPerPos as $pos) {
            $totalViews += $pos['current_period']['total'];
        }
        $totalViews = number_format($totalViews, 0, '.', ',');

        // Calculate average percentage difference across all POS
        $totalPercentage = 0;
        $count = 0;

        foreach ($viewsPerPos as $pos) {
            if (isset($pos['percentage_difference'])) {
                $totalPercentage += $pos['percentage_difference'];
                $count++;
            }
        }

        $averagePercentageDifference = $count > 0 ? round($totalPercentage / $count, 2) : 0;

        // if its negative, make it positive and set the negative flag
        $avgViewPerNegative = false;
        if ($averagePercentageDifference < 0) {
            $averagePercentageDifference = abs($averagePercentageDifference);
            $avgViewPerNegative = true;
        }

        //** Sales */
        $salesPerPos = $this->posServicesController->getSales();

        $totalSales = 0;
        foreach ($salesPerPos as $pos) {
            $totalSales += $pos['current_period']['total'];
        }
        $totalSales = number_format($totalSales, 0, '.', ',');
        $totalSales = '£' . $totalSales;

        // Calculate average percentage difference across all POS
        $totalPercentage = 0;
        $count = 0;

        foreach ($salesPerPos as $pos) {
            if (isset($pos['percentage_difference'])) {
                $totalPercentage += $pos['percentage_difference'];
                $count++;
            }
        }

        $averagePercentageDifference = $count > 0 ? round($totalPercentage / $count, 2) : 0;

        // if its negative, make it positive and set the negative flag
        $avgViewPerNegative = false;
        if ($averagePercentageDifference < 0) {
            $averagePercentageDifference = abs($averagePercentageDifference);
            $avgViewPerNegative = true;
        }

        //** Products */
        $productsPerPos = $this->posServicesController->getProducts();

        $allProductNames = [];
        foreach ($productsPerPos as $posType => $products) {
            foreach ($products as $product) {
                $allProductNames[] = $product['name']; // Collect product names
            }
        }

        $uniqueProductNames = array_unique($allProductNames);
        $totalUniqueProducts = count($uniqueProductNames);


        return view('dashboard', [
            // Views
            'viewsPerPos' => $viewsPerPos,
            'totalViews' => $totalViews,
            'averagePercentageDifference' => $averagePercentageDifference,
            'avgViewPerNegative' => $avgViewPerNegative,

            // Sales
            'salesPerPos' => $salesPerPos,
            'totalSales' => $totalSales,
            'averagePercentageDifference' => $averagePercentageDifference,
            'avgViewPerNegative' => $avgViewPerNegative,

            // Products
            'productsPerPos' => $productsPerPos,
            'totalUniqueProducts' => $totalUniqueProducts,
        ]);
    }
}
