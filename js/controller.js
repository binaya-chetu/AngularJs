app.controller('MainController', ['$scope', function($scope){
	$scope.cart = {};
	$scope.cart.addedProducts = [];
	$scope.cart.counter = 0;
	$scope.cart.cost = 0;
	$scope.updateCart = function(product){
		$scope.cart.addedProducts.push(product);
		$scope.cart.counter = $scope.cart.addedProducts.length;
		$scope.cart.cost +=  parseInt(product.price);
	}
}]);	

app.controller('Categories', ['$scope','$http', function($scope, $http){
	$http.get('category.json')
	.then(function(response){
		$scope.categories = response.data.categories;
	});
}]);	

app.controller('Mainproducts', ['$scope','$http', function($scope, $http){
	$http.get('newproducts.json')
	.then(function(response){
		$scope.products = response.data.products;
	});
}]);	

app.controller('ProductController', ['$scope','$http','$routeParams', function($scope, $http, $routeParams){
	$http.get('newproducts.json')
	.then(function(response){
		$scope.products = response.data.products;
		$scope.productSlug = $routeParams.productSlug;
	});
}]);	




