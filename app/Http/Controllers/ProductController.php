<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Job;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobLetterShipped;
class ProductController extends Controller
{
    public function index()
    {
            $products = Job::all();
            return view('dashboard',compact('products'));

    }


    public function store(Request $request)
    {
        $product = new \App\Models\Job;
        $product->company_name = $request->company;
        $product->email = $request->email;
        $product->phone = $request->phone;
        $product->location = $request->location;
        $product->job_title = $request->job_title;
        $product->job_discription = $request->job_des;
        $product->job_type = $request->job_type;

        $product->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $product = \App\Models\Job::find($id);
        return view('EditProduct',compact('product'));
    }

    public function update(Request $request,$id)
    {
        $product = \App\Models\Job::find($id);
        $product->company_name = $request->company;
        $product->email = $request->email;
        $product->phone = $request->phone;
        $product->location = $request->location;
        $product->job_title = $request->job_title;
        $product->job_discription = $request->job_des;
        $product->job_type = $request->job_type;
        $product->save();

        return redirect('/dashboard');
    }

    public function delete($id)
    {
        $product = \App\Models\Job::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function apply($id)
    {
      return view('applyed',compact('id'));
    }

    public function applyed(Request $request,$id)
    {
        $applyed = new \App\Models\applyedJob;
        $applyed->name = $request->name;
        $applyed->email = $request->email;
        $applyed->phone = $request->phone;
        $applyed->job_id = $id;
        if($request->hasFile('resume')){
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/resume/',$filename);
            $applyed->resume = $filename;
        }else{
            return $request;
            $applyed->resume = '';
        }
        $applyed->save();
        $this->mailSender($applyed);
        return redirect('/');

    }

    public function appliedJobs()
    {
        $appliedJobs = \App\Models\applyedJob::leftJoin('jobs','jobs.id','=','applyed_jobs.job_id')->select('*')->get();
        return view('appliedCandidate',compact('appliedJobs'));

    }

    public function totalCandidate()
    {
        $totalCandidate = \App\Models\applyedJob::count();
        return view('totalCandidate',compact('totalCandidate'));

    }

    public function candidateDetails($id)
    {
        $appliedJobDetailes = \App\Models\applyedJob::leftJoin('jobs','jobs.id','=','applyed_jobs.job_id')->select('jobs.job_title','applyed_jobs.name','applyed_jobs.name','applyed_jobs.phone','applyed_jobs.email','applyed_jobs.name','jobs.job_title')->where('applyed_jobs.id','=',$id)->first();

        return view('appliedCandidateDetailes',compact('appliedJobDetailes'));

    }

    public function mailSender($data)
    {

        $content = [
            'subject' => $data->name, 'Applied For new job',
            'body' =>". $data->name .Applied For new job.His candidate profile created in". $data->created_at,
        ];

        Mail::to($data->email)->send(new JobLetterShipped($data));

        return "Email has been sent.";
    }

}
