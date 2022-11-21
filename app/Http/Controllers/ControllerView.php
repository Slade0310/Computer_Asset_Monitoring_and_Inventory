<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\AssetCategory;
use App\Models\ComputerAsset;

class ControllerView extends Controller
{
    public function login()
    {
        return view('index');
    }

    public function index(Admin $admin, AssetCategory $assetCategory, ComputerAsset $computerAsset)
    {
        // * CURRENTLY EMAIL SESSION BY ADMIN
        $adminEmail = ['adminEmail' => $admin->where('id', session('adminEmail'))->first()];
        $assetCategories = $assetCategory::orderBy('name')->get();
        $computerAssets = $computerAsset::get();
        $computerAssetsStatusOn = $computerAsset::where('status', 1);
        $computerAssetsStatusOff = $computerAsset::where('status', 0);
        $computerAssetsOnlyTrashed = $computerAsset::onlyTrashed();

        return view('admin.index', $adminEmail, compact('assetCategories', 'computerAssets', 'computerAssetsStatusOn', 'computerAssetsStatusOff', 'computerAssetsOnlyTrashed'));
    }
}
