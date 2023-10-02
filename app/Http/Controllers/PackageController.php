<?php

namespace App\Http\Controllers;

use App\Http\Resources\PackageCollection;
use App\Models\Package;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class PackageController extends Controller
{
    public function showAll(Request $request)
    {
        $packages = QueryBuilder::for(Package::class)
            ->allowedSorts(['created_at'])
            ->allowedFilters(['package_id'])
            ->paginate(10);
        return new PackageCollection($packages);
    }
}
