<?php

protected $routeMiddleware = [
  'admin' => \App\Http\Middleware\EnsureIsAdmin::class,
];