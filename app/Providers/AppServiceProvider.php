<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    protected function formatText(array $array)
    {
        $formattedText = "";
        foreach($array as $info){
            if(count(explode(',',$info)) == 2){
                if( rtrim(explode(',',$info)[1]) == 'yellow' ) {
                    $formattedText .= "<span class='text-secondary'>". explode(',',$info)[0] ."</span>";
                }elseif( rtrim(explode(',',$info)[1]) == 'bold' ) {
                    $formattedText .= "<span class='font-bold'>". explode(',',$info)[0] ."</span>";
                }elseif( rtrim(explode(',',$info)[1]) == 'supper' ) {
                    $formattedText .= "<sup>". explode(',',$info)[0] ."</sup>";
                }else{
                    $formattedText .= $info;
                }
            }else{
                $formattedText .= $info;
            }
        }

        return rtrim($formattedText);
    }

    public function boot(): void
    {
        view()->composer('*',function($view){
            $contacts = Contact::first();
            $allAddress = $this->formatText(explode('\\',$contacts->address));
            $view->with('contacts',$contacts)->with('allAddress',$allAddress);
        });
    }
}
