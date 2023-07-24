<?php

namespace App\Http\Controllers;
use App\Models\Jobapply;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
// use Image;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Jobapply::latest()->paginate(5);
    
        return view('admin.jobs.index',compact('jobs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('user.job');
    }
    public function Store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'education' => 'required',
            'nid' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx|max:5000',
            'jobTopic' => 'required',
        ]);
        // $resume = $request->file('resume');
        // $name_gen = hexdec(uniqid()).'.'.$resume->getClientOriginalExtension();
        // Image::make($resume)->resize(917,1000)->save('assets/img/jobs/'.$name_gen);

        // $save_url = 'assets/img/jobs/'.$name_gen;

            $resume = $request->file('resume');
            $destinationPath = 'assets/img/jobs/';
            $name_gen = date('YmdHis') . "." .$resume->getClientOriginalExtension();
            $save_url = $resume->move($destinationPath, $name_gen);

        Jobapply::insert([

            'name' => $request->name,
            'education' => $request->education,
            'nid' => $request->nid,
            'resume' => $save_url,
            'jobTopic' => $request->jobTopic,
            'joinType' => $request->joinType,
            'workType' => $request->workType,
            'created_at' => Carbon::now(),

        ]);

      

        return redirect()->back()
        ->with('success','You Applied successfully');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Jobapply $jobapply)
    {
        return view('admin.jobs.show',compact('jobapply'));
    }
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobapply $jobapply)
    {
        return view('admin.jobs.edit',compact('jobapply'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobapply $jobapply)
    {
        $request->validate([
            'name' => 'required',
            'education' => 'required',
            'nid' => 'required',
            'education' => 'required',
            'name' => 'required',
            'education' => 'required',
            'resume' => 'required|mimes:pdf,doc,docx|max:5000',
        ]);
        $input = $request->all();
        if ($resume= request()->hasFile('resume') && request('resume') != '') {
            $destinationPath = 'assets/img/jobs/'.$jobapply->resume;
            if(File::exists($destinationPath)){
                unlink($destinationPath);
            } 
        }
        
        if ($resume = $request->file('resume')) {
            $destinationPath = 'assets/img/jobs/';
            $name_gen = date('YmdHis') . "." . $resume->getClientOriginalExtension();
            $resume->move($destinationPath, $name_gen);
            $input['resume'] = "$name_gen";
        }else{
            unset($input['resume']);
        }
          
        $jobapply->update($input);
    
        return redirect()->route('jobapplies.index')
                        ->with('success','Job updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobapply $jobapply)
    {
        $resume = $jobapply->resume;
        $jobapply->delete();
        File::delete(asset($resume));
     
        return redirect()->route('jobapplies.index')
                        ->with('success','Job deleted successfully');
    }
}
