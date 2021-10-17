<?php
use App\Models\File;

$id = isset($_GET['id']);


echo(File::find($id));