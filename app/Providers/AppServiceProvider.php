<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    private $segmentsUrl = 'storage/thumbnail/';
    private $thumbnail = [
        // 'pear'       => 'pear.png',
        'pear'       => 'https://cdn-icons-png.flaticon.com/128/8323/8323780.png',
        // 'brandImage' => 'brandImage.png',
        'brandImage' => 'https://cdn-icons-png.flaticon.com/128/982/982997.png',
        // 'nameBranch' => 'jsAsOOP.png',
        'nameBranch' => 'https://cdn-icons-png.flaticon.com/128/982/982997.png',
        // 'penRegister' => 'penregister.png',
        'penRegister' => 'https://cdn-icons-png.flaticon.com/128/4776/4776615.png',
        // loading="lazy" alt="Бумага " title="Бумага " width="64" height="64">',
        // 'laravelbook' => 'laravelbook.png',
        'laravelbook' => 'https://kupichitay.com.ua/wp-content/uploads/2020/03/u_files_store_3_2336915.jpg',
    ];
    /**
     * Зарегистрируйте любые услуги приложения.
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share([
            // 'siteFavicon' => URL::asset($this->segmentsUrl.$this->thumbnail['pear']),
            'siteFavicon' => $this->thumbnail['pear'],
            // 'brandImage'  => URL::asset($this->segmentsUrl.$this->thumbnail['brandImage']),
            'brandImage'  => $this->thumbnail['brandImage'],
            // 'nameBranch'  => URL::asset($this->segmentsUrl.$this->thumbnail['nameBranch']),
            'nameBranch'  => $this->thumbnail['nameBranch'],
            'penRegister' => $this->thumbnail['penRegister'],
            'laravelBook' => $this->thumbnail['laravelbook'],
        ]);

        Gate::define('show_products', function ($user, $products) {
            return ($user->name == 'Dany') ? true : false;
        });

    }
}
