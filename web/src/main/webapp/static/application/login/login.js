angular.module('myApp')
.controller('loginController', ['$http', '$state', '$scope', '$rootScope', '$document', '$window','$location',
	function($http, $state, $scope, $rootScope, $document, $window, $location) {
		$scope.login = function(){
			$state.go('index');
		}
		window.addEventListener("keypress",function(event){
			if(event.charCode == 13){
				$scope.login();
			}
		});
		var canvas = document.querySelector('canvas');
		var c = canvas.getContext('2d');

		canvas.width = window.innerWidth-3.5;
		canvas.height = window.innerHeight-3.5;

		var particleCount = 750;
		var mouse = {
			x: window.innerWidth / 2,
			y: window.innerHeight / 2
		};

		window.addEventListener("mousemove",
			function(event) {
				mouse.x = event.clientX - canvas.width / 2;
				mouse.y = event.clientY - canvas.height / 2;
			});

		window.addEventListener("resize",
			function() {
				canvas.width = window.innerWidth;
				canvas.height = window.innerHeight;

				lightParticles = [];
				initializeParticles();
			});

		function LightParticle(x, y, radius, color) {
			this.x = x;
			this.y = y;
			this.radius = radius;
			this.color = color;

			this.update = function() {

				this.draw();
			};

			this.draw = function() {
				c.save();
				c.beginPath();
				c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
				c.shadowColor = this.color;
				c.shadowBlur = 15;
				c.shadowOffsetX = 0;
				c.shadowOffsetY = 0;
				c.fillStyle = this.color;
				c.fill();
				c.closePath();
				c.restore();
			};
		}

		var lightParticles = [];

		var timer = 0;
		var opacity = 1;
		var speed = 0.0005;
		var colors = ["#0952BD", "#A5BFF0", "#118CD6", "#1AAEE8", "#F2E8C9"];

		var initializeParticles;

		(initializeParticles = function() {
			for (var i = 0; i < particleCount; i++) {

				var randomColorIndex = Math.floor(Math.random() * 6);
				var randomRadius = Math.random() * 2;

        // Ensure particles are spawned past screen width and height so
        // there will be no missing stars when rotating canvas
        var x = (Math.random() * (canvas.width + 200)) - (canvas.width + 200) / 2;
        var y = (Math.random() * (canvas.width + 200)) - (canvas.width + 200) / 2;
        lightParticles.push(new LightParticle(x, y, randomRadius, colors[randomColorIndex]));
    		}
		})();

		function animate() {
			window.requestAnimationFrame(animate);

			c.save();
			if (isMouseDown === true) {

        		// Ease into the new opacity
        		var desiredOpacity = 0.01;
        		opacity += (desiredOpacity - opacity) * 0.03;
        		c.fillStyle = "rgba(43, 39, 72," + opacity + ")";

		        // Ease into the new speed
		        var desiredSpeed = 0.012;
		        speed += (desiredSpeed - speed) * 0.01;
		        timer += speed;

   		} else {

		        // Ease back to the original opacity
		        var originalOpacity = 1;
		        opacity += (originalOpacity - opacity) * 0.01;
		        c.fillStyle = "rgba(39, 43, 72, " + opacity + ")";

		        // Ease back to the original speed
		        var originalSpeed = 0.001;
		        speed += (originalSpeed - speed) * 0.01;
		        timer += speed;

   		}

	    c.fillRect(0, 0, canvas.width, canvas.height);
	    c.translate(canvas.width / 2, canvas.height / 2);
	    c.rotate(timer);

    	for (var i = 0; i < lightParticles.length; i++) {
    		lightParticles[i].update();
    	}

    	c.restore();

	}

		var isMouseDown = false;

		window.addEventListener("mousedown",
		function() {
			isMouseDown = true;
		});

		window.addEventListener("mouseup",
			function() {
				isMouseDown = false;
			});

		animate();

		$scope.$on("$destroy", function() {
            $("body").css("overflow","auto");
        });

	}]);