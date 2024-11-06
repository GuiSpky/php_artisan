'api' => [
\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAr
eStateful::class,
'throttle:api',
\Illuminate\Routing\Middleware\SubstituteBindings::class,
],
