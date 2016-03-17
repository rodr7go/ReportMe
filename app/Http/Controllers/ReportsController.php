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
        $reports = Report::paginate(5);
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

        $this->uploadImages($request, $report);
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

        $report->delete();

        return redirect()->route('reports.index');
    }


    public function adminIndex()
    {
        $reports = Report::paginate(3);
        return view('reports.admin.index', compact('reports'));
    }

    public function uploadImages($request, $report)
    {
        for( $i=1; $i <= 3; $i++ )
        {
            if ( $request->hasFile('image'.$i) && $request->file('image'.$i)->isValid())
            {
                if ($i ==1 )
                {
                    if (  \Storage::disk('local')->exists('reports/' . $report->id . '/' . $report->image1) )
                    {
                        \Storage::delete('reports/' . $report->id . '/' . $report->image1);
                    }
                    
                    $file = $request->file('image'.$i);
                    $fileExt = $file->getClientOriginalExtension();
                    \Storage::disk('local')->put('reports/' . $report->id . '/image1.' .  $fileExt ,  \File::get($file));
                    $report->image1 = 'image1.'.$fileExt;
                    $report->save();
                }

                 if ($i ==2 )
                {
                    if (  \Storage::disk('local')->exists('reports/' . $report->id . '/' . $report->image2) )
                    {
                        \Storage::delete('reports/' . $report->id . '/' . $report->image2);
                    }
                    
                    $file = $request->file('image'.$i);
                    $fileExt = $file->getClientOriginalExtension();
                    \Storage::disk('local')->put('reports/' . $report->id . '/image2.' .  $fileExt ,  \File::get($file));
                    $report->image1 = 'image2.'.$fileExt;
                    $report->save();
                }

                //  if ($i ==1 )
                // {
                //     if (  \Storage::disk('local')->exists('reports/' . $report->id . '/' . $report->image1) )
                //     {
                //         \Storage::delete('reports/' . $report->id . '/' . $report->image1);
                //     }
                    
                //     $file = $request->file('image'.$i);
                //     $fileExt = $file->getClientOriginalExtension();
                //     \Storage::disk('local')->put('reports/' . $report->id . '/image1.' .  $fileExt ,  \File::get($file));
                //     $report->image1 = 'image1.'.$fileExt;
                //     $report->save();
                // }
            }
        }
    }
}