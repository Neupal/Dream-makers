<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DescriptionController;

use App\Http\Controllers\ImageController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\IconController;

use App\Http\Controllers\NetworkController;

use App\Http\Controllers\DetailController;
use App\Http\Controllers\SloganController;
use App\Http\Controllers\ScopeController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ConsultingController;
use App\Http\Controllers\StandardController;
use App\Http\Controllers\ReachController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ValueController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\LeadershipController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\AddressController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/home', [ContactController::class, 'index']);

Route::get('/about', [ContactController::class, 'about']);

Route::get('/services', [ContactController::class, 'services']);

Route::get('/products', [ContactController::class, 'product']);

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::post('/contactstore', [ContactController::class, 'store'])->name('contactstore');

Route::get('/database', [DescriptionController::class, 'create'])->name('database');
Route::get('/database/view', [DescriptionController::class, 'view'])->name('database.view');
Route::post('/database', [DescriptionController::class, 'kept'])->name('database');
Route::get('/database/delete/{id}', [DescriptionController::class, 'delete'])->name('database.delete');
Route::get('/database/edit/{id}', [DescriptionController::class, 'edit'])->name('database.edit');
Route::put('/database/update/{id}', [DescriptionController::class, 'update'])->name('database.update');

//AddressController
// Route::get('/addresscreate', [AddressController::class, 'create']);
// Route::post('/addressstore', [AddressController::class, 'store'])->name('addressstore');
// Route::get('/addressview', [AddressController::class, 'view'])->name('addressview');
// Route::get('/addressdelete/{id}', [AddressController::class, 'delete'])->name('addressdelete');
// Route::get('/addressedit/{id}', [AddressController::class, 'edit'])->name('addressedit');
// Route::put('/addressupdate/{id}', [AddressController::class, 'update'])->name('addressupdate');

//BlogController
// Route::get('/blogcreate', [BlogController::class, 'create']);
// Route::post('/blogstore', [BlogController::class, 'store'])->name('blogstore');
// Route::get('/blogindex', [BlogController::class, 'index'])->name('blogindex');
// Route::get('/blogdelete/{id}', [BlogController::class, 'delete'])->name('blogdelete');
// Route::get('/blogedit/{id}', [BlogController::class, 'edit'])->name('blogedit');
// Route::put('/blogupdate/{id}', [BlogController::class, 'update'])->name('blogupdate');
// Route::get('/blogview/{id}', [BlogController::class, 'view'])->name('blogview');

//ClientController
Route::get('/clientcreate', [ClientController::class, 'create']);
Route::post('/clientstore', [ClientController::class, 'store'])->name('clientstore');
Route::get('/clientindex', [ClientController::class, 'index'])->name('clientindex');
Route::get('/clientdelete/{id}', [ClientController::class, 'delete'])->name('clientdelete');
Route::get('/clientedit/{id}', [ClientController::class, 'edit'])->name('clientedit');
Route::put('/clientupdate/{id}', [ClientController::class, 'update'])->name('clientupdate');
Route::get('/clientview/{id}', [ClientController::class, 'view'])->name('clientview');

//ConsultingController
Route::get('/consultingcreate', [ConsultingController::class, 'create']);
Route::post('/consultingstore', [ConsultingController::class, 'store'])->name('consultingstore');
Route::get('/consultingindex', [ConsultingController::class, 'index'])->name('consultingindex');
Route::get('/consultingdelete/{id}', [ConsultingController::class, 'delete'])->name('consultingdelete');
Route::get('/consultingedit/{id}', [ConsultingController::class, 'edit'])->name('consultingedit');
Route::put('/consultingupdate/{id}', [ConsultingController::class, 'update'])->name('consultingupdate');
Route::get('/consultingview/{id}', [ConsultingController::class, 'view'])->name('consultingview');

//DataController
Route::get('/', [DataController::class, 'index']);
Route::get('/about', [DataController::class, 'about']);
Route::get('/services', [DataController::class, 'service']);
Route::get('/products', [DataController::class, 'product']);
Route::get('/contact', [DataController::class, 'contact']);
Route::get('/resource', [DataController::class, 'footer']);

//ExpertController
Route::get('/expertcreate', [ExpertController::class, 'create']);
Route::post('/expertstore', [ExpertController::class, 'store'])->name('expertstore');
Route::get('/expertindex', [ExpertController::class, 'index'])->name('expertindex');
Route::get('/expertdelete/{id}', [ExpertController::class, 'delete'])->name('expertdelete');
Route::get('/expertedit/{id}', [ExpertController::class, 'edit'])->name('expertedit');
Route::put('/expertupdate/{id}', [ExpertController::class, 'update'])->name('expertupdate');
Route::get('/expertview/{id}', [ExpertController::class, 'view'])->name('expertview');

//FeatureController
// Route::get('/featurecreate', [FeatureController::class, 'create']);
// Route::post('/featurestore', [FeatureController::class, 'store']);
// Route::get('/featureview', [FeatureController::class, 'view'])->name('featureview');
// Route::get('/featuredelete/{id}', [FeatureController::class, 'delete'])->name('featuredelete');
// Route::get('/featureedit/{id}', [FeatureController::class, 'edit'])->name('featureedit');
// Route::put('/featureupdate/{id}', [FeatureController::class, 'update'])->name('featureupdate');

//GoalController
// Route::get('/goalcreate', [GoalController::class, 'create']);
// Route::post('/goalstore', [GoalController::class, 'store']);
// Route::get('/goalview', [GoalController::class, 'view'])->name('goalview');
// Route::get('/goaldelete/{id}', [GoalController::class, 'delete'])->name('goaldelete');
// Route::get('/goaledit/{id}', [GoalController::class, 'edit'])->name('goaledit');
// Route::put('/goalupdate/{id}', [GoalController::class, 'update'])->name('goalupdate');

//HomeController
Route::get('/homecreate', [HomeController::class, 'create']);
Route::post('/homestore', [HomeController::class, 'store'])->name('homestore');
Route::get('/homeindex', [HomeController::class, 'index'])->name('homeindex');
Route::get('/homedelete/{id}', [HomeController::class, 'delete'])->name('homedelete');
Route::get('/homeedit/{id}', [HomeController::class, 'edit'])->name('homeedit');
Route::put('/homeupdate/{id}', [HomeController::class, 'update'])->name('homeupdate');
Route::get('/homeview/{id}', [HomeController::class, 'view'])->name('homeview');

//IconController
// Route::get('/iconcreate', [IconController::class, 'create']);
// Route::post('/iconstore', [IconController::class, 'store']);
// Route::get('/iconindex', [IconController::class, 'index'])->name('iconindex');
// Route::get('/icondelete/{id}', [IconController::class, 'delete'])->name('icondelete');
// Route::get('/iconedit/{id}', [IconController::class, 'edit'])->name('iconedit');
// Route::put('/iconupdate/{id}', [IconController::class, 'update'])->name('iconupdate');
// Route::get('/iconview/{id}', [IconController::class, 'view'])->name('iconview');

//IntroController
Route::get('/introcreate', [IntroController::class, 'create']);
Route::post('/introstore', [IntroController::class, 'store'])->name('introstore');
Route::get('/introindex', [IntroController::class, 'index'])->name('introindex');
Route::get('/introdelete/{id}', [IntroController::class, 'delete'])->name('introdelete');
Route::get('/introedit/{id}', [IntroController::class, 'edit'])->name('introedit');
Route::put('/introupdate/{id}', [IntroController::class, 'update'])->name('introupdate');
Route::get('/introview/{id}', [IntroController::class, 'view'])->name('introview');

//LeadershipController
Route::get('/leadershipcreate', [LeadershipController::class, 'create']);
Route::post('/leadershipstore', [LeadershipController::class, 'store'])->name('leadershipstore');
Route::get('/leadershipindex', [LeadershipController::class, 'index'])->name('leadershipindex');
Route::get('/leadershipdelete/{id}', [LeadershipController::class, 'delete'])->name('leadershipdelete');
Route::get('/leadershipedit/{id}', [LeadershipController::class, 'edit'])->name('leadershipedit');
Route::put('/leadershipupdate/{id}', [LeadershipController::class, 'update'])->name('leadershipupdate');
Route::get('/leadershipview/{id}', [LeadershipController::class, 'view'])->name('leadershipview');

//NetworkController
// Route::get('/networkcreate', [NetworkController::class, 'create']);
// Route::post('/networkstore', [NetworkController::class, 'store']);
// Route::get('/networkview', [NetworkController::class, 'view'])->name('networkview');
// Route::get('/networkdelete/{id}', [NetworkController::class, 'delete'])->name('networkdelete');
// Route::get('/networkedit/{id}', [NetworkController::class, 'edit'])->name('networkedit');
// Route::put('/networkupdate/{id}', [NetworkController::class, 'update'])->name('networkupdate');

//OutreachController
// Route::get('/outreachcreate', [OutreachController::class, 'create']);
// Route::post('/outreachstore', [OutreachController::class, 'store']);
// Route::get('/outreachview', [OutreachController::class, 'view'])->name('outreachview');
// Route::get('/outreachdelete/{id}', [OutreachController::class, 'delete'])->name('outreachdelete');
// Route::get('/outreachedit/{id}', [OutreachController::class, 'edit'])->name('outreachedit');
// Route::put('/outreachupdate/{id}', [OutreachController::class, 'update'])->name('outreachupdate');

//ImageController
// Route::get('/imagecreate', [ImageController::class, 'create']);
// Route::post('/imagestore', [ImageController::class, 'store'])->name('imagestore');
// Route::get('/imageshow', [ImageController::class, 'show'])->name('imageshow');
// Route::get('/imagedelete/{id}', [ImageController::class, 'delete'])->name('imagedelete');
// Route::get('/imageedit/{id}', [ImageController::class, 'edit'])->name('imageedit');
// Route::put('/imageupdate/{id}', [ImageController::class, 'update'])->name('imageupdate');

//InvestorController
// Route::get('/investorcreate', [InvestorController::class, 'create']);
// Route::post('/investorstore', [InvestorController::class, 'store'])->name('investorstore');
// Route::get('/investorview', [InvestorController::class, 'view'])->name('investorview');
// Route::get('/investordelete/{id}', [InvestorController::class, 'delete'])->name('investordelete');
// Route::get('/investoredit/{id}', [InvestorController::class, 'edit'])->name('investoredit');
// Route::put('/investorupdate/{id}', [InvestorController::class, 'update'])->name('investorupdate');

//DetailController
// Route::get('/detailcreate', [DetailController::class, 'create']);
// Route::post('/detailstore', [DetailController::class, 'store'])->name('detailstore');
// Route::get('/detailview', [DetailController::class, 'view'])->name('detailview');
// Route::get('/detaildelete/{id}', [DetailController::class, 'delete'])->name('detaildelete');
// Route::get('/detailedit/{id}', [DetailController::class, 'edit'])->name('detailedit');
// Route::put('/detailupdate/{id}', [DetailController::class, 'update'])->name('detailupdate');

//OfferController
// Route::get('/offercreate', [OfferController::class, 'create']);
// Route::post('/offerstore', [OfferController::class, 'store'])->name('offerstore');
// Route::get('/offerview', [OfferController::class, 'view'])->name('offerview');
// Route::get('/offerdelete/{id}', [OfferController::class, 'delete'])->name('offerdelete');
// Route::get('/offeredit/{id}', [OfferController::class, 'edit'])->name('offeredit');
// Route::put('/offerupdate/{id}', [OfferController::class, 'update'])->name('offerupdate');

//QuestionController
Route::get('/questioncreate', [QuestionController::class, 'create']);
Route::post('/questionstore', [QuestionController::class, 'store'])->name('questionstore');
Route::get('/questionindex', [QuestionController::class, 'index'])->name('questionindex');
Route::get('/questiondelete/{id}', [QuestionController::class, 'delete'])->name('questiondelete');
Route::get('/questionedit/{id}', [QuestionController::class, 'edit'])->name('questionedit');
Route::put('/questionupdate/{id}', [QuestionController::class, 'update'])->name('questionupdate');
Route::get('/questionview/{id}', [QuestionController::class, 'view'])->name('questionview');

//ReachController
Route::get('/reachcreate', [ReachController::class, 'create']);
Route::post('/reachstore', [ReachController::class, 'store'])->name('reachstore');
Route::get('/reachindex', [ReachController::class, 'index'])->name('reachindex');
Route::get('/reachdelete/{id}', [ReachController::class, 'delete'])->name('reachdelete');
Route::get('/reachedit/{id}', [ReachController::class, 'edit'])->name('reachedit');
Route::put('/reachupdate/{id}', [ReachController::class, 'update'])->name('reachupdate');
Route::get('/reachview/{id}', [ReachController::class, 'view'])->name('reachview');

//StandardController
Route::get('/standardcreate', [StandardController::class, 'create']);
Route::post('/standardstore', [StandardController::class, 'store'])->name('standardstore');
Route::get('/standardindex', [StandardController::class, 'index'])->name('standardindex');
Route::get('/standarddelete/{id}', [StandardController::class, 'delete'])->name('standarddelete');
Route::get('/standardedit/{id}', [StandardController::class, 'edit'])->name('standardedit');
Route::put('/standardupdate/{id}', [StandardController::class, 'update'])->name('standardupdate');
Route::get('/standardview/{id}', [StandardController::class, 'view'])->name('standardview');

//SloganController
// Route::get('/slogancreate', [SloganController::class, 'create']);
// Route::post('/sloganstore', [SloganController::class, 'store'])->name('sloganstore');
// Route::get('/sloganview', [SloganController::class, 'view'])->name('sloganview');
// Route::get('/slogandelete/{id}', [SloganController::class, 'delete'])->name('slogandelete');
// Route::get('/sloganedit/{id}', [SloganController::class, 'edit'])->name('sloganedit');
// Route::put('/sloganupdate/{id}', [SloganController::class, 'update'])->name('sloganupdate');

//ScopeController
// Route::get('/scopecreate', [ScopeController::class, 'create']);
// Route::post('/scopestore', [ScopeController::class, 'store'])->name('scopestore');
// Route::get('/scopeview', [ScopeController::class, 'view'])->name('scopeview');
// Route::get('/scopedelete/{id}', [ScopeController::class, 'delete'])->name('scopedelete');
// Route::get('/scopeedit/{id}', [ScopeController::class, 'edit'])->name('scopeedit');
// Route::put('/scopeupdate/{id}', [ScopeController::class, 'update'])->name('scopeupdate');

//ServiceController
Route::get('/servicecreate', [ServiceController::class, 'create']);
Route::post('/servicestore', [ServiceController::class, 'store']);
Route::get('/serviceindex', [ServiceController::class, 'index'])->name('serviceindex');
Route::get('/servicedelete/{id}', [ServiceController::class, 'delete'])->name('servicedelete');
Route::get('/serviceedit/{id}', [ServiceController::class, 'edit'])->name('serviceedit');
Route::put('/serviceupdate/{id}', [ServiceController::class, 'update'])->name('serviceupdate');
Route::get('/serviceview/{id}', [ServiceController::class, 'view'])->name('serviceview');

//ValueController
Route::get('/valuecreate', [ValueController::class, 'create']);
Route::post('/valuestore', [ValueController::class, 'store'])->name('valuestore');
Route::get('/valueindex', [ValueController::class, 'index'])->name('valueindex');
Route::get('/valuedelete/{id}', [ValueController::class, 'delete'])->name('valuedelete');
Route::get('/valueedit/{id}', [ValueController::class, 'edit'])->name('valueedit');
Route::put('/valueupdate/{id}', [ValueController::class, 'update'])->name('valueupdate');
Route::get('/valueview/{id}', [ValueController::class, 'view'])->name('valueview');

//VacancyController
// Route::get('/vacancycreate', [VacancyController::class, 'create']);
// Route::post('/vacancystore', [VacancyController::class, 'store'])->name('vacancystore');
// Route::get('/vacancyview', [VacancyController::class, 'view'])->name('vacancyview');
// Route::get('/vacancydelete/{id}', [VacancyController::class, 'delete'])->name('vacancydelete');
// Route::get('/vacancyedit/{id}', [VacancyController::class, 'edit'])->name('vacancyedit');
// Route::put('/vacancyupdate/{id}', [VacancyController::class, 'update'])->name('vacancyupdate');

//ProductController
Route::get('/productcreate', [ProductController::class, 'create']);
Route::post('/productstore', [ProductController::class, 'store'])->name('productstore');
Route::get('/productview', [ProductController::class, 'view'])->name('productview');
Route::get('/productdelete/{id}', [ProductController::class, 'delete'])->name('productdelete');
Route::get('/productedit/{id}', [ProductController::class, 'edit'])->name('productedit');
Route::put('/productupdate/{id}', [ProductController::class, 'update'])->name('productupdate');

Route::get('/master', function () {
    return view('/assets/master');
});

Route::get('/layout', function () {
    return view('/admin/view');
});
//dashboard
Route::get('/panel', function () {
    return view('/light/table');
});

Route::get('/signin', function () {
    return view('/auth/signin');
});

Route::get('/signup', function () {
    return view('/auth/signup');
});

Route::get('/login', [CustomAuthController::class, 'login'])->middleware('in');
Route::get('/register', [CustomAuthController::class, 'register'])->middleware('in');
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::get('/panel', [CustomAuthController::class, 'dashboard'])->middleware('is');
Route::get('/logout', [CustomAuthController::class, 'logout']);