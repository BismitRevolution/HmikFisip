<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Profile;

class ProfileController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function indexPI()
    {
        $bidang = Profile::find(1);
        return view('profiles.profile', compact('bidang'));
    }

    public function indexAdkesma()
    {
        $bidang = Profile::find(2);
        return view('profiles.profile', compact('bidang'));
    }

    public function indexSosmas()
    {
        $bidang = Profile::find(3);
        return view('profiles.profile', compact('bidang'));
    }

    public function indexHumas()
    {
        $bidang = Profile::find(4);
        return view('profiles.profile', compact('bidang'));
    }

    public function indexKeilmuan()
    {
        $bidang = Profile::find(5);
        return view('profiles.profile', compact('bidang'));
    }

    public function indexDepor()
    {
        $bidang = Profile::find(6);
        return view('profiles.profile', compact('bidang'));
    }

    public function indexSenbud()
    {
        $bidang = Profile::find(7);
        return view('profiles.profile', compact('bidang'));
    }

    public function indexPSDM()
    {
        $bidang = Profile::find(8);
        return view('profiles.profile', compact('bidang'));
    }

    public function indexKeuangan()
    {
        $bidang = Profile::find(9);
        return view('profiles.profile', compact('bidang'));
    }

    public function update(Request $request)
    {
    	$bidang = Profile::find($request->input('id'));
        if($bidang == NULL) {
    		return Response::json("not found", 404);
    	}

    	if($request->input('divisi') != NULL) {
    		$bidang->divisi = $request->input('divisi');
    	}
        if($request->input('url_foto') != NULL) {
    		$bidang->url_foto = $request->input('url_foto');
    	}
        if($request->input('visi') != NULL) {
    		$bidang->visi = $request->input('visi');
    	}
        if($request->input('misi') != NULL) {
    		$bidang->misi = $request->input('misi');
    	}
        if($request->input('program') != NULL) {
    		$bidang->program = $request->input('program');
    	}

        $success = $bidang->save();
    	if(!$success) {
    		return Response::json("error updating", 500);
    	}
    	return Response::json($bidang, 201);
    }
}
