<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\UniversitasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ProposalController as AdminProposalController;
use App\Http\Controllers\Verifikator\ProposalController as VerifikatorProposalController;
use App\Http\Controllers\Reviewer\ProposalController as ReviewerProposalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(AuthController::class)->group( function(){
    Route::get('register','register')->name('register');
    Route::get('reset','resetPassword')->name('resetPassword');
    Route::post('register','registerSimpan')->name('register.simpan');
    Route::get('login','login')->name('login');
    Route::post('login','loginAksi')->name('login.aksi');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::controller(BarangController::class)->prefix('barang')->group(function(){
        Route::get('','index')->name('barang');
        Route::get('tambah','tambah')->name('barang.tambah');
        Route::post('tambah','simpan')->name('barang.tambah.simpan');
        Route::get('edit/{id}','edit')->name('barang.edit');
        Route::post('edit/{id}','update')->name('barang.tambah.update');
        Route::get('hapus/{id}','hapus')->name('barang.hapus');
    });

    Route::controller(UniversitasController::class)->prefix('universitas')->group(function(){
        Route::get('','index')->name('universitas');
        Route::get('/{id}','showPaginationAjax')->name('universitas.showAjax');
    });

    Route::controller(kategoriController::class)->prefix('kategori')->group(function(){
        Route::get('','index')->name('kategori');
        Route::get('tambah','tambah')->name('kategori.tambah');
        Route::post('tambah','simpan')->name('kategori.tambah.simpan');
        Route::get('edit/{id}','edit')->name('kategori.edit');
        Route::post('edit/{id}','update')->name('kategori.tambah.update');
        Route::get('hapus/{id}','hapus')->name('kategori.hapus');
    });

    Route::controller(ProposalController::class)->prefix('proposal')->group(function(){
        Route::get('','index')->name('proposal');
        Route::get('/{id}','showPaginationAjax')->name('proposal.showAjax');
        Route::post('tambah','simpan')->name('proposal.tambah.simpan');

        Route::get('viewBab1/{id}','viewbab1')->name('proposal.viewBab1');
        Route::get('viewBab2/{id}','viewbab2')->name('proposal.viewBab2');
        Route::get('viewBab3/{id}','viewbab3')->name('proposal.viewBab3');
        Route::get('viewBab4/{id}','viewbab4')->name('proposal.viewBab4');

        Route::get('editBab1/{id}','editBab1')->name('proposal.editBab1');
        Route::post('editBab1','updateBab1')->name('proposal.editBab1.tambah.update');
        Route::get('editBab2/{id}','editBab2')->name('proposal.editBab2');
        Route::post('editBab2','updateBab2')->name('proposal.editBab2.tambah.update');
        Route::get('editBab3/{id}','editBab3')->name('proposal.editBab3');
        Route::post('editBab3','updateBab3')->name('proposal.editBab3.tambah.update');
        Route::get('editBab4/{id}','editBab4')->name('proposal.editBab4');
        Route::post('editBab4','updateBab4')->name('proposal.editBab4.tambah.update');

        Route::get('hapus/{id}','hapusProposal')->name('proposal.hapus');
        Route::get('ajukan/{id}','ajukanProposal')->name('proposal.ajukan');


        Route::post('editJudul','updateJudul')->name('proposal.tambah.updateJudul');

        Route::post('cariProposal','cariProposal')->name('proposal.cari');
    });

    //Akses Admin
    Route::prefix('admin')->middleware('role:1')->group(function(){
        //Admin Proposal
        Route::controller(AdminProposalController::class)->prefix('proposal')->group(function(){
            Route::get('','index')->name('admin.proposal');
            Route::get('show/{id}','show')->name('admin.proposal.show');
            Route::get('viewBab1/{id}','viewbab1')->name('admin.proposal.viewBab1');
            Route::get('viewBab2/{id}','viewbab2')->name('admin.proposal.viewBab2');
            Route::get('viewBab3/{id}','viewbab3')->name('admin.proposal.viewBab3');
            Route::get('viewBab4/{id}','viewbab4')->name('admin.proposal.viewBab4');

            //Download path, not yet implemented, placeholder
            Route::get('/download/{id}','download')->name('admin.proposal.download');

            //Ajukan Reviewer
            Route::post('ajukanReviewer1','ajukanReviewer1')->name('admin.proposal.ajukanReviewer1');
            Route::post('ajukanReviewer2','ajukanReviewer2')->name('admin.proposal.ajukanReviewer2');
            Route::post('ajukanVerifikator','ajukanVerifikator')->name('admin.proposal.ajukanVerifikator');
            
            Route::get('reviewerTabelJSON','reviewerTabelJSON')->name('admin.proposal.reviewerTabelJSON');
            Route::get('verifikatorTabelJSON','verifikatorTabelJSON')->name('admin.proposal.verifikatorTabelJSON');

        });
        //Admin Proposal End
    });

    //Akses Verifikator
    Route::prefix('verifikator')->middleware('role:4')->group(function(){
        //Verifikator Proposal
        Route::controller(VerifikatorProposalController::class)->prefix('proposal')->group(function(){
            Route::get('','index')->name('verifikator.proposal');
            Route::get('show/{id}','show')->name('verifikator.proposal.show');
            Route::get('viewBab1/{id}','viewbab1')->name('verifikator.proposal.viewBab1');
            Route::get('viewBab2/{id}','viewbab2')->name('verifikator.proposal.viewBab2');
            Route::get('viewBab3/{id}','viewbab3')->name('verifikator.proposal.viewBab3');
            Route::get('viewBab4/{id}','viewbab4')->name('verifikator.proposal.viewBab4');

            //verifikasi
            Route::post('verifikasi','verifikasi')->name('verifikator.proposal.verifikasi');
            
            Route::post('tolak','tolakProposal')->name('verifikator.proposal.tolak');
            Route::post('revisi','revisiProposal')->name('verifikator.proposal.revisi');
            Route::post('setujui','setujuiProposal')->name('verifikator.proposal.setujui');

            //Download path, not yet implemented, placeholder
            Route::get('/download/{id}','download')->name('verifikator.proposal.download');

        });
        //Verifikator Proposal End
    });

    //Akses Reviewer
    Route::prefix('reviewer')->middleware('role:3')->group(function(){
        //Reviewer Proposal
        Route::controller(ReviewerProposalController::class)->prefix('proposal')->group(function(){
            Route::get('','index')->name('reviewer.proposal');
            Route::get('show/{id}','show')->name('reviewer.proposal.show');
            Route::get('viewBab1/{id}','viewbab1')->name('reviewer.proposal.viewBab1');
            Route::get('viewBab2/{id}','viewbab2')->name('reviewer.proposal.viewBab2');
            Route::get('viewBab3/{id}','viewbab3')->name('reviewer.proposal.viewBab3');
            Route::get('viewBab4/{id}','viewbab4')->name('reviewer.proposal.viewBab4');

            //Simpan review bab
            Route::post('simpanReviewBab1','simpanReviewBab1')->name('reviewer.proposal.simpanReviewBab1');
            Route::post('simpanReviewBab2','simpanReviewBab2')->name('reviewer.proposal.simpanReviewBab2');
            Route::post('simpanReviewBab3','simpanReviewBab3')->name('reviewer.proposal.simpanReviewBab3');
            Route::post('simpanReviewBab4','simpanReviewBab4')->name('reviewer.proposal.simpanReviewBab4');

            //Simpan review proposal
            Route::post('simpanReviewProposal','simpanReviewProposal')->name('reviewer.proposal.simpanReviewProposal');

            //Download path, not yet implemented, placeholder
            Route::get('/download/{id}','download')->name('reviewer.proposal.download');

            

        });
        //Reviewer Proposal End
    });
});


