<?php

namespace App\Livewire\Home;

use App\Model\Banner;
use App\Model\Category;
use App\Model\Product;
use App\Model\Wishlist;
use Livewire\Component;

class HomeComponent extends Component
{

    public $categories;
    public $banners;
    public $selected_banner_id;
    public $selected_banner;
    public $featured_products;

    public function mount(){

    $this->categories = Category::where(['position'=>0,'status'=>1])->get();
    $this->banners = Banner::active()->where('banner_position', 'main')->get();
    $this->selected_banner_id = Banner::active()->first()->id;
    $this->selected_banner = Banner::active()->first();
    $this->featured_products = Product::featured()->get(); 
    }

    public function render()
    {
         return view('livewire.home.home-component')->layout('livewire.layouts.base');
    }
    // this one also

    public function updateSelectedBanner($id)
    {
        $this->selected_banner_id = $id;
        $this->selected_banner = Banner::find($id);
    }

    public function addToWhishlist($product_id)
    { 
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->where('product_id', $product_id)->first();
        if ($wishlist) {
            Wishlist::where('user_id', auth()->user()->id)->where('product_id', $product_id)->delete();
        }else{
            $wishlist = new Wishlist;
            $wishlist->user_id = auth()->user()->id;
            $wishlist->product_id = $product_id;
            $wishlist->save();
        }
    }

    public function showModal()
{
    $this->emit('show-modal', ['title' => 'My Modal']);
}
}
