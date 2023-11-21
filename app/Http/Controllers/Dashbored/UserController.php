<?php
    
namespace App\Http\Controllers\Dashbored;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use jeremykenedy\LaravelLogger\App\Http\Traits\ActivityLogger;
use RealRashid\SweetAlert\Facades\Alert;

    
class UserController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:user-list|user-create|user-edit|user-delete|user-changestatus', ['only' => ['index']]);
         $this->middleware('permission:user-create', ['only' => ['create','store']]);
         $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:user-delete', ['only' => ['destroy']]);
         $this->middleware('permission:user-changestatus', ['only' => ['changeStatus']]);

    }

    public function index(Request $request)
    {
        ActivityLogger::activity("عرض صفحة كافة المستخدمين");

        $data = User::where('id','!=',auth()->user()->id)->orderBy('id','DESC')->paginate(5);
        return view('dashboard.users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('dashboard.users.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'الرجاء ادخل الاسم',
            'email.required' => 'الرجاء ادخل البريد الالكتروني',
            'email.unique'=>'البريد الالكتروني مستخدم مسبقا ',
            'password.required' => 'الرجاء ادخل كلمة المرور',
            'password.same' => 'كلمة المرور وتاكيد كلمة المرور غير متطابقتين',
            'roles.required' => 'الرجاء تحديد صلاحيات المستخدم',
        ];
        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users,email'],
            'password' => ['required', 'string', 'min:6', 'same:confirm-password'],
            'roles' => 'required'

        ], $messages);
    
        try {
            DB::transaction(function () use ($request) {

                $input = $request->all();
                $input['password'] = Hash::make($input['password']);
                $user = User::create($input);
                $user->assignRole($request->input('roles'));
            
            });

            Alert::success('تمت عملية إضافة مستخدم بنجاح');
            ActivityLogger::activity($request->name . ":إضافة مستخدم جديد ");
            return redirect()->route('users');
        } catch (\Exception $e) {

            Alert::warning($e->getMessage());
            ActivityLogger::activity($request->name . ":فشل عملية إضافة مستخدم جديد ");
            return redirect()->back();
        }
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.users.show',compact('user'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = decrypt($id);

        $user = User::find($user_id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('dashboard.users.edit',compact('user','roles','userRole'));
    }
    
    
    public function update(Request $request, $id)
    {
        $user_id = decrypt($id);

        $messages = [
            'name.required' => 'الرجاء ادخل الاسم',
            'email.required' => 'الرجاء ادخل البريد الالكتروني',
            'email.unique'=>'البريد الالكتروني مستخدم مسبقا ',
            'password.required' => 'الرجاء ادخل كلمة المرور',
            'password.same' => 'كلمة المرور وتاكيد كلمة المرور غير متطابقتين',
            'roles.required' => 'الرجاء تحديد صلاحيات المستخدم',
        ];
        $this->validate($request, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users,email,'.$user_id],
            'password' => ['required', 'string', 'min:6', 'same:confirm-password'],
            'roles' => 'required'
        ], $messages);
    
        try {
            DB::transaction(function () use ($request,$user_id) {
                $input = $request->all();
                if(!empty($input['password'])){ 
                    $input['password'] = Hash::make($input['password']);
                }else{
                    $input = Arr::except($input,array('password'));    
                }
            
                $user = User::find($user_id);
                $user->update($input);
                DB::table('model_has_roles')->where('model_id',$user_id)->delete();
                $user->assignRole($request->input('roles'));
            
            });

            Alert::success('تمت عملية تعديل بيانات مستخدم بنجاح');
            ActivityLogger::activity($user_id . ":تعديل مستخدم");
            return redirect()->route('users');
        } catch (\Exception $e) {

            Alert::warning($e->getMessage());
            ActivityLogger::activity($user_id . ":فشل عملية تعديل بيانات مستخدم");
            return redirect()->back();
        }
        
                        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = decrypt($id);

        try {
            DB::transaction(function () use ($user_id) {

                User::find($user_id)->delete();
                return redirect()->route('users');
            
            });

            Alert::success('تمت عملية الغاءمستخدم بنجاح');
            ActivityLogger::activity($user_id . ":الغاء مستخدم");
            return redirect()->route('users');
        } catch (\Exception $e) {

            Alert::warning($e->getMessage());
            ActivityLogger::activity($user_id . ":فشل عملية الغاء مستخدم");
            return redirect()->back();
        }
    
    }

    public function changePassword()
    {
       return view('dashboard.users.changepassword');
    }

    public function updatePassword(Request $request)
    {
     
    $messages = [
        'old_password.required' => 'الرجاء ادخل كلمةالمرور القديمة',
        'new_password.required' => 'الرجاء ادخل كلمةالمرور الجديده',
        'new_password.same'=>'كلمة المرور الجديدة وتاكيد كلمة المرور الجديدة غير متطابقين',

    ];
    $this->validate($request, [
        'old_password' => 'required',
        'new_password' => 'required|same:new_password_confirmation',

    ], $messages);
    try {
        DB::transaction(function () use ($request) {
              #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            Alert::error("كلمة المرور القديمة غير متطابقة");
            return back()->with("error", "كلمة المرور القديمة غير متطابقة! ");
        }
        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        });

        Alert::success('تمت عملية تغير كلمة المرور بنجاح');
        ActivityLogger::activity($request->id . ":تغير كلمة مرور للمستخدم");
        return redirect()->route('users');
    } catch (\Exception $e) {

        Alert::warning($e->getMessage());
        ActivityLogger::activity($request->id . ":فشل عملية تغير كلمه مرور للمستخدم");
        return redirect()->back();
    }
}

public function changeStatus(Request $request, $id)
{
    $user_id = decrypt($id);

    try {
        DB::transaction(function () use ($request, $user_id) {
            $users = User::find($user_id);
            if ($users->active == 1) {
                $active = 0;
            } else {
                $active = 1;
            }

            $users->active = $active;
            $users->save();
        });
        ActivityLogger::activity($user_id . "تغيير حالة  مستخدم:");

        Alert::success('تمت عملية تغيير حالةالمستخدم بنجاح');

        return redirect('users');
    } catch (\Exception $e) {

        Alert::warning($e->getMessage());
        ActivityLogger::activity($user_id . " فشل تغيير حالة  مستخدم");

        return redirect()->back();
    }
}
 
}
