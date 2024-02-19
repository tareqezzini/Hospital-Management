<?php

namespace App\Interfaces\Finance;

interface FinanceInterfaces
{
     // get All Receipt
     public function index();

     // show form add
     public function create();

     // store Receipt
     public function store($request);
     //print Receipt
     public function show($id);
     // edit Receipt
     public function edit($id);

     // Update Receipt
     public function update($request);

     // destroy Receipt
     public function destroy($request);
}
