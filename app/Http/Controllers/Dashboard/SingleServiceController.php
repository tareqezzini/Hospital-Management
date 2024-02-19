<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSingleServiceRequest;
use App\interfaces\Services\SingleServiceInterface;
use Illuminate\Http\Request;

class SingleServiceController extends Controller
{

    private $singleService;

    public function __construct(SingleServiceInterface $singleService)
    {
        $this->singleService = $singleService;
    }
    public function index()
    {
        return $this->singleService->index();
    }


    public function store(StoreSingleServiceRequest $request)
    {
        return $this->singleService->store($request);
    }


    public function update(StoreSingleServiceRequest $request)
    {
        return $this->singleService->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->singleService->destroy($request);
    }
}
