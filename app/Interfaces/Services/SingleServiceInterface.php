<?php

namespace App\interfaces\Services;



interface SingleServiceInterface
{
     public function index();
     public function store($request);
     public function update($request);
     public function destroy($request);
}
