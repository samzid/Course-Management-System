<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\AttemptToAuthenticate;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;
use App\Http\Responses\LoginResponse;
use App\Models\Exam;
use App\Models\Register;
use App\Models\Account;
use App\Models\Library;
use App\Models\Admin;
use App\Models\RegistrationTimeHandle;
use App\Models\User;

use App\Models\Teacher;

use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Pipeline;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use Laravel\Fortify\Contracts\LoginViewResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;
use Validator;

class AdminController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */

    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }







// Sub-admin login start

public function allAdmin()
{

    return view('frontend.sub_admin_login.allAdmin_login');

}

// public function RegisterOfficeLoginForm()
// {

//     return view('frontend.sub_admin_login.register_office_login');

// }

// public function AccountOfficeLoginForm()
// {

//     return view('frontend.sub_admin_login.account_office_login');

// }

// public function LibraryOfficeLoginForm()
// {

//     return view('frontend.sub_admin_login.library_office_login');

// }

// Sub-admin login end








    public function allAdminStore(Request $request)
    {

        $password = $request->password;
        $exam = Exam::where('email', $request->email)->first();

        $register = Register::where('email', $request->email)->first();

        $account = Account::where('email', $request->email)->first();


        // $library = Library::where('email', $request->email)->first();

        $admin = Admin::where('email', $request->email)->first();
// dd($admin);
        if ($register) {
            if (Hash::check($password, $register->password)) {
                Auth::guard('register')->login($register);

                return redirect('/admin/dashboard');

            } else {
                return redirect()->back();
            }
        }

        elseif ($exam) {
            if (Hash::check($password, $exam->password)) {
                Auth::guard('exam')->login($exam);

                return redirect('/admin/dashboard');

            } else {
                return redirect()->back();
            }
        }
        elseif ($account) {
            if (Hash::check($password, $account->password)) {
                Auth::guard('account')->login($account);

                return redirect('/admin/dashboard');

            } else {
                return redirect()->back();
            }
        }

        elseif ($admin) {
            if (Hash::check($password, $admin->password)) {
                Auth::guard('admin')->login($admin);

                return redirect('/admin/dashboard');

            } else {
                return redirect()->back();
            }

        }



        else
        {
            return 'no user';
        }

    }

    public function registerLogin(Request $request)
    {
        $password = $request->password;
        // $register = Register::where('email', $request->email)->first();
        // // dd(bcrypt($exam->password));
        // if ($register) {
        //     if (Hash::check($password, $register->password)) {
        //         Auth::guard('register')->login($register);

        //         return redirect('/admin/dashboard');

        //     } else {
        //         return redirect()->back();
        //     }
        // }

        // else
        // {
        //     return 'no user';
        // }

    }

    public function accountLogin(Request $request)
    {
       $password = $request->password;
        // $account = Account::where('email', $request->email)->first();
        // // dd(bcrypt($exam->password));
        // if ($account) {
        //     if (Hash::check($password, $account->password)) {
        //         Auth::guard('account')->login($account);

        //         return redirect('/');

        //     } else {
        //         return redirect()->back();
        //     }
        // }

        // else
        // {
        //     return 'no user';
        // }

    }

    public function libraryLogin(Request $request)
    {
        $password = $request->password;
        $library = Library::where('email', $request->email)->first();
        // dd(bcrypt($exam->password));
        // if ($library) {
        //     if (Hash::check($password, $library->password)) {
        //         Auth::guard('library')->login($library);

        //         return redirect('/admin/dashboard');

        //     } else {
        //         return redirect()->back();
        //     }
        // }

        // else
        // {
        //     return 'no user';
        // }

    }



    public function loginForm()
    {
        // return view('auth.login', ['guard' => 'admin']);
    }

    public function create(Request $request): LoginViewResponse
    {
        return app(LoginViewResponse::class);
    }

    /**
     * Attempt to authenticate a new session.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return mixed
     */
    public function store(LoginRequest $request)
    {
        return $this->loginPipeline($request)->then(function ($request) {
            return app(LoginResponse::class);
        });
    }

    /**
     * Get the authentication pipeline instance.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Pipeline\Pipeline
     */
    protected function loginPipeline(LoginRequest $request)
    {
        if (Fortify::$authenticateThroughCallback) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                call_user_func(Fortify::$authenticateThroughCallback, $request)
            ));
        }

        if (is_array(config('fortify.pipelines.login'))) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                config('fortify.pipelines.login')
            ));
        }

        return (new Pipeline(app()))->send($request)->through(array_filter([
            config('fortify.limiters.login') ? null : EnsureLoginIsNotThrottled::class,
            Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
            AttemptToAuthenticate::class,
            PrepareAuthenticatedSession::class,
        ]));
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LogoutResponse
     */
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return app(LogoutResponse::class);

    }





    public function lineChart()
    {
        $totalSale = User::whereYear("created_at", date("Y"))
            ->select(
                DB::raw("(count(id)) as total "),
                DB::raw("(DATE_FORMAT(created_at, '%m')) as my_date ")
            )
            ->orderBy(
                "my_date",
                "ASC"
            )
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%m')"))
            ->pluck('total', 'my_date');

        return response($totalSale);
    }




/////////////////Registration Time Handelling///////////////////////////////////////



public function RagistrationTimeControl(Request $request, $id)
{
    // Find the record based on the provided ID
    $enable_disable = RegistrationTimeHandle::where('id',$id)->first();


//dd($enable_disable);



    // Update the null column with the new value from the form input


if($enable_disable->enable==0){

    $enable_disable->update([
        'enable' => 1,
    ]);
}

else
$enable_disable->update([
    'enable' => 0,
]);



    return redirect()->back()->with('success', 'Column updated successfully!');
}






} //main
