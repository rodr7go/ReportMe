<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Report;
use App\User;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();
        // dd($reports);
        return view('reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $report = new Report;

        $users = User::lists('name', 'id');

        return view('reports.create', compact('users', 'report'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Reports\CreateReportRequest $request)
    {
        $report  = Report::create( $request->except(['image1', 'image2', 'image3']) );
        $this->storeImages($request, $report);
        return redirect()->route('reports.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::findOrFail($id);
        $users = User::lists('name', 'id');

        return view('reports.edit', compact('users', 'report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Reports\EditReportRequest $request, $id)
    {
        $report = Report::findOrFail($id);
        $report->update($request->except(['image1', 'image2', 'image3']) );
        $this->uploadImages($request, $report);

        return redirect()->route('reports.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::findOrFail($id);

        if ($report->delete())
        {
            \File::deleteDirectory(public_path('uploads/reports/'.$report->id));
        }

        return redirect()->route('reports.index');
    }

    public function storeImages($request, $report)
    {
        for ($i = 1; $i <= 3; $i++)
        {
            if ( $request->hasFile('image' . $i) && $request->file('image' . $i)->isValid())
            {
                $file = $request->file('image' . $i);
                $fileExt = $file->getClientOriginalExtension();
                $directory = 'reports/'. $report->id .'/';
                $image = $directory . 'image'. $i . '.' .  $fileExt;
                
                switch ($i) {
                    case 1:
                        $report->image1 = 'image1.' . $fileExt;
                        break;
                    case 2:
                        $report->image2 = 'image2.' . $fileExt;
                        break;
                    case 3:
                        $report->image3 = 'image3.' . $fileExt;
                        break;
                }
                $report->save();
                \Storage::disk('local')->put($image,  \File::get($file));
            }
        }
    }

    public function uploadImages($request, $report)
    {
        for ($i = 1; $i <= 3; $i++)
        {
            if ( $request->hasFile('image' . $i) && $request->file('image' . $i)->isValid())
            {
                $file = $request->file('image' . $i);
                $fileExt = $file->getClientOriginalExtension();
                $directory = 'reports/'. $report->id .'/';
                $image = $directory . 'image'. $i . '.' .  $fileExt;
                
                switch ($i) {
                    case 1:
                        if (\Storage::disk('local')->exists($directory.$report->image1))
                        {
                            \Storage::delete($directory.$report->image1);
                            $report->image1 = 'image1.' . $fileExt;
                            break;
                        }
                    case 2:
                        if (\Storage::disk('local')->exists($directory.$report->image2))
                        {
                            \Storage::delete($directory.$report->image2);
                            $report->image2 = 'image2.' . $fileExt;
                            break;
                        }
                    case 3:
                        if (\Storage::disk('local')->exists($directory.$report->image3))
                        {
                            \Storage::delete($directory.$report->image3);
                            $report->image3 = 'image3.' . $fileExt;
                            break;
                        }
                }
                $report->save();
                \Storage::disk('local')->put($image,  \File::get($file));
            }
        }
    }

    public function response ($report_id)
    {
        return view('reports.admin.response', compact('report_id'));
    }

    public function saveResponse(Request $request, $report_id)
    {   
        $report = Report::findOrFail($report_id);

        $report->answer = $request->get('answer');
        $report->status = $request->get('status');

        $report->update();

        return redirect()->route('reports.index');
    }
}