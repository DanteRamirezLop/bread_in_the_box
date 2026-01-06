<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Sitemap;
use Illuminate\Support\Carbon;
use App\Models\Product;
use App\Models\CmsPages;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
     protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $postsitmap = Sitemap::create();
        //Rutas estaticas
        $postsitmap->add(
            Url::create("/")
                ->setLastModificationDate(Carbon::create('2025', '1', '1'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );

        $postsitmap->add(
            Url::create("/order-online")
                ->setLastModificationDate(Carbon::create('2025', '1', '1'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );
        $postsitmap->add(
            Url::create("/monthly-specialty-breads")
                ->setLastModificationDate(Carbon::create('2025', '1', '1'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );
        $postsitmap->add(
            Url::create("/international-breads")
                ->setLastModificationDate(Carbon::create('2025', '1', '1'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );
        $postsitmap->add(
            Url::create("/become-a-distribuidor")
                ->setLastModificationDate(Carbon::create('2025', '1', '1'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );
        $postsitmap->add(
            Url::create("/distributors")
                ->setLastModificationDate(Carbon::create('2025', '1', '1'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );
        $postsitmap->add(
            Url::create("/about-us")
                ->setLastModificationDate(Carbon::create('2025', '1', '1'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );
        $postsitmap->add(
            Url::create("/contact-us")
                ->setLastModificationDate(Carbon::create('2025', '1', '1'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        );

        //Rutas de productos
        Product::get()->each(function (Product $post) use ($postsitmap) {
            $postsitmap->add(
                Url::create("/product/{$post->product_custom_field10}")
                    ->setLastModificationDate(Carbon::create($post->created_at))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            );
        });

        $postsitmap->writeToFile(public_path('sitemap.xml'));

    }
}
