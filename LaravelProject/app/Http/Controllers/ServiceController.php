<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // return all data from data base
        $services = Service::all();
                                        //Pass $services data from db to view
        return view('service/index', compact('services'));
    }

    public function store()
    {
        // makes sure field in not empty
        $data = request()->validate([
            'name' => 'required|min:5|max:100'

        ]);

        Service::create($data);

        return redirect()->back();
    }
}
