var app = angular.module('shoppingApp', ['ngRoute']);

app.directive('ngCategories', function(){
	return {
		templateUrl: 'templates/categoryList.html'
	};
});	

app.directive('ngSelectCategory', function(){
	return {
		templateUrl: 'templates/categorySelect.html'
	};
});	

app.config(['$locationProvider', '$routeProvider',
    function config($locationProvider, $routeProvider){
      $routeProvider.
        when('/', {
			controller: 'Mainproducts',
			templateUrl: 'templates/mainProducts.html'
        }).
        when('/newproducts', {
			controller: 'Mainproducts',
			templateUrl: 'templates/newProducts.html'
        }).
        when('/saleproducts', {
			controller: 'Mainproducts',
			templateUrl: 'templates/salesProducts.html'
        }).
        when('/topproducts', {
			controller: 'Mainproducts',
			templateUrl: 'templates/topProducts.html'
        }).
		when('/product/:productSlug', {
			controller: 'ProductController',
			templateUrl: 'templates/product.html'
		}).
        otherwise('/');
    }
]);
