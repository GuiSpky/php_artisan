use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::post('/login', function (Request $request) {
$request->validate([
'email' => 'required|email',
'password' => 'required',
]);
$user = User::where('email', $request->email)->first();
if (! $user || ! Hash::check($request->password, $user->p
assword)) {
throw ValidationException::withMessages([
'email' => ['The provided credentials are incorre
ct.'],
]);
}
return $user->createToken('auth_token')->plainTextToken;
});
Route::middleware('auth:sanctum')->get('/user', function (Req
uest $request) {
return $request->user();
});
Route::post('/logout', function (Request $request) {
$request->user()->currentAccessToken()->delete();
return response()->json(['message' => 'Logged out success
fully']);
});
