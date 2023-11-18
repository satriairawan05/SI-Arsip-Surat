<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubBidang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubBidangController extends Controller
{
    /**
     * Constructor for Controller.
     */
    public function __construct(private $name = 'Sub Bidang', public $create = 0, public $read = 0, public $update = 0, public $delete = 0)
    {
        //
    }

    /**
     * Generate Access for Controller.
     */
    public function get_access_page()
    {
        $userRole = $this->get_access($this->name, auth()->user()->group_id);

        foreach ($userRole as $r) {
            if ($r->page_name == $this->name) {
                if ($r->action == 'Create') {
                    $this->create = $r->access;
                }

                if ($r->action == 'Read') {
                    $this->read = $r->access;
                }

                if ($r->action == 'Update') {
                    $this->update = $r->access;
                }

                if ($r->action == 'Delete') {
                    $this->delete = $r->access;
                }
            }
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(SubBidang $subBidang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubBidang $subBidang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubBidang $subBidang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubBidang $subBidang)
    {
        //
    }
}
