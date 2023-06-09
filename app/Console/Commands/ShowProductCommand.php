<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class ShowProductCommand extends Command
{
    protected $signature = 'product:show';

    protected $description = 'Display product information';

    public function handle()
    {
        $products = Product::paginate(10); // Здесь 10 - количество товаров на странице

        // Выводите информацию о товарах в консоль или выполняйте необходимые действия

        $this->info('Products:');

        foreach ($products as $product) {
            $this->line('Name: ' . $product->name);
            $this->line('Description: ' . $product->description);
            $this->line('Price: ' . $product->price);
            $this->line('Stock Quantity: ' . $product->stock_quantity);
            $this->line('Image: ' . $product->image);
            $this->line('--------------');
        }
    }
}
