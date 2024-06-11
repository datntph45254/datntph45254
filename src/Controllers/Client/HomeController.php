<?php 

namespace Hi\Oop\Controllers\Client;

use Hi\Oop\Commons\Controller;
use Hi\Oop\Commons\Helper;
use Hi\Oop\Models\Product;

class HomeController extends Controller
{
    private Product $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    
    public function index() {
        $name = 'DucTV44';

        $products = $this->product->all();

        $this->renderViewClient('home', [
            'name' => $name,
            'products' => $products
        ]);
    }
}