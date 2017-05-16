angular.module('myApp')
.controller('indexController',['$http', '$state', '$scope', '$rootScope','$document','$window',
    function($http, $state, $scope, $rootScope,$document,$window)
    {

        var width =  window.screen.width;
        var height = window.screen.height;
        var dom = [];
        var myChart = [];
        $(".slideImg ").css("width",width);
        $(".slideImg ul li img").css("width",width);
        $(".slideImg").css("height",height);
        $(".slideImg ul li img").css("height",height);
        $(".slide").css("height",height);
        var hotImg = parseInt($(".hotWrapper .container").css("width"))/2.3;
        $(".hotWrapper img").css("width",hotImg);
        $(".pie div.container li").each(function(e){
            var pie = "pie"+(e+1);
            dom.push(document.getElementById(pie));
            myChart.push(echarts.init(dom[e]));
        });
            // 滚动事件
            $window.onscroll = function(){
                var scrollTop = $document.scrollTop();
                // console.log(scrollTop);
                var first = true;
                if(scrollTop>3995){
                    $(".hotWrapper .container div").eq(0).removeClass("rotate-l");
                    $(".hotWrapper .container div").eq(1).removeClass("rotate-m");
                    $(".hotWrapper .container div").eq(0).addClass("rotate-current");
                    $(".hotWrapper .container div").eq(1).addClass("rotate-current");
                }else if(scrollTop>3650){
                    $(".fadeIndow-next-1").addClass("fadeDown");
                }else if(scrollTop>3000){
                    $("#content").css("transition","all 0.5s ease-in-out");
                    $("#content").css("opacity","1");
                }else if(scrollTop>2300){
                    $(".diamonds_info").addClass("fadeDown");
                }else if(scrollTop>1950){
                    if(first){
                        $(".pie div.container li").each(function(e){
                            if (option[e] && typeof option[e] === "object") {
                               myChart[e].setOption(option[e], true);
                            }
                        });
                    }else{
                        first = false;
                    }
                }else if(scrollTop>1700){
                    $(".skill").addClass("fadeDown");
                }else if(scrollTop>1500){
                    $(".roll").css("opacity","1");
                }else if(scrollTop>1200){
                    $(".wrap div div").each(function(e){
                        $(".wrap div div").addClass("rotate-current");
                    });
                }else if(scrollTop>900){
                    $(".fadeIndow-next").addClass("fadeDown");
                }else if(scrollTop>500){
                    $(".showBtn dl").each(function(e){
                        if(e<2){
                            if(e == 0){
                                $(".showBtn dl").eq(e).removeClass("wow-l");
                                $(".showBtn dl").eq(e).addClass("bounce");
                            }else{
                                var bounceTimer = setTimeout(function(){
                                    $(".showBtn dl").eq(e).removeClass("wow-l");
                                    $(".showBtn dl").eq(e).addClass("bounce");
                                },500);
                            }
                        }else{
                            $(".showBtn dl").eq(e).removeClass("wow-r");
                            $(".showBtn dl").eq(e).addClass("bounce");
                        }
                    });
                }else if(scrollTop>250){
                    $(".fadeIndow").addClass("fadeDown");
                }else if(scrollTop>100){
                    $rootScope.isTransparent = "intransparent";
                }else{
                    $rootScope.isTransparent = "transparent";
                }
                $rootScope.$digest();
            }
        $scope.$on("$destroy", function() {
            angular.element($window).unbind("scroll");
        });

            // 渐变图片
            var cntNum = 0;
            var imgLength = $(".slideImg ul li").length;
            $(".slideInfo ul li").eq(cntNum).css("margin-left",-($(".slideInfo ul li").eq(cntNum).width()/2));
            function slideImg(){
                cntNum <imgLength-1?cntNum++:(cntNum = 0);
                $(".slideImg ul li").each(function(e){
                    if(e == cntNum){
                        $(".slideImg ul li").eq(cntNum).addClass("current");
                        var timer = setTimeout(function(){
                         $(".slideInfo ul li").eq(cntNum).addClass("current");
                         var mLeft = $(".slideInfo ul li").eq(cntNum).width()/2;
                         $(".slideInfo ul li").eq(cntNum).css("margin-left",(-mLeft));
                     },1000);
                        $(".slide .step li").eq(cntNum).addClass("current");
                    }else{
                        $(".slideImg ul li").eq(e).removeClass("current");
                        $(".slideInfo ul li").eq(e).removeClass("current");
                        $(".slide .step li").eq(e).removeClass("current");
                    }
                });
            }
            var t = setInterval(slideImg,5000);

            //roll图片滚动
            var rollWidth = $(".container").width();
            $(".rollVisable").css("width",rollWidth);
            $(".rollVisable ul.rollArea").css("width",rollWidth*4/3);
            $(".rollVisable ul.rollArea li").css("width",Math.floor(rollWidth/3)); 
            function rollSlide(){
                var _left = parseInt($(".rollVisable ul.rollArea").css("left"));
                if(_left == 0){
                    $(".rollVisable ul.rollArea").css("left",-rollWidth/3);
                    $(".rollVisable .tag li").eq(1).addClass("current");
                    $(".rollVisable .tag li").eq(0).removeClass("current");
                }else{
                    $(".rollVisable ul.rollArea").css("left",0);
                    $(".rollVisable .tag li").eq(1).removeClass("current");
                    $(".rollVisable .tag li").eq(0).addClass("current");
                }
            }
            var roolTimer = setInterval(rollSlide,4000);
            //环形图
            var option1 = {
                series: [
                {
                    name:'html',
                    type:'pie',
                    radius: ['60%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        normal: {
                            show: true,
                            position: 'center',
                            textStyle: {
                                color:"#000",
                                fontSize: '26',
                                fontWeight: 'bold'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            show: false
                        }
                    },
                    data:[
                    {value:95,name:"血压增幅\n95%",itemStyle:{normal:{color:"#90CAF9"}}},
                    {value:5,itemStyle:{normal:{color:"#ddd"}}},

                    ]
                }
                ]
            };
            var option2 = {
                series: [
                {
                    name:'css',
                    type:'pie',
                    radius: ['60%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        normal: {
                            show: true,
                            position: 'center',
                            textStyle: {
                                color:"#000",
                                fontSize: '26',
                                fontWeight: 'bold'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            show: false
                        }
                    },
                    data:[
                    {value:90,name:"体重增幅\n90%",itemStyle:{normal:{color:"#90CAF9"}}},
                    {value:10,itemStyle:{normal:{color:"#ddd"}}},

                    ]
                }
                ]
            };
            var option3 = {
                series: [
                {
                    name:'JavaScript',
                    type:'pie',
                    radius: ['60%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        normal: {
                            show: true,
                            position: 'center',
                            textStyle: {
                                color:"#000",
                                fontSize: '26',
                                fontWeight: 'bold'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            show: false
                        }
                    },
                    data:[
                    {value:90,name:"血脂增幅\n90%",itemStyle:{normal:{color:"#90CAF9"}}},
                    {value:10,itemStyle:{normal:{color:"#ddd"}}},

                    ]
                }
                ]
            };
            var option4 = {
                series: [
                {
                    name:'JavaScript',
                    type:'pie',
                    radius: ['60%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        normal: {
                            show: true,
                            position: 'center',
                            textStyle: {
                                color:"#000",
                                fontSize: '26',
                                fontWeight: 'bold'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            show: false
                        }
                    },
                    data:[
                    {value:80,name:"运动时间\n80%",itemStyle:{normal:{color:"#90CAF9"}}},
                    {value:20,itemStyle:{normal:{color:"#ddd"}}},

                    ]
                }
                ]
            };
            var option = [option1,option2,option3,option4];
            //方形滚动图片
            var diamonds = $(".diamonds .container").width();
            $(".pic_visable").css("width",diamonds);
            $(".pic_visable").css("height",diamonds/4);
            $(".pic_visable .pic").css("width",diamonds*5/4);
            $(".pic_visable .pic li img").css("width",diamonds/4);
            $(".pic_visable .pic li img").css("height",diamonds/4);
            function diamondsRoll(){
                var _left = parseInt($(".pic_visable .pic").css("left"));
                if(_left == 0){ 
                    $(".pic_visable .pic").css("left",-rollWidth/4);
                    $(".diamonds .tag li").eq(1).addClass("current");
                    $(".diamonds .tag li").eq(0).removeClass("current");
                }else{
                    $(".pic_visable .pic").css("left",0);
                    $(".diamonds .tag li").eq(1).removeClass("current");
                    $(".diamonds .tag li").eq(0).addClass("current");
                }
            }
            var diamondsTimer = setInterval(diamondsRoll,4000);

            //图片筛选
            var filterSize = $("#content").width()-40;
            $(".filters .container ul li img").css("width",filterSize/5);
            $(".filters .container ul li img").css("height",filterSize/5);

            (function($){
                $.fn.filters = function(options) {
                    var D = {   
                        filter: {
                            name: 'filter',
                            element: 'a',
                            active: 'active'
                        },
                        container: {
                            name: 'container',
                            element: 'li'
                        },
                        css3: {
                            init: true,
                            children: 'a',
                            property: 'all 1s ease',
                            transform: {
                                scale: '0'
                            }
                        },
                        move: {
                            init: true,
                            easing: 'linear',
                            duration: 500
                        },
                        fade: {
                            duration: [500, 500],
                            opacity: [0, 1]
                        },
                        fixed: false,
                        onclick: function(filter, element){}
                    } // default settings
        
                var S = $.extend(true, D, options); 
        
                return this.each(function(){
                    var M = $(this),
                    F = M.find('.'+S.filter.name)
                    C = M.find('.'+S.container.name),
                    P = {
                        init: function(){
                            this._globals.init();
                            this._height.update(L);
                            if (S.css3.init) this._css3.init();
                            this._elements.init();
                            this._collection.init();
                            this.events.init();
                        },
                        _globals: {
                            init: function(){
                                D = {
                                    w: M.width(),
                                    h: M.height()
                                },
                                A = F.find(S.filter.element),
                                E = C.find(S.container.element),
                                ED = {
                                    w: E.outerWidth(true),
                                    h: E.outerHeight(true)
                                },
                                L = E.length,
                                CSS3 = S.css3, MOVE = S.move, 
                                FIXED = S.fixed, FADE = S.fade,
                                POS = [], COL = [],
                                COLUMN = Math.floor(D.w/ED.w);
                                if ($.support < 10){
                                    CSS3.init = false;                          
                                }
                            }
                        },
                        _height: {
                            update: function(len, type){
                                var row = Math.ceil(len/COLUMN),
                                css = {
                                    height: ED.h*row
                                }
                                C.css(css);
                            }
                        },
                        _css3: {
                            init: function(){
                                var property = S.css3.property,
                                css = {
                                    '-webkit-transition': property,
                                    '-moz-transition': property,
                                    '-o-transition': property,
                                    'transition': property
                                }
                                E.children().css(css);
                            },
                            transform: function(css){
                                var arr = [],   
                                o = $.extend({}, this.css, css);
                                for (i in o){
                                    var p = o[i];
                                    arr.push(i+'('+p+')');
                                }
                                var css3d = arr.join(' ');
                                return {
                                    '-webkit-transform': css3d,
                                    '-moz-transform': css3d,
                                    '-o-transform': css3d,
                                    'transform': css3d
                                }
                            },
                            reset: function(){
                                var css = this.transform(this.css);
                                return css;
                            },
                            css: {
                                scale: '1',
                                rotate: '0',
                                translate: '0, 0',
                                skew: '0'
                            }
                        },
                        _elements: {
                            init: function(){
                                this.position();
                                this.css();
                            },
                            css: function(){
                                var css = {
                                    position: 'absolute',
                                    overflow: 'hidden',
                                    display: 'block'
                                }
                                E.css(css);
                            },
                            position: function(){
                                E.each(function(){
                                    var t = $(this),
                                    position = t.position(),
                                    x = position.left,
                                    y = position.top,
                                    css = {
                                        top: y,
                                        left: x,
                                        zIndex: 1
                                    }
                                    POS.push(css);
                                    t.css(css);
                                });
                            }
                        },
                        _collection: {
                            init: function(){
                                this.add();
                            },
                            add: function(){
                                A.each(function(i){
                                    var t = $(this), rel = t.attr('rel');
                                    if (typeof rel != 'undefined'){
                                        var element = E.filter('.'+rel);
                                        COL.push(element);
                                    }
                                });
                            },
                            position: function(){
                                for (i in COL){
                                    var r = -1, c = -1;
                                    COL[i].each(function(j){
                                        var t = $(this);
                                        c++;
                                        if (j % COLUMN == 0){
                                            r++;
                                            c = 0;
                                        }
                                        var y = ED.h*r,
                                        x = x = ED.w*c,
                                        css = {
                                            top: y,
                                            left: x
                                        }
                                        t.animate(css, MOVE.duration, MOVE.easing);
                                    });
                                }
                            }
                        },
                        _transition: {
                            element: function(element, not){
                                if (CSS3.init){
                                    var css = CSS3.transform,
                                    animate = P._css3.transform(css),
                                    reset = P._css3.reset();
                                    not.children(CSS3.children).css(animate);
                                    element.children(CSS3.children).css(reset); 
                                } else {
                                    not.stop(true, true).fadeTo(FADE.duration[0], FADE.opacity[0]);
                                    element.stop(true, true).fadeTo(FADE.duration[1], FADE.opacity[1]);
                                }
                                if (MOVE.init){
                                    P._collection.position();
                                }
                            },
                            all: function(){
                                if (CSS3.init) {
                                    var animate = P._css3.reset();
                                    E.children(CSS3.children).css(animate);
                                } else {
                                    E.fadeTo(FADE.duration[1], FADE.opacity[1]);
                                }
                            }
                        },
                        events: {
                            init: function(){
                                this.click();
                            },
                            click: function(){
                                A.click(function(){
                                    var t = $(this), rel = t.attr('rel'), active = S.filter.active;
                                    if (rel == 'all'){
                                        // console.log(11111);
                                        if (MOVE.init) {
                                            E.each(function(i){
                                                var t = $(this), css = POS[i];
                                                t.animate(css, MOVE.duration, MOVE.easing, P._transition.all);
                                            });
                                        } else {
                                            P._transition.all();
                                        }
                                        if (!FIXED && MOVE.init){
                                            P._height.update(L);
                                        }
                                    } else {
                                        var element = E.filter('.'+rel), not = E.not(element),
                                        l = element.length, css = { zIndex: 10 }
                                        element.css(css);
                                        css.zIndex = 1;
                                        not.css(css);
                                        if (!FIXED && MOVE.init){
                                            P._height.update(l);
                                        }
                                        P._transition.element(element, not);
                                    }
                                    A.removeClass(active)
                                    t.addClass(active);
                                    S.onclick.call(this, t, element || E);
                                    return false;
                                });
                            }
                        }
                    }
                    P.init();
                });
            };
        }(jQuery));

        $(function(){
            $('.filters.demo1').filters();
            // console.log($('.filters.demo1'));
        });


            // $http({
            //     url:"#",
            //     method:"POST"
            // }).success(function(data){

            // }).error(function(){
            //     alert("你的网络似乎有问题呢。。。");
            // });
        }]);