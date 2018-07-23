<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['ProductView'] ='Products/ProductView';
$route['ProductCreateCategory'] ='Products/ProductCreateCategory';
$route['ProductCreate'] ='Products/ProductCreate';
$route['ProductCreateAction'] = 'Products/ProductCreateAction';

$route['EmployeesView'] ='Employees/EmployeesView';
$route['EmployeesCreate'] ='Employees/EmployeesCreate';

$route['MaterialsView'] ='Materials/MaterialsView';
$route['MaterialsCreate'] ='Materials/MaterialsCreate';

$route['SuppliersView'] ='Suppliers/SuppliersView';
$route['SuppliersCreate'] ='Suppliers/SuppliersCreate';

$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;