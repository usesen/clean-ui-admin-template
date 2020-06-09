<?php

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

Route::redirect('/', '/dashboard/alpha');

/*
|--------------------------------------------------------------------------
| Dashboard Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('dashboard')->group(function () {
  Route::get('alpha', function () {
    return view('pages.dashboard.alpha');
  });
  Route::get('beta', function () {
    return view('pages.dashboard.beta');
  });
  Route::get('crypto', function () {
    return view('pages.dashboard.crypto');
  });
  Route::get('gamma', function () {
    return view('pages.dashboard.gamma');
  });
  Route::get('docs', function () {
    return view('pages.dashboard.docs');
  });
});

/*
|--------------------------------------------------------------------------
| Default Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('pages')->group(function () {
  Route::get('login-alpha', function () {
    return view('pages.pages.login-alpha');
  });
  Route::get('login-beta', function () {
    return view('pages.pages.login-beta');
  });
  Route::get('register', function () {
    return view('pages.pages.register');
  });
  Route::get('lockscreen', function () {
    return view('pages.pages.lockscreen');
  });
  Route::get('pricing-tables', function () {
    return view('pages.pages.pricing-tables');
  });
  Route::get('invoice', function () {
    return view('pages.pages.invoice');
  });
  Route::get('page-404', function () {
    return view('pages.pages.page-404');
  });
  Route::get('page-500', function () {
    return view('pages.pages.page-500');
  });
});

/*
|--------------------------------------------------------------------------
| Ecommerce Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('ecommerce')->group(function () {
  Route::get('dashboard', function () {
    return view('pages.ecommerce.dashboard');
  });
  Route::get('products-catalog', function () {
    return view('pages.ecommerce.products-catalog');
  });
  Route::get('product-details', function () {
    return view('pages.ecommerce.product-details');
  });
  Route::get('product-edit', function () {
    return view('pages.ecommerce.product-edit');
  });
  Route::get('products-list', function () {
    return view('pages.ecommerce.products-list');
  });
  Route::get('orders', function () {
    return view('pages.ecommerce.orders');
  });
  Route::get('cart-checkout', function () {
    return view('pages.ecommerce.cart-checkout');
  });
});

/*
|--------------------------------------------------------------------------
| Forms Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('forms')->group(function () {
  Route::get('basic-form-elements', function () {
    return view('pages.forms.basic-form-elements');
  });
  Route::get('buttons', function () {
    return view('pages.forms.buttons');
  });
  Route::get('dropdowns', function () {
    return view('pages.forms.dropdowns');
  });
  Route::get('selectboxes', function () {
    return view('pages.forms.selectboxes');
  });
  Route::get('checkboxes-radio', function () {
    return view('pages.forms.checkboxes-radio');
  });
  Route::get('form-wizard', function () {
    return view('pages.forms.form-wizard');
  });
  Route::get('form-validation', function () {
    return view('pages.forms.form-validation');
  });
  Route::get('autocomplete', function () {
    return view('pages.forms.autocomplete');
  });
  Route::get('input-mask', function () {
    return view('pages.forms.input-mask');
  });
  Route::get('file-uploads', function () {
    return view('pages.forms.file-uploads');
  });
  Route::get('extras', function () {
    return view('pages.forms.extras');
  });
});

/*
|--------------------------------------------------------------------------
| Components Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('components')->group(function () {
  Route::get('date-picker', function () {
    return view('pages.components.date-picker');
  });
  Route::get('calendar', function () {
    return view('pages.components.calendar');
  });
  Route::get('carousel', function () {
    return view('pages.components.carousel');
  });
  Route::get('slider', function () {
    return view('pages.components.slider');
  });
  Route::get('modal', function () {
    return view('pages.components.modal');
  });
  Route::get('tooltips-popovers', function () {
    return view('pages.components.tooltips-popovers');
  });
  Route::get('notifications-alerts', function () {
    return view('pages.components.notifications-alerts');
  });
  Route::get('loading-progress', function () {
    return view('pages.components.loading-progress');
  });
  Route::get('progress-bars', function () {
    return view('pages.components.progress-bars');
  });
  Route::get('badges-labels', function () {
    return view('pages.components.badges-labels');
  });
  Route::get('steps', function () {
    return view('pages.components.steps');
  });
  Route::get('breadcrumbs', function () {
    return view('pages.components.breadcrumbs');
  });
  Route::get('pagination', function () {
    return view('pages.components.pagination');
  });
  Route::get('collapse', function () {
    return view('pages.components.collapse');
  });
  Route::get('tabs', function () {
    return view('pages.components.tabs');
  });
  Route::get('text-editor', function () {
    return view('pages.components.text-editor');
  });
  Route::get('nestable', function () {
    return view('pages.components.nestable');
  });
  Route::get('mail-templates', function () {
    return view('pages.components.mail-templates');
  });
});

/*
|--------------------------------------------------------------------------
| Tables Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('tables')->group(function () {
  Route::get('basic-tables', function () {
    return view('pages.tables.basic-tables');
  });
  Route::get('datatables', function () {
    return view('pages.tables.datatables');
  });
  Route::get('editable-tables', function () {
    return view('pages.tables.editable-tables');
  });
});

/*
|--------------------------------------------------------------------------
| Charts Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('charts')->group(function () {
  Route::get('chartistjs', function () {
    return view('pages.charts.chartistjs');
  });
  Route::get('chartjs', function () {
    return view('pages.charts.chartjs');
  });
  Route::get('c3', function () {
    return view('pages.charts.c3');
  });
  Route::get('peity', function () {
    return view('pages.charts.peity');
  });
});

/*
|--------------------------------------------------------------------------
| Apps Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('apps')->group(function () {
  Route::get('profile', function () {
    return view('pages.apps.profile');
  });
  Route::get('messaging', function () {
    return view('pages.apps.messaging');
  });
  Route::get('mail', function () {
    return view('pages.apps.mail');
  });
  Route::get('calendar', function () {
    return view('pages.apps.calendar');
  });
  Route::get('gallery', function () {
    return view('pages.apps.gallery');
  });
});

/*
|--------------------------------------------------------------------------
| Github Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('github')->group(function () {
  Route::get('explore', function () {
    return view('pages.github.explore');
  });
  Route::get('discuss', function () {
    return view('pages.github.discuss');
  });
});

/*
|--------------------------------------------------------------------------
| Youtube Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('youtube')->group(function () {
  Route::get('feed', function () {
    return view('pages.youtube.feed');
  });
  Route::get('view', function () {
    return view('pages.youtube.view');
  });
});

/*
|--------------------------------------------------------------------------
| Blog Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('blog')->group(function () {
  Route::get('add-post', function () {
    return view('pages.blog.add-post');
  });
  Route::get('post', function () {
    return view('pages.blog.post');
  });
  Route::get('feed', function () {
    return view('pages.blog.feed');
  });
});

/*
|--------------------------------------------------------------------------
| Layout Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('layout')->group(function () {
  Route::get('grid', function () {
    return view('pages.layout.grid');
  });
  Route::get('cards', function () {
    return view('pages.layout.cards');
  });
  Route::get('sidebars', function () {
    return view('pages.layout.sidebars');
  });
  Route::get('utilities', function () {
    return view('pages.layout.utilities');
  });
  Route::get('typography', function () {
    return view('pages.layout.typography');
  });
});

/*
|--------------------------------------------------------------------------
| Icons Pages
|--------------------------------------------------------------------------
*/
 
Route::prefix('icons')->group(function () {
  Route::get('fontawesome', function () {
    return view('pages.icons.fontawesome');
  });
  Route::get('linear-icons-free', function () {
    return view('pages.icons.linear-icons-free');
  });
  Route::get('icomoon-free', function () {
    return view('pages.icons.icomoon-free');
  });
});

