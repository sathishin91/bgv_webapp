<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//new added
$routes->get('/all-client', 'ClientController::index');
// $routes->get('/all-client', 'Pages::allClient');
$routes->get('/todo', 'EmployeeController::todoIndex');
$routes->get('/del-check', 'EmployeeController::delCheck');
$routes->get('/all-client-next', 'ClientController::index2');
$routes->get('/add-employee', 'pages::addEmployee');
$routes->get('/add-client', 'pages::addClient');
// $routes->get('/edit-client', 'ClientController::index3');
$routes->get('/all-employee', 'EmployeeController::index');

$routes->get('/verify', 'pages::verify');
$routes->get('/detail-view', 'pages::detailView');
$routes->get('/login', 'Login::index');
$routes->get('/dashboard', 'DashboardController::index');
// $routes->get('ClientController/bulk_download', 'ClientController::bulk_download');



$routes->post('/login', 'Login::checkLogin');
$routes->get('/logout', 'Login::logout');

// $routes->post('/add-employee', 'ClientController::addEmployee');
// $routes->get('/all-employee', 'ClientController::listEmployee');
$routes->post('ClientController/toggleStar/(:segment)', 'ClientController::toggleStar/$1');
$routes->match(['get', 'post'], '/panDashboard', 'EmployeeController::panDashboard');



$routes->get('/error404', 'Pages::error404');
$routes->get('/error500', 'Pages::error500');
$routes->get('/error501', 'Pages::error501');
// $routes->get('/all-client', 'Pages::allClient');
$routes->get('/about', 'Pages::about');
$routes->get('/accordion', 'Pages::accordion');
$routes->get('/alerts', 'Pages::alerts');
$routes->get('/avatar', 'Pages::avatar');
$routes->get('/background', 'Pages::background');
$routes->get('/badge', 'Pages::badge');
$routes->get('/blog-details', 'Pages::blog-details');
$routes->get('/blog-edit', 'Pages::blog-edit');
$routes->get('/blog', 'Pages::blog');
$routes->get('/border', 'Pages::border');
$routes->get('/breadcrumbs', 'Pages::breadcrumbs');
$routes->get('/buttons', 'Pages::buttons');
$routes->get('/calendar2', 'Pages::calendar2');
$routes->get('/cards', 'Pages::cards');
$routes->get('/carousel', 'Pages::carousel');
$routes->get('/cart', 'Pages::cart');
$routes->get('/chart-chartjs', 'Pages::chart-chartjs');
$routes->get('/chart-echart', 'Pages::chart-echart');
$routes->get('/chart-flot', 'Pages::chart-flot');
$routes->get('/chart-morris', 'Pages::chart-morris');
$routes->get('/chart-nvd3', 'Pages::chart-nvd3');
$routes->get('/chat', 'Pages::chat');
$routes->get('/checkout', 'Pages::checkout');
$routes->get('/client-create', 'Pages::client-create');
$routes->get('/clients', 'Pages::clients');
$routes->get('/colors', 'Pages::colors');
$routes->get('/construction', 'Pages::construction');
$routes->get('/counters', 'Pages::counters');
$routes->get('/datatable', 'Pages::datatable');
$routes->get('/display', 'Pages::display');
$routes->get('/dropdown', 'Pages::dropdown');
$routes->get('/empty', 'Pages::empty');
$routes->get('/faq', 'Pages::faq');
$routes->get('/file-attachments', 'Pages::file-attachments');
$routes->get('/file-manager-1', 'Pages::file-manager-1');
$routes->get('/file-manager-2', 'Pages::file-manager-2');
$routes->get('/file-manager', 'Pages::file-manager');
$routes->get('/flex', 'Pages::flex');
$routes->get('/footers', 'Pages::footers');
$routes->get('/forgot-password', 'Pages::forgot-password');
$routes->get('/form-advanced', 'Pages::form-advanced');
$routes->get('/form-editable', 'Pages::form-editable');
$routes->get('/form-elements', 'Pages::form-elements');
$routes->get('/form-layouts', 'Pages::form-layouts');
$routes->get('/form-validation', 'Pages::form-validation');
$routes->get('/form-wizard', 'Pages::form-wizard');
$routes->get('/gallery', 'Pages::gallery');
$routes->get('/height', 'Pages::height');
$routes->get('/icons', 'Pages::icons');
$routes->get('/icons2', 'Pages::icons2');
$routes->get('/icons3', 'Pages::icons3');
$routes->get('/icons4', 'Pages::icons4');
$routes->get('/icons5', 'Pages::icons5');
$routes->get('/icons6', 'Pages::icons6');
$routes->get('/icons7', 'Pages::icons7');
$routes->get('/icons8', 'Pages::icons8');
$routes->get('/icons9', 'Pages::icons9');
$routes->get('/icons10', 'Pages::icons10');
$routes->get('/index', 'pages::index');
$routes->get('/invoice-create', 'Pages::invoice-create');
$routes->get('/invoice-details', 'Pages::invoice-details');
$routes->get('/invoice-edit', 'Pages::invoice-edit');
$routes->get('/invoice-list', 'Pages::invoice-list');
$routes->get('/invoice-timelog', 'Pages::invoice-timelog');
$routes->get('/landing', 'Pages::landing');
$routes->get('/loaders', 'Pages::loaders');
$routes->get('/lockscreen', 'Pages::lockscreen');
$routes->get('/mail-compose', 'Pages::mail-compose');
$routes->get('/mail-inbox', 'Pages::mail-inbox');
$routes->get('/mail-read', 'Pages::mail-read');
$routes->get('/mail-settings', 'Pages::mail-settings');
$routes->get('/maps', 'Pages::maps');
$routes->get('/maps1', 'Pages::maps1');
$routes->get('/maps2', 'Pages::maps2');
$routes->get('/margin', 'Pages::margin');
$routes->get('/mediaobject', 'Pages::mediaobject');
$routes->get('/modal', 'Pages::modal');
$routes->get('/navigation', 'Pages::navigation');
$routes->get('/notify', 'Pages::notify');
$routes->get('/offcanvas', 'Pages::offcanvas');
$routes->get('/opacity', 'Pages::opacity');
$routes->get('/padding', 'Pages::padding');
$routes->get('/pagination', 'Pages::pagination');
$routes->get('/panels', 'Pages::panels');
$routes->get('/position', 'Pages::position');
$routes->get('/pricing', 'Pages::pricing');
$routes->get('/product-details', 'Pages::product-details');
$routes->get('/products', 'Pages::products');
$routes->get('/profile', 'Pages::profile');
$routes->get('/progress', 'Pages::progress');
$routes->get('/project-details', 'Pages::project-details');
$routes->get('/project-edit', 'Pages::project-edit');
$routes->get('/project-new', 'Pages::project-new');
$routes->get('/projects-list', 'Pages::projects-list');
$routes->get('/projects', 'Pages::projects');
$routes->get('/rangeslider', 'Pages::rangeslider');
$routes->get('/rating', 'Pages::rating');
$routes->get('/register', 'Pages::register');
$routes->get('/scroll', 'Pages::scroll');
$routes->get('/services', 'Pages::services');
$routes->get('/settings', 'Pages::settings');
$routes->get('/sweetalert', 'Pages::sweetalert');
$routes->get('/switcher', 'Pages::switcher');
$routes->get('/table-editable', 'Pages::table-editable');
$routes->get('/tables', 'Pages::tables');
$routes->get('/tabs', 'Pages::tabs');
$routes->get('/tags', 'Pages::tags');
$routes->get('/task-create', 'Pages::task-create');
$routes->get('/task-edit', 'Pages::task-edit');
$routes->get('/tasks-list', 'Pages::tasks-list');
$routes->get('/terms', 'Pages::terms');
$routes->get('/thumbnails', 'Pages::thumbnails');
$routes->get('/ticket-details', 'Pages::ticket-details');
$routes->get('/timeline', 'Pages::timeline');
$routes->get('/tooltipandpopover', 'Pages::tooltipandpopover');
$routes->get('/treeview', 'Pages::treeview');
$routes->get('/typography', 'Pages::typography');
$routes->get('/users-list', 'Pages::users-list');
$routes->get('/width', 'Pages::width');
$routes->get('/wishlist', 'Pages::wishlist');
$routes->get('/wysiwyag', 'Pages::wysiwyag');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
