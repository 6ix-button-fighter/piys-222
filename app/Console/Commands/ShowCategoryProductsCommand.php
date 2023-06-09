<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Categories;

class ShowCategoryProductsCommand extends Command
{
    protected $signature = 'category:products {category_code}';

    protected $description = 'Display products in the specified category';

    public function handle()
    {
        $categoryCode = $this->argument('category_code');

        $category = Category::where('code', $categoryCode)->firstOrFail();

        if (!$category->active) {
            $this->error('Category not found or inactive.');
            return;
        }

        $products = $category->products;

        foreach ($products as $product) {
            // Выводите информацию о товаре в консоль или выполняйте необходимые действия
            $this->info($product->name);
        }
    }
}
