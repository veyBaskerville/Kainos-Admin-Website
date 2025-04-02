<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::get('/sign_in', function () {
    return view('sign_in'); // Ensure this points to the correct view
})->name('sign_in');

Route::prefix('services')->group(function () {
    Route::get('document', function () {
        return view('document');
    })->name('services.document');

    Route::get('complaint', function () {
        return view('complaint');
    })->name('services.complaint');
});

Route::prefix('publish')->group(function () {
    Route::get('news', function () {
        return view('news');
    })->name('publish.news');

    Route::get('announcement', function () {
        return view('announcement');
    })->name('publish.announcement');

    Route::get('faqs', function () {
        return view('faqs');
    })->name('publish.faqs');
});

Route::get('messages', function () {
    return view('messages');
})->name('messages');

Route::get('feedback', function () {
    return view('feedback');
})->name('feedback');

Route::get('/edit-document', function () {
    return view('edit_document');
})->name('edit_document');

Route::get('/edit-complaint', function () {
    return view('edit_complaint');
})->name('edit_complaint');

Route::get('/edit-news', function () {
    return view('edit_news');
})->name('edit_news');

Route::get('/edit-announcement', function () {
    return view('edit_announcement');
})->name('edit_announcement');

Route::get('/edit-faq', function () {
    return view('edit_faq');
})->name('edit_faq');

Route::prefix('accounts')->group(function () {
    Route::get('residents', function () {
        return view('residents');
    })->name('accounts.residents');

    Route::get('admin', function () {
        return view('admin');
    })->name('accounts.admin');
});

Route::get('/view-resident', function () {
    return view('view_resident');
})->name('view_resident');

Route::get('/view_admin', function () {
    return view('view_admin');
})->name('view_admin');

require __DIR__.'/auth.php';
