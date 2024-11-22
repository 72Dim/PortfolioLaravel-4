<li class="header-actions_link">
   {{-- <li class="header-actions__item--cart">   scriptForHeaderElements--}}
   <div class="header-actions__component">
       <button class="header__button ng-star-inserted"
           @if ( $nameWindow != 'cart') {{ "disabled" }} @endif
           type="button"
           {{-- formaction="{{ route('home.show.cart') }}" --}}
           name="Open-cart">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
               <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
           </svg>
           <rz-icon-counter>
               <?php
                   /*
                       if ( 0 == count($_SESSION['cart']) ) {
                           $hidden = 'hidden';
                           echo
                           '<span class="counter counter--green ng-star-inserted '.$hidden.'">';
                               echo count($_SESSION['cart']).'<!-- Указывается количество товара в корзине -->
                           </span>';
                       }
                   */
                   /*  // рабочий пример из test.loc
                       if ( 0 != count($_SESSION['cart']) ) {
                           $number = 0;
                           // $_SESSION[$_nametabl][$_catgRus][$compositeName] = $row;
                           foreach ($_SESSION['cart'] as $key => $value) {
                               $number += $_SESSION['cart'][$key]['amount'];
                           }
                           echo
                           '<span class="counter counter--green ng-star-inserted">'.
                               $number.'
                           </span><!-- Указывается количество товара в корзине -->';
                       }
                   */
                   /*
                       // $settings = session()->get('settings');
                       // if( 'total_amount' == $settings[0] && $settings[1] != 0){
                       // // echo '<pre>'.var_dump(session()->get('settings')).'</pre>';
                       //     echo'<span class="counter counter--green ng-star-inserted">'.
                       //         $settings[1].
                       //     '</span><!-- Указывается количество товара в корзине -->';
                       // }
                       // else {
                       //     echo'<span class="counter counter--green ng-star-inserted">'.
                       //         $settings[1].
                       //     '</span><!-- Корзина пуста, отображается 0 -->';
                       // }
                   */
               ?>
               @if (session()->get('total_amount') != 0)
               {{-- @if ($testNumber != '') --}}
                   <span class="counter counter--green ng-star-inserted">
                       {{-- {{ $testNumber }} --}}
                       {{ session()->get('total_amount') }}
                   </span><!-- Указывается количество товара в корзине -->
               @else
                   {{ session()->get('total_amount') }}<!-- Корзина пуста, ничего не показуется -->
               @endif
           </rz-icon-counter>
       </button>
   </div>
</li>