<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//LISTING 
$route['listing/(:any)'] = 'welcome/listing/$1';
$route['ViewCategory/(:any)'] = 'welcome/ViewByCategory/$1';
$route['RecentListing'] = 'welcome/ViewMostRecentListings';
$route['MostRatedListing'] = 'welcome/ViewMostRatedListings';

//ADMIN
$route['login'] = 'welcome/login';
$route['SubmitLoginform'] = 'Signin/verify_user';
$route['AdminHome'] = 'Signin/Home';
$route['addListing'] = 'Admin/AddListing';

$route['AddApprover'] = 'Admin/AddApprover';
$route['ViewSystemUsers'] = 'Admin/ViewSystemUsers';
$route['EditSystemUser/(:any)'] = 'Admin/EditSystemUser/$1';

$route['ViewpendingListing'] = 'Admin/ViewpendingListing';
$route['ViewApprovedListing'] = 'Admin/ViewApprovedListing';
$route['ViewRejectedListing'] = 'Admin/ViewRejectedListing';
$route['ViewListingDetails/(:any)'] = 'Admin/ViewListingDetails/$1';

$route['listingcategories'] = 'Admin/ListingCategories';
$route['addlistingcategories'] = 'Admin/AddListingCategories';
$route['PendingListing/(:any)'] = 'Admin/PendingListing/$1';
$route['ApprovePendingListing/(:any)'] = 'Admin/ApprovePendingListing/$1';
$route['RejectPendingListing/(:any)'] = 'Admin/RejectPendingListing/$1';

$route['aboutus'] = 'welcome/aboutus';
$route['blog'] = 'welcome/blog';
$route['blog/(:any)'] = 'welcome/blog/$1';
$route['AddBlog'] = 'Admin/AddBlog';
$route['SubmitArticle'] = 'Admin/SubmitAriticle';
$route['EditBlog'] = 'welcome/EditBlog/';
$route['DeleteBlog/(:any)'] = 'welcome/DeleteBlog/$1';
$route['contactus'] = 'welcome/contactus';
$route['register'] = 'Signin/register';
$route['SubmitRegisterform'] = 'Signin/Add_User';
$route['SubmitRegisterform2'] = 'Signin/Add_ApproverUser';
$route['SubmitRegisterformEdit'] = 'Signin/EditUserDetails';
$route['verify_useremail/(:any)'] = 'Signin/verify_useremail';
$route['DisableUser/(:any)'] = 'Signin/EnableDisableUser/$1/0';
$route['EnableUser/(:any)'] = 'Signin/EnableDisableUser/$1/1';
$route['Admin/logout'] = 'Signin/logout';


