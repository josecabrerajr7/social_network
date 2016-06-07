app.controller('RegisterController', ['$scope', '$uibModal', '$log', function($scope, $uibModal, $log) {
      $scope.animationsEnabled = true;
      
      // This is creating the Modal for the login and I am also attaching the LoginCancelController also added animation
      $scope.registerModal = function (size) {
      $uibModal.open({
        animation: $scope.animationsEnabled,
        templateUrl: 'views/auth/register.php',
        controller: 'RegisterCancelController',
        size: size
      });
    };
      $scope.toggleAnimation = function () {
        $scope.animationsEnabled = !$scope.animationsEnabled;
      };
  // LoginCancelController function that closes the $uibModal and $uibModalInstance is require for it to close the modal
  }]).controller('RegisterCancelController', function($scope, $uibModalInstance) {
        $scope.cancel = function () {
        $uibModalInstance.dismiss('cancel');
      };
    });