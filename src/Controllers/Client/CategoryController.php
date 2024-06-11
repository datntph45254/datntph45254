<?php

namespace Hi\Oop\Controllers\Client;

use Hi\Oop\Commons\Controller;
use Hi\Oop\Models\Category;
use Hi\Oop\Models\Product;

class CategoryController extends Controller
{
    private Product $product;
    private Category $category;

    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
    }
    public function index()
    {
       
    }
   

}