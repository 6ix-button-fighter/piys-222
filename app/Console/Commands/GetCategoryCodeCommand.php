<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class GetCategoryCodeCommand extends Command
{
    protected $signature = 'product:category-code {id}';

    protected $description = 'Get the category code for the specified product';

    public function handle()
    {
        $productId = $this->argument('id');

        $product = Product::findOrFail($productId);

        $categoryCode = $product->category->code;

        $this->info("Category Code: $categoryCode");
    }
}
