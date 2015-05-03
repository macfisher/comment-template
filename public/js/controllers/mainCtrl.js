//public/js/controllers/mainCtrl.js

angular.module('mainCtrl', [])

	//inject the Comment service into our controller
	.controller('mainController', function($scope, $http, Comment) {
		
		//obj. to hold all the data for the new comment form
		$scope.commentData = {};
		
		//loading variable to show the spinning loading icon
		$scope.loading = true;
		
		//get all the comments first and binf it to the $scope.comments obj.
		//use the function i created in commentService.js
		//GET ALL COMMENTS
		Comment.get()
			.success(function(data) {
				$scope.comments = data;
				$scope.loading = false;
			});
			
		//function to handle submitting the form
		//SAVE A COMMENT
		$scope.submitComment = function() {
			
			$scope.loading = true;
			
			//save the comment. pass in comment data from the form
			//use the function created in commentService.js
			Comment.save($scope.commentData)
				.success(function(data) {
					
					//if successful, refresh comment list
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});
				})
				.error(function(data) {
					console.log(data);
				});
		};
		
		//function to handle deleting a comment
		//DELETE A COMMENT
		$scope.deleteComment = function(id) {
			
			$scope.loading = true;
			
			//use the function created in commentService.js
			Comment.destroy(id)
				.success(function(data) {
					
					//if successful, refresh comment list
					Comment.get()
						.success(function(getData) {
							$scope.comments = getData;
							$scope.loading = false;
						});
				});
		};
	});
