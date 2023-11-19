<?php

namespace App\Http\Controllers\Dashbored;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Branches;
use Spatie\Permission\Models\Role;
use DB;
use jeremykenedy\LaravelLogger\App\Http\Traits\ActivityLogger;
use RealRashid\SweetAlert\Facades\Alert;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        ActivityLogger::activity("عرض صفحة كافة الفروع");
        $branches = Branches::orderBy('id','DESC')->paginate(5);
        return view('dashboard.branches.index',compact('branches'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ActivityLogger::activity("عرض صفحة إضافة فرع جديد ");
        return view('dashboard.branches.create');

    }

    public function store(Request $request)
    {
        $messages = [
            'branche_number.required' => 'الرجاء ادخل رقم الفرع ',
            'branche_name.required' => 'الرجاء ادخل اسم الفرع',
            'branche_number.unique'=>' رقم الفرع مستخدم مسبقا ',
            'branche_name.unique'=>' اسم الفرع مستخدم مسبقا ',
            'branche_number.digits'=>'يجب أن يتكون رقم الفرع من 3 أرقام'

        ];
        $this->validate($request, [
            'branche_number' => ['required','digits:3','unique:branches,branche_number'],
            'branche_name' => ['required', 'string','unique:branches,branche_name'],

        ], $messages);
        try {
            DB::transaction(function () use ($request) {
                $branche = new Branches();
                $branche->branche_number = $request->branche_number;
                $branche->branche_name = $request->branche_name;
                $branche->active = 1;
                $branche->save();
            });

            Alert::success('تمت عملية إضافة فرع  بنجاح');
            ActivityLogger::activity($request->branche_number . ":إضافة فرع جديد ");
            return redirect()->route('branches');
        } catch (\Exception $e) {

            Alert::warning($e->getMessage());
            ActivityLogger::activity($request->branche_number . ":فشل عملية إضافة فرع جديد ");

            return redirect()->back();
        }
    }

    
    public function changeStatus(Request $request, $id)
    {
        $branche_id = decrypt($id);

        try {
            DB::transaction(function () use ($request, $branche_id) {
                $branche = Branches::find($branche_id);
                if ($branche->active == 1) {
                    $active = 0;
                } else {
                    $active = 1;
                }

                $branche->active = $active;
                $branche->save();
            });
            ActivityLogger::activity($branche_id . "تغيير حالة  فرع:");

            Alert::success('تمت عملية تغيير حالةالفرع بنجاح');

            return redirect('branches');
        } catch (\Exception $e) {

            Alert::warning($e->getMessage());
            ActivityLogger::activity($branche_id . " فشل تغيير حالة  فرع");

            return redirect()->back();
        }
    }

   
    public function edit($id)
    {
            $branche_id = decrypt($id);
            $branche = Branches::find($branche_id);
            ActivityLogger::activity($branche->name . ":عرض صفحة تعديل بيانات فرع");
            return view('dashboard.branches.edit')->with('branche', $branche);
    }

    public function update(Request $request, $id)
    {
        $branche_id = decrypt($id);

        $messages = [
            'branche_number.required' => 'الرجاء ادخل رقم الفرع ',
            'branche_name.required' => 'الرجاء ادخل اسم الفرع',
            'branche_number.unique'=>' رقم الفرع مستخدم مسبقا ',
            'branche_name.unique'=>' اسم الفرع مستخدم مسبقا ',
            'branche_number.digits'=>'يجب أن يتكون رقم الفرع من 3 أرقام'

        ];
        $this->validate($request, [

            'branche_number' => ['required', 'digits:3','unique:branches,branche_number,'.$branche_id],
            'branche_name' => ['required', 'string','unique:branches,branche_name,'.$branche_id],

        ], $messages);

        try {
            DB::transaction(function () use ($request, $branche_id) {
                $branche = Branches::find($branche_id);
                $branche->branche_number = $request->branche_number;
                $branche->branche_name = $request->branche_name;
                $branche->save();
                ActivityLogger::activity($branche->id . ":تعديل بيانات فرع");
            });

            Alert::success('تمت عملية تعديل بيانات فرع بنجاح');

            return redirect()->route('branches');
        } catch (\Exception $e) {

            Alert::warning($e->getMessage());
            ActivityLogger::activity($branche_id . ":  فشل تعديل بيانات فرع ");

            return redirect()->back();
        }
    }
}
