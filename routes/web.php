<?php

use App\Http\Controllers\OrganizationController;
use App\Models\Organization;
use App\Models\Participant;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data['participants'] = Participant::all();
    $data['organizations'] = Organization::all();


    return view('form', $data);
});

Route::post('/org', [OrganizationController::class, 'postOrg'])->name('post.org');
Route::post('/org-update', [OrganizationController::class, 'updateParticipant'])->name('update.org');
Route::post('/org-participant', [OrganizationController::class, 'postParticipant'])->name('post.participant');

Route::get('get-participant', function(){
    return Participant::withCount(Participant::relations())->get();
    // return Participant::with(Participant::relations())->first()->organizations;
});