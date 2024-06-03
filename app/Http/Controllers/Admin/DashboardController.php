<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $dashboards = Dashboard::all();

            return view('admin.index', compact('dashboards'));
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            //
        }

        /**
         * Display the specified resource.
         */
        public function show(Dashboard $post)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Dashboard $post)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Dashboard $post)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Dashboard $post)
        {
            //
        }
    
}
