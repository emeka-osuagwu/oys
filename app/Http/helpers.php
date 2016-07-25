<?php

function load_asset($asset_url)
{
    return ( env('APP_ENV') === 'production' ) ? secure_asset($asset_url) : asset($asset_url);
}

function getAuthUserInfo()
{
	return Auth::user();
}

function getAddress($request_uri = null)
{
        /*** check for https ***/
    $protocol = 'http';
    /*** return the full address ***/
    if($request_uri){
         return $protocol.'://'.$_SERVER['HTTP_HOST'];
    }
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}
