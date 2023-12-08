<?php

namespace App\Infrastructure\Controllers;

interface ControllerInterface
{
    public function index();
    public function show($id);
    public function store($data, $id);
    public function update($id);
    public function destroy($id);

}
