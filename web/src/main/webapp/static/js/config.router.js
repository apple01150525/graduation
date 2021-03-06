angular.module('myApp')
    .config(
        ['$stateProvider', '$urlRouterProvider', '$provide', '$compileProvider',
            function($stateProvider, $urlRouterProvider, $provide, $compileProvider) {
                $compileProvider.aHrefSanitizationWhitelist(/^\s*(https?|ftp|mailto|file|javascript):/);
                $urlRouterProvider.otherwise("/index");
                $stateProvider
                    .state('index', {
                        url: "/index",
                        templateUrl: "../../static/application/index/index.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "indexController",
                        controllerAs: "indexCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/index/index.js?_3223',
                                        '../../static/application/index/index.css?_3123',
                                    ]);
                                }
                            ]
                        }
                    }).state('review', {
                        url: "/review",
                        templateUrl: "../../static/application/healthyReview/review/review.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "reviewController",
                        controllerAs: "reviewCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/review/review.js?_3223',
                                        '../../static/application/healthyReview/review/review.css?_31223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('review.A', {
                        url: "/review/A",
                        templateUrl: "../../static/application/healthyReview/review/A/A.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "reviewAController",
                        controllerAs: "reviewACtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/review/A/A.js?_311223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('review.B', {
                        url: "/review/B",
                        templateUrl: "../../static/application/healthyReview/review/B/B.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "reviewBController",
                        controllerAs: "reviewBCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/review/B/B.js?_4223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('review.C', {
                        url: "/review/C",
                        templateUrl: "../../static/application/healthyReview/review/C/C.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "reviewCController",
                        controllerAs: "reviewCCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/review/C/C.js?_4223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('review.D', {
                        url: "/review/D",
                        templateUrl: "../../static/application/healthyReview/review/D/D.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "reviewDController",
                        controllerAs: "reviewDCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/review/D/D.js?_4223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('review.E', {
                        url: "/review/E",
                        templateUrl: "../../static/application/healthyReview/review/E/E.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "reviewEController",
                        controllerAs: "reviewECtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/review/E/E.js?_4223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('review.F', {
                        url: "/review/F",
                        templateUrl: "../../static/application/healthyReview/review/F/F.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "reviewFController",
                        controllerAs: "reviewFCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/review/F/F.js?_4223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('review.G', {
                        url: "/review/G",
                        templateUrl: "../../static/application/healthyReview/review/G/G.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "reviewGController",
                        controllerAs: "reviewGCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/review/G/G.js?_4223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('record', {
                        url: "/record",
                        templateUrl: "../../static/application/healthyReview/record/record.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "recordController",
                        controllerAs: "recordCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/record/record.js?_34223',
                                        '../../static/application/healthyReview/record/record.css?_3423'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('question', {
                        url: "/question",
                        templateUrl: "../../static/application/healthyReview/question/question.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "questionController",
                        controllerAs: "questionCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthyReview/question/question.js?_34223',
                                        '../../static/application/healthyReview/question/question.css?_3523',
                                        '../../static/template/smartTable/smartTable.js?_34223',
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('healthyNews', {
                        url: "/healthyNews",
                        templateUrl: "../../static/application/healthy/healthyNews/healthyNews.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "questionNewsController",
                        controllerAs: "questionNewsCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/healthy/healthyNews/healthyNews.js?_34223',
                                        '../../static/application/healthy/healthyNews/healthyNews.css?_34223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('login', {
                        url: "/login",
                        templateUrl: "../../static/application/login/login.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "loginController",
                        controllerAs: "loginCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/login/login.js?_3423',
                                        '../../static/application/login/login.css?_4223'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('BBCindex', {
                        url: "/BBCindex",
                        templateUrl: "../../static/application/BBC/BBCindex/BBCindex.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "BBCindexController",
                        controllerAs: "BBCindexCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/BBC/BBCindex/BBCindex.js?_2323',
                                        '../../static/template/smartTable/smartTable.js?_34223',
                                        '../../static/lib/bootstrap/js/bootstrap.js'
                                    ]);
                                }
                            ]
                        }
                    })
                    .state('BBCDetail', {
                        url: "/BBCDetail/:id/:title/:content/:rebacktimes",
                        templateUrl: "../../static/application/BBC/BBCDetail/BBCDetail.html?t=" + Math.floor(Date.now() / 1000),
                        controller: "BBCDetailController",
                        controllerAs: "BBCDetailCtrl",
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([
                                        '../../static/application/BBC/BBCDetail/BBCDetail.js?_2323',
                                        '../../static/application/BBC/BBCDetail/BBCDetail.css?_4423',
                                        '../../static/lib/bootstrap/js/bootstrap.js'
                                    ]);
                                }
                            ]
                        }
                    });
            }]);