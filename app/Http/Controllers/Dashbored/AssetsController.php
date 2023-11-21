<?php
namespace App\Http\Controllers\Dashbored;
    
use App\Assets;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use jeremykenedy\LaravelLogger\App\Http\Traits\ActivityLogger;
use RealRashid\SweetAlert\Facades\Alert;

class AssetsController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:asset-list|asset-create|asset-edit|asset-delete|asset-changestatus', ['only' => ['index']]);
         $this->middleware('permission:asset-create', ['only' => ['create','store']]);
         $this->middleware('permission:asset-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:asset-delete', ['only' => ['destroy']]);
         $this->middleware('permission:asset-changestatus', ['only' => ['changeStatus']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        ActivityLogger::activity("عرض صفحة كافة الاصول");
        $assets = Assets::orderBy('id','DESC')->paginate(10);
        return view('dashboard.assets.index',compact('assets'))
            ->with('i', ($request->input('page', 1) - 1) * 10);

    }

    public function create()
    {
        ActivityLogger::activity("عرض صفحة إضافة اصل جديد ");
        return view('dashboard.assets.create');

    }

    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'الرجاء ادخل اسم الاصل',
            'name.unique'=>'اسم الاصل مستخدم مسبقا',
        ];
        $this->validate($request, [
            'name' => ['required', 'string','unique:assets,name'],
        ], $messages);
        try {
            DB::transaction(function () use ($request) {
                $assets = new Assets();
                $assets->name = $request->name;
                $assets->active = 1;
                $assets->save();
            });
            Alert::success('تمت عملية إضافة اصل  بنجاح');
            ActivityLogger::activity($request->name . ":إضافة اصل جديد ");
            return redirect()->route('assets');
        } catch (\Exception $e) {
            Alert::warning($e->getMessage());
            ActivityLogger::activity($request->name . " :فشل عملية إضافة اصل جديد ");
            return redirect()->back();
        }
    }

    public function changeStatus(Request $request, $id)
    {
        $assets_id = decrypt($id);
        try {
            DB::transaction(function () use ($request, $assets_id) {
                $assets = Assets::find($assets_id);
                if ($assets->active == 1) {
                    $active = 0;
                } else {
                    $active = 1;
                }
                $assets->active = $active;
                $assets->save();
            });
            ActivityLogger::activity($assets_id . "تغيير حالة  اصل:");
            Alert::success('تمت عملية تغيير حالة الاصل بنجاح');

            return redirect('assets');
        } catch (\Exception $e) {

            Alert::warning($e->getMessage());
            ActivityLogger::activity($assets_id . " فشل تغيير حال اصل");

            return redirect()->back();
        }
    }
   

    

  
    public function edit($id)
    {
            $assets_id = decrypt($id);
            $assets = Assets::find($assets_id);
            ActivityLogger::activity($assets->name . ":عرض صفحة تعديل بيانات اصل");
            return view('dashboard.assets.edit')->with('assets', $assets);
    }

    public function update(Request $request, $id)
    {
        $assets_id = decrypt($id);
        $messages = [
            'name.required' => 'الرجاء ادخل اسم الاصل',
            'name.unique'=>'اسم الاصل مستخدم مسبقا',
        ];
        $this->validate($request, [
            'name' => ['required', 'string','unique:assets,name,'.$assets_id],
        ], $messages);
        try {
            DB::transaction(function () use ($request, $assets_id) {
                $assets = Assets::find($assets_id);
                $assets->name = $request->name;
                $assets->save();
                ActivityLogger::activity($assets->id . ":تعديل بيانات اصل");
            });

            Alert::success('تمت عملية تعديل بيانات اصل بنجاح');

            return redirect()->route('assets');
        } catch (\Exception $e) {

            Alert::warning($e->getMessage());
            ActivityLogger::activity($assets_id . ":  فشل تعديل بيانات اصل ");

            return redirect()->back();
        }
    }
}
