<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about-us', 'Home::about');
$routes->get('/service', 'Home::service');
$routes->get('/products', 'Home::products');
$routes->get('/contact-us', 'Home::contact');
$routes->post('/save-contact', 'Home::saveContact');
$routes->post('/save-product-enquiry', 'Home::saveProductEnquiry');
$routes->post('/apointment-enquiry', 'Home::saveApointmentEnquiry');
$routes->post('/subscribe-enquiry', 'Home::saveSubscribeEnquiry');
$routes->post('/blog-enquiry', 'Home::saveBlogEnquiry');
$routes->get('/thankyou', 'Home::thankYou');
// $routes->get('/product/(:any)','Home::productDetails/$1');
$routes->get('/blogs', 'Home::blogs');
$routes->get('/blog/(:any)', 'Home::blog/$1');

$routes->get('/product/(:any)', 'Home::productDetails/$1');

//myproduct
$routes->get('/myproduct/(:any)', 'Home::myproduct/$1');
$routes->get('/contactme', 'Home::contactme');

//aproduct
$routes->get('/Aproduct/(:any)', 'Home::aproduct/$1');



/* -- Admin Routes */
$routes->get('/admin-login', 'Admin\Login::index');
$routes->get('/admin/dashboard', 'Admin\Login::dashboard');
$routes->post('/admin/User/adminlogin', 'Admin\Login::adminlogin');
$routes->get('/admin/logout', 'Admin\Login::logout');

$routes->get('/admin/enquiry-list', 'Admin\Enquiry::index');
$routes->get('/admin/product-enquiry', 'Admin\Enquiry::productEnquiry');
$routes->get('/admin/contact-enquiry', 'Admin\Enquiry::contactEnquiry');
$routes->get('/admin/service-enquiry', 'Admin\Enquiry::serviceEnquiryList');
$routes->get('/admin/apointment-enquiry', 'Admin\Enquiry::apointmentEnquiry');
$routes->get('/admin/subscribe-enquiry', 'Admin\Enquiry::subscribeEnquiry');
$routes->post('/get-city', 'Admin\Enquiry::get-city');
$routes->post('/enquiry', 'Admin\Enquiry::enquiry');
$routes->post('/service-enquiry', 'Admin\Enquiry::serviceEnquiry');

$routes->get('/admin/product', 'Admin\Product::index');
$routes->get('/admin/product/create-product', 'Admin\Product::createProduct');
$routes->post('/admin/save-product', 'Admin\Product::saveProduct');
$routes->get('/admin/product/edit-product/(:any)', 'Admin\Product::editProduct/$1');
$routes->post('/admin/update-product', 'Admin\Product::updateProduct');
$routes->get('/admin/product/updateStatus/(:any)/(:any)', 'Admin\Product::updateProductStatus/$1/$2');
$routes->get('/admin/product/delete/(:any)', 'Admin\Product::productDelete/$1');

//myproduct

$routes->get('/admin/myproduct', 'Admin\myProduct::index');
$routes->get('/admin/addproduct', 'Admin\myProduct::createProduct');
$routes->post('/admin/save-myproduct', 'Admin\myProduct::saveMyProduct');
$routes->get('/admin/myproduct/updateStatus/(:any)/(:any)', 'Admin\myProduct::updateProductStatus/$1/$2');
$routes->get('/admin/myproduct/delete/(:any)', 'Admin\myProduct::productDelete/$1');
$routes->get('/admin/myproduct/edit-product/(:any)', 'Admin\myProduct::editProduct/$1');
$routes->post('/admin/myproduct-product', 'Admin\myProduct::updateProduct');

//aproduct
$routes->get('/admin/Aproduct', 'Admin\Aproduct::index');
$routes->get('/admin/addaproduct', 'Admin\Aproduct::createProduct');
$routes->post('/admin/save-Aproduct', 'Admin\Aproduct::saveProduct');
$routes->get('/admin/product/edit-Aproduct/(:any)', 'Admin\Aproduct::editProduct/$1');
$routes->post('/admin/update-Aproduct', 'Admin\Aproduct::updateProduct');
$routes->get('/admin/Aproduct/updateStatus/(:any)/(:any)', 'Admin\Aproduct::updateProductStatus/$1/$2');
$routes->get('/admin/Aproduct/delete/(:any)', 'Admin\Aproduct::aproductDelete/$1');




$routes->get('/admin/testimonial', 'Admin\Testimonial::index');
$routes->get('/admin/testimonial/edit-testimonial/(:any)', 'Admin\Testimonial::editTestimonial/$1');
$routes->post('/admin/update-testimonial', 'Admin\Testimonial::updateTestimonial');
$routes->get('/admin/testimonial/updateStatus/(:any)/(:any)', 'Admin\Testimonial::updateTestimonialStatus/$1/$2');

$routes->get('/admin/home', 'Admin\Home::index');
$routes->get('/admin/home/edit-home/(:any)', 'Admin\Home::editHome/$1');
$routes->post('/admin/update-home', 'Admin\Home::updateHome');

$routes->get('/admin/about', 'Admin\About::index');
$routes->get('/admin/about/edit-about/(:any)', 'Admin\About::editAbout/$1');
$routes->post('/admin/update-about', 'Admin\About::updateAbout');

$routes->get('/admin/banner', 'Admin\Banner::index');
$routes->get('/admin/banner/edit-banner/(:any)', 'Admin\Banner::editBanner/$1');
$routes->post('/admin/update-banner', 'Admin\Banner::updateBanner');

$routes->get('/admin/client-logo', 'Admin\ClientLogo::index');
$routes->get('/admin/create-client-logo', 'Admin\ClientLogo::createClientLogo');
$routes->post('/admin/clientlogo/save', 'Admin\ClientLogo::saveClientLogo');
$routes->get('/admin/edit-client-logo/(:any)', 'Admin\ClientLogo::editClientLogo/$1');
$routes->post('/admin/update-clientlogo', 'Admin\ClientLogo::updateClientLogo');
$routes->get('/admin/client/updateStatus/(:any)/(:any)', 'Admin\ClientLogo::updateStatus/$1/$2');
$routes->get('/admin/client/delete-client-logo/(:any)', 'Admin\ClientLogo::deleteClientLogo/$1');

$routes->get('/admin/page', 'Admin\Page::index');
$routes->get('/admin/page/edit-page/(:any)', 'Admin\Page::editpage/$1');
$routes->post('/admin/page/save', 'Admin\Page::update');

$routes->get('/admin/blog', 'Admin\Blog::index');
$routes->get('/admin/blog/create-blog', 'Admin\Blog::createBlog');
$routes->post('/admin/blog/save', 'Admin\Blog::saveBlog');
$routes->get('/admin/blog/edit-blog/(:any)', 'Admin\Blog::editBlog/$1');
$routes->post('/admin/blog/update', 'Admin\Blog::updateBlog');
$routes->get('/admin/blog/updateStatus/(:any)/(:any)', 'Admin\Blog::updateStatus/$1/$2');
$routes->get('/admin/blog/delete-blog/(:any)', 'Admin\Blog::delete/$1');

$routes->get('/admin/contact-detail', 'Admin\ContactDetail::index');
$routes->get('/admin/contact-detail/edit/(:any)', 'Admin\ContactDetail::editContactDetail/$1');
$routes->post('/admin/contact-detail/update', 'Admin\ContactDetail::updateContactDetail');


$routes->get('/admin/address', 'Admin\Address::index');
$routes->get('/admin/address/create-address', 'Admin\Address::createAddress');
$routes->post('/admin/address/save', 'Admin\Address::saveAddress');
$routes->get('/admin/address/edit-addess/(:any)', 'Admin\Address::editAddress/$1');
$routes->post('/admin/address/update', 'Admin\Address::updateAddress');
$routes->get('/admin/address/updateStatus/(:any)/(:any)', 'Admin\Address::updateAddressStatus/$1/$2');
$routes->get('/admin/address/delete-address/(:any)', 'Admin\Address::deleteAddress/$1');

$routes->post('/admin/state-list', 'Admin\Address::stateList');
$routes->post('/admin/city-list', 'Admin\Address::cityList');
$routes->post('/admin/state', 'Admin\Address::state');
$routes->post('/admin/city', 'Admin\Address::city');
