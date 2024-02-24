<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{

    public function addClient()
    {
        return view('pages/client/add-client');
    }
    public function detailView()
    {
        return view('pages/detail-view');
    }

    public function verify()
    {
        return view('pages/verify');
    }

    public function addEmployee()
    {
        return view('pages/add-employee');
    }
    public function editClient()
    {
        return view('pages/edit-client');
    }
    public function allEmployee()
    {
        return view('pages/all-employee');
    }
    public function allClientNext()
    {
        return view('pages/all-client-next');
    }

    public function delCheck()
    {
        return view('pages/del-check');
    }

    public function todo()
    {
        return view('pages/todo');
    }

    public function allClient()
    {
        return view('pages/all-client');
    }

    public function error404()
    {
        return view('pages/error404');
    }

    public function error500()
    {
        return view('pages/error500');
    }

    public function error501()
    {
        return view('pages/error501');
    }

    public function about()
    {
        return view('pages/about');
    }

    public function accordion()
    {
        return view('pages/accordion');
    }

    public function alerts()
    {
        return view('pages/alerts');
    }

    public function avatar()
    {
        return view('pages/avatar');
    }

    public function background()
    {
        return view('pages/background');
    }

    public function badge()
    {
        return view('pages/badge');
    }

    public function blog_details()
    {
        return view('pages/blog-details');
    }

    public function blog_edit()
    {
        return view('pages/blog-edit');
    }

    public function blog()
    {
        return view('pages/blog');
    }

    public function border()
    {
        return view('pages/border');
    }

    public function breadcrumbs()
    {
        return view('pages/breadcrumbs');
    }

    public function buttons()
    {
        return view('pages/buttons');
    }

    public function calendar2()
    {
        return view('pages/calendar2');
    }

    public function cards()
    {
        return view('pages/cards');
    }

    public function carousel()
    {
        return view('pages/carousel');
    }

    public function cart()
    {
        return view('pages/cart');
    }

    public function chart_chartjs()
    {
        return view('pages/chart-chartjs');
    }

    public function chart_echart()
    {
        return view('pages/chart-echart');
    }

    public function chart_flot()
    {
        return view('pages/chart-flot');
    }

    public function chart_morris()
    {
        return view('pages/chart-morris');
    }

    public function chart_nvd3()
    {
        return view('pages/chart-nvd3');
    }

    public function chat()
    {
        return view('pages/chat');
    }

    public function checkout()
    {
        return view('pages/checkout');
    }

    public function client_create()
    {
        return view('pages/client-create');
    }

    public function clients()
    {
        return view('pages/clients');
    }

    public function colors()
    {
        return view('pages/colors');
    }

    public function construction()
    {
        return view('pages/construction');
    }

    public function counters()
    {
        return view('pages/counters');
    }

    public function datatable()
    {
        return view('pages/datatable');
    }

    public function display()
    {
        return view('pages/display');
    }

    public function dropdown()
    {
        return view('pages/dropdown');
    }

    public function empty()
    {
        return view('pages/empty');
    }

    public function faq()
    {
        return view('pages/faq');
    }

    public function file_attachments()
    {
        return view('pages/file-attachments');
    }

    public function file_manager_1()
    {
        return view('pages/file-manager-1');
    }

    public function file_manager_2()
    {
        return view('pages/file-manager-2');
    }

    public function file_manager()
    {
        return view('pages/file-manager');
    }

    public function flex()
    {
        return view('pages/flex');
    }

    public function footers()
    {
        return view('pages/footers');
    }

    public function forgot_password()
    {
        return view('pages/forgot-password');
    }

    public function form_advanced()
    {
        return view('pages/form-advanced');
    }

    public function form_editable()
    {
        return view('pages/form-editable');
    }

    public function form_elements()
    {
        return view('pages/form-elements');
    }

    public function form_layouts()
    {
        return view('pages/form-layouts');
    }

    public function form_validation()
    {
        return view('pages/form-validation');
    }

    public function form_wizard()
    {
        return view('pages/form-wizard');
    }

    public function gallery()
    {
        return view('pages/gallery');
    }

    public function height()
    {
        return view('pages/height');
    }

    public function icons()
    {
        return view('pages/icons');
    }

    public function icons2()
    {
        return view('pages/icons2');
    }

    public function icons3()
    {
        return view('pages/icons3');
    }

    public function icons4()
    {
        return view('pages/icons4');
    }

    public function icons5()
    {
        return view('pages/icons5');
    }

    public function icons6()
    {
        return view('pages/icons6');
    }

    public function icons7()
    {
        return view('pages/icons7');
    }

    public function icons8()
    {
        return view('pages/icons8');
    }

    public function icons9()
    {
        return view('pages/icons9');
    }

    public function icons10()
    {
        return view('pages/icons10');
    }

    public function index()
    {
        return view('pages/index');
    }

    public function invoice_create()
    {
        return view('pages/invoice-create');
    }

    public function invoice_details()
    {
        return view('pages/invoice-details');
    }

    public function invoice_edit()
    {
        return view('pages/invoice-edit');
    }

    public function invoice_list()
    {
        return view('pages/invoice-list');
    }

    public function invoice_timelog()
    {
        return view('pages/invoice-timelog');
    }

    public function landing()
    {
        return view('pages/landing');
    }
    public function loaders()
    {
        return view('pages/loaders');
    }

    public function lockscreen()
    {
        return view('pages/lockscreen');
    }

    // public function login()
    // {
    //     return view('pages/login');
    // }

    public function mail_compose()
    {
        return view('pages/mail-compose');
    }

    public function mail_inbox()
    {
        return view('pages/mail-inbox');
    }

    public function mail_read()
    {
        return view('pages/mail-read');
    }

    public function mail_settings()
    {
        return view('pages/mail-settings');
    }

    public function maps()
    {
        return view('pages/maps');
    }

    public function maps1()
    {
        return view('pages/maps1');
    }

    public function maps2()
    {
        return view('pages/maps2');
    }

    public function margin()
    {
        return view('pages/margin');
    }

    public function mediaobject()
    {
        return view('pages/mediaobject');
    }

    public function modal()
    {
        return view('pages/modal');
    }

    public function navigation()
    {
        return view('pages/navigation');
    }

    public function notify()
    {
        return view('pages/notify');
    }

    public function offcanvas()
    {
        return view('pages/offcanvas');
    }

    public function opacity()
    {
        return view('pages/opacity');
    }

    public function padding()
    {
        return view('pages/padding');
    }

    public function pagination()
    {
        return view('pages/pagination');
    }

    public function panels()
    {
        return view('pages/panels');
    }

    public function position()
    {
        return view('pages/position');
    }

    public function pricing()
    {
        return view('pages/pricing');
    }

    public function product_details()
    {
        return view('pages/product-details');
    }

    public function products()
    {
        return view('pages/products');
    }

    public function profile()
    {
        return view('pages/profile');
    }

    public function progress()
    {
        return view('pages/progress');
    }

    public function project_details()
    {
        return view('pages/project-details');
    }

    public function project_edit()
    {
        return view('pages/project-edit');
    }

    public function project_new()
    {
        return view('pages/project-new');
    }

    public function projects_list()
    {
        return view('pages/projects-list');
    }

    public function projects()
    {
        return view('pages/projects');
    }

    public function rangeslider()
    {
        return view('pages/rangeslider');
    }

    public function rating()
    {
        return view('pages/rating');
    }

    public function register()
    {
        return view('pages/register');
    }

    public function scroll()
    {
        return view('pages/scroll');
    }

    public function services()
    {
        return view('pages/services');
    }

    public function settings()
    {
        return view('pages/settings');
    }

    public function sweetalert()
    {
        return view('pages/sweetalert');
    }

    public function switcher()
    {
        return view('pages/switcher');
    }

    public function table_editable()
    {
        return view('pages/table-editable');
    }

    public function tables()
    {
        return view('pages/tables');
    }

    public function tabs()
    {
        return view('pages/tabs');
    }

    public function tags()
    {
        return view('pages/tags');
    }

    public function task_create()
    {
        return view('pages/task-create');
    }

    public function task_edit()
    {
        return view('pages/task-edit');
    }

    public function tasks_list()
    {
        return view('pages/tasks-list');
    }

    public function terms()
    {
        return view('pages/terms');
    }

    public function thumbnails()
    {
        return view('pages/thumbnails');
    }

    public function ticket_details()
    {
        return view('pages/ticket-details');
    }

    public function timeline()
    {
        return view('pages/timeline');
    }

    public function tooltipandpopover()
    {
        return view('pages/tooltipandpopover');
    }

    public function treeview()
    {
        return view('pages/treeview');
    }

    public function typography()
    {
        return view('pages/typography');
    }

    public function users_list()
    {
        return view('pages/users-list');
    }

    public function width()
    {
        return view('pages/width');
    }

    public function wishlist()
    {
        return view('pages/wishlist');
    }

    public function wysiwyag()
    {
        return view('pages/wysiwyag');
    }
}
