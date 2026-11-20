<?php

namespace App\View\Components;

use App\Models\Cart;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class navbar extends Component
{

    public $cart  ;

    public function __construct()
    {


        if(Auth::guard('web')->check()){


            $user_id = Auth::guard('web')->user()->id ;

            $this->cart = Cart::where("user_id" , $user_id)->with("product.image")->get() ;

        }


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
