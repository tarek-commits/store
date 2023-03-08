<?php


function isLocalHost()
{
    return config('app.app_run_locally');
}