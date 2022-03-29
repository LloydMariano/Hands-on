<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends Controller
{

 public function page($slug)
 {
  $page = $this->pageContents($slug);
  return view('page', ['page' => $page]);
 }

 public function pageContents($slug)
 {
  $page = [];
  $page["slug"] = $slug;
  if ($slug == "welcome") {
   $page["title"] = "welcome";
   $page["content"] = "Content..";
  }

  if ($slug == "home") {
   $page["title"] = "home";
   $page["content"] = "Content..";
  }  

  return $page;
 }
}