<?php
namespace lasselehtinen\MyPackage;
use Illuminate\Support\ServiceProvider;
class EducationManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(EducationManager::class, function () {
            return new EducationManager();
        });
        $this->app->alias(EducationManager::class, 'education-manager');
    }
}
