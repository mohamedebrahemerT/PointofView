<?php
namespace App\Helpers;

use App\Models\Store;
use Illuminate\Support\Facades\DB;

trait BranchesTrait
{

    public function nearestBranches($request)
    {
        $stores_builder = Store::query();
        if ($request->has('category_id')){
            $stores_builder->where('category_id',$request->category_id);
        }
        $stores = $stores_builder->where('is_verified',1)
            ->where('status',1)
            ->whereNull('parent_id')
            ->whereHas('branch' , function($query1) use($request){
            $query1->select('stores.*',DB::raw('
                              6371 * ACOS(
                                  LEAST(
                                    1.0,
                                    COS(RADIANS(lat))
                                    * COS(RADIANS(' . $request['lat'] . '))
                                    * COS(RADIANS(lng - ' . $request['lng'] . '))
                                    + SIN(RADIANS(lat))
                                    * SIN(RADIANS(' . $request['lat'] . '))
                                  )
                                ) as distance'))
                ->whereNotNull('parent_id')
                ->where('status',1)
                ->where('is_verified',1)
                ->where(DB::raw('
                              6371 * ACOS(
                                  LEAST(
                                    1.0,
                                    COS(RADIANS(lat))
                                    * COS(RADIANS(' . $request['lat'] . '))
                                    * COS(RADIANS(lng - ' . $request['lng'] . '))
                                    + SIN(RADIANS(lat))
                                    * SIN(RADIANS(' . $request['lat'] . '))
                                  )
                                )'), '<', 10000000000000000000000000000000000000000)
                ->orderBy('distance','asc');
        })->with(['branch' => function($query) use($request){
            $query->select('stores.*',DB::raw('
                              6371 * ACOS(
                                  LEAST(
                                    1.0,
                                    COS(RADIANS(lat))
                                    * COS(RADIANS(' . $request['lat'] . '))
                                    * COS(RADIANS(lng - ' . $request['lng'] . '))
                                    + SIN(RADIANS(lat))
                                    * SIN(RADIANS(' . $request['lat'] . '))
                                  )
                                ) as distance'))
                ->whereNotNull('parent_id')
                ->where('status',1)
                ->where('is_verified',1)
                ->where(DB::raw('
                              6371 * ACOS(
                                  LEAST(
                                    1.0,
                                    COS(RADIANS(lat))
                                    * COS(RADIANS(' . $request['lat'] . '))
                                    * COS(RADIANS(lng - ' . $request['lng'] . '))
                                    + SIN(RADIANS(lat))
                                    * SIN(RADIANS(' . $request['lat'] . '))
                                  )
                                )'), '<', 10000000000000000000000000000000000000000)
                ->orderBy('distance','asc');
        }])->inRandomOrder()->get();
        $branches_ids = $stores->map(function($item){ return $item->branch->id; });
//        dd($branches_ids);
        return $branches_ids;
    }

    public function getModel($model,$store)
    {
        $model = 'App\\Models\\' . $model;
        if (is_null($store->parent_id)){ // get all store branches models
            $branches_ids = Store::where('parent_id',$store->id)->pluck('id')->toArray();
            $model = $model::where(function ($query) use ($store,$branches_ids){
                $query->where('store_id',$store->id)->orWhereIn('store_id',$branches_ids);
            });
        }else{ // get only this branch models
            $model = $model::where('store_id',$store->id);
        }
        return $model;
    }
}
