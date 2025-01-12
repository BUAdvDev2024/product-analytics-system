<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class POSService
{
    protected $usingTestData = false;

    public function __construct()
    {
        $this->usingTestData = env('TEST_API_DATA', false);
    }

    public function getViews(string $period = 'week'): array
    {
        if ($this->usingTestData) {
            return $this->getTestViews($period);
        }

        return $this->fetchFromApi('https://api.example.com/pos/views', $period);
    }

    public function getSales(string $period = 'week'): array
    {
        if ($this->usingTestData) {
            return $this->getTestSales($period);
        }

        return $this->fetchFromApi('https://api.example.com/pos/sales', $period);
    }

    public function getProducts(): array
    {
        if ($this->usingTestData) {
            return $this->getTestProducts();
        }

        return $this->fetchFromApi('https://api.example.com/pos/products', '');
    }

    // Fetch data from an API endpoint
    protected function fetchFromApi(string $url, string $period): array
    {
        $response = Http::get($url, ['period' => $period]);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Failed to fetch data');
    }

    // Test data for views with flexible periods
    protected function getTestViews(string $period = 'week'): array
    {
        $maxValues = [
            'day' => 10,
            'week' => 500,
            'month' => 1000,
            'year' => 5000,
        ];

        return $this->generateTestData($period, $maxValues);
    }

    // Test data for sales with flexible periods
    protected function getTestSales(string $period = 'week'): array
    {
        $maxValues = [
            'day' => 100,
            'week' => 5000,
            'month' => 20000,
            'year' => 100000,
        ];

        return $this->generateTestData($period, $maxValues);
    }

    // Helper function to generate test data
    private function generateTestData(string $period, array $maxValues): array
    {
        // Simulated current period data
        $currentUnique = rand(1, $maxValues[$period]);
        $currentReturning = rand(1, $maxValues[$period]);
        $currentTotal = $currentUnique + $currentReturning;

        // Simulated previous period data
        $previousUnique = rand(1, $maxValues[$period]);
        $previousReturning = rand(1, $maxValues[$period]);
        $previousTotal = $previousUnique + $previousReturning;

        // Calculate percentage difference
        $percentageDifference = $previousTotal > 0
            ? (($currentTotal - $previousTotal) / $previousTotal) * 100
            : 0;

        return [
            'period' => $period,
            'current_period' => [
                'total' => $currentTotal,
                'unique' => $currentUnique,
                'returning' => $currentReturning,
            ],
            'previous_period' => [
                'total' => $previousTotal,
                'unique' => $previousUnique,
                'returning' => $previousReturning,
            ],
            'percentage_difference' => round($percentageDifference, 2),
        ];
    }

    // Test data for products
    protected function getTestProducts(): array
    {
        $possibleProducts = [
            'Margherita Pizza',
            'Pepperoni Pizza',
            'BBQ Chicken Pizza',
            'Hawaiian Pizza',
            'Veggie Pizza',
            'Meat Lovers Pizza',
            'Cheese Pizza',
            'Buffalo Chicken Pizza',
            'Supreme Pizza',
            'Garlic Bread',
            'Mozzarella Sticks',
            'Chicken Wings',
            'Caesar Salad',
            'Greek Salad',
            'Tiramisu',
            'Cannoli',
            'Soft Drink',
            'Beer',
            'Wine',
            'Spaghetti Bolognese',
            'Fettuccine Alfredo',
            'Lasagna',
            'Garlic Knots',
            'Bruschetta',
            'Caprese Salad',
            'Minestrone Soup',
            'Panna Cotta',
            'Gelato',
            'Espresso',
            'Latte',
        ];

        $numProducts = rand(5, count($possibleProducts)); // Random number of products to return

        // Shuffle the array and take the first $numProducts items
        shuffle($possibleProducts);
        $selectedProducts = array_slice($possibleProducts, 0, $numProducts);

        // Generate random sales data for each selected product
        $productsWithData = [];
        foreach ($selectedProducts as $product) {
            $currentSales = rand(10, 100); // Random current sales
            $previousSales = rand(10, 100); // Random previous sales
            $percentageChange = $previousSales > 0 
                ? round((($currentSales - $previousSales) / $previousSales) * 100, 2)
                : 0;
            $views = rand(100, 1000); // Random number of views

            $conversionRate = $views > 0 ? round(($currentSales / $views) * 100, 2) : 0;

            $productsWithData[] = [
                'name' => $product,
                'current_sales' => $currentSales,
                'previous_sales' => $previousSales,
                'percentage_change' => $percentageChange,
                'views' => $views,
                'conversion_rate' => $conversionRate,
            ];
        }

        return $productsWithData;
    }
}
