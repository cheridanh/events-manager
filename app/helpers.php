<?php

use Illuminate\Support\Facades\Session;

if ( ! function_exists('flash') ) {
    function flash($message, $type = 'success')
    {
        Session::flash('notification.message', $message);
        Session::flash('notification.type', $type);
    }
}
