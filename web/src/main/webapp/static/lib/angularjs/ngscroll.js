(function() {
  /**
   * AngularJS ng-scroll directive
   *
   * Adds support for ng-scroll event attribute to bind on mouse wheel events. Use the `$event` local variable
   * to access the jQuery event object
   *
   * @example <ANY ng-scroll="onScroll($event)"></ANY>
   * @author Darlan Alves <darlan@moovia.com>
   */
  angular.module('ngWheel', []).directive('ngScroll', ['$parse', function($parse) {
    return function(scope, element, attr) {
      var fn = $parse(attr.ngScroll);

      element.bind('scroll', function(event) {
        scope.$apply(function() {
          fn(scope, {
            $event: event
          });
        });
      });
    };
  }]);

}.call(this));