<%--
  Created by IntelliJ IDEA.
  User: gaoguangbo
  Date: 2017/5/12
  Time: 下午7:53
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <title>Title</title>
</head>
<body>
<!-- 地图显示区 -->
<div id="mapContainer">
    <div id="tip">
        <input type="text" id="keyword" name="keyword" value="请输入关键字" onfocus='this.value=""'/>
    </div>
</div>
<script >
    var windowsArr = [];
    var markers =[];
    //创建地图
    var mapObj = new AMap.Map("mapContainer", {
        remapObjsizeEnable: true,
        //center: [116.397428, 39.90923],//地图中心点
        city:'哈尔滨',
        zoom: 13,//地图显示的缩放级别
        keyboardEnable: false
    });
    //添加定位功能
    mapObj.plugin('AMap.Geolocation', function() {
        geolocation = new AMap.Geolocation({
            enableHighAccuracy: true,//是否使用高精度定位，默认:true
            //timeout: 10000,          //超过10秒后停止定位，默认：无穷大
            buttonOffset: new AMap.Pixel(10, 20),//定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
            zoomToAccuracy: true,      //定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
            buttonPosition:'RB'
        });
        mapObj.addControl(geolocation);
        geolocation.getCurrentPosition();
        AMap.event.addListener(geolocation, 'complete', onComplete);//返回定位信息
        // AMap.event.addListener(geolocation, 'error', onError);      //返回定位出错信息
    });
    //解析定位结果
    function onComplete(data) {
        /*  var str=['定位成功'];
         str.push('经度：' + data.position.getLng());
         str.push('纬度：' + data.position.getLat());
         str.push('精度：' + data.accuracy + ' 米');
         str.push('是否经过偏移：' + (data.isConverted ? '是' : '否'));
         document.getElementById('tip').innerHTML += ('<br/>'+str.join('<br>'));  */
        update_loc(data.position.getLng(),data.position.getLat());
    }

    <%--//更新定位pos_x,pos_y--%>
    <%--function update_loc(x,y){--%>
        <%--var params = {--%>
            <%--lngX:x,--%>
            <%--latY:y,--%>
            <%--user_id:<%=u.getUser_id()%>--%>
        <%--};--%>
        <%--$.ajax({--%>
            <%--type: "POST",--%>
            <%--url:  "update_loc",--%>
            <%--data: params,--%>
            <%--dataType:"text",//ajax返回值设置为text（json格式也可用它返回，可打印出结果，也可设置成json）--%>
            <%--success: function(json){--%>
                <%--$('#waiting').text("");--%>
                <%--var obj = $.parseJSON(json);--%>

            <%--},--%>
        <%--});--%>
    <%--}--%>

    //解析定位错误信息
    function onError(data) {
        document.getElementById('tip').innerHTML = '定位失败';
    }

    //添加自动提示功能
    AMap.plugin(['AMap.Autocomplete','AMap.PlaceSearch'],function(){
        var autoOptions = {
            city: "哈尔滨", //城市，默认全国
            input: "keyword"//使用联想输入的input的id
        };

        autocomplete= new AMap.Autocomplete(autoOptions);
        var placeSearch = new AMap.PlaceSearch({
            city:'哈尔滨',
            map:mapObj
            //不给这个参数赋值，就不会自动显示标记
        })
        AMap.event.addListener(autocomplete, "select", function(e){
            //TODO 针对选中的poi实现自己的功能
            placeSearch.search(e.poi.name,function(status, result) {
                if (status === 'complete' && result.info === 'OK') {
                    keywordSearch_CallBack(result);
                }
            })
        });
    });


    function keywordSearch_CallBack(data) {
        var resultStr = "";
        //获取结果点集合
        var poiArr = data.poiList.pois;
        //获取集合的个数
        var resultCount = poiArr.length;

        for (var i = 0; i < resultCount; i++) {
            addmarker(poiArr[i]);
        }
        map.setFitView();
    }


    function addmarker(d) {
        var lngX = d.location.getLng();
        var latY = d.location.getLat();
        // alert(lngX +' '+latY);

        marker = new AMap.Marker({
            map: mapObj,
            position:[lngX,latY]
        });
        marker.on('click',function(){

            alert(marker.getPosition());
            document.getElementById("mapContainer").style.display = "none";
            document.getElementById("map_pos").innerHTML = "你选择的位置是："+ d.name+"，坐标是:"+marker.getPosition();
            var lngX = marker.getPosition().getLng();
            var latY = marker.getPosition().getLat();

        });
    }


</script>




</body>
<script>
    function sygx(json){
        for(var i =0;i<json.length;i++){
            create(json[i]);
        }
    }
    function create(obj)
    {
        var div1=document.createElement("div");
        div1.setAttribute("class","news");

        var p1=document.createElement("p");
        p1.innerHTML="发布者："+obj.author;
        div1.appendChild(p1);

        var p2=document.createElement("p");
        p2.innerHTML="内容："+obj.content;
        div1.appendChild(p2);


        var button1=document.createElement("button");
        button1.setAttribute("class", "size_style");
        button1.setAttribute("id",obj.param1);
        button1.setAttribute("value", obj.val);
        button1.innerHTML="评论";
        button1.onclick=function(){
            ht(obj,obj.param);
        };

        div1.appendChild(button1);
        var button2=document.createElement("button");
        button2.setAttribute("class", "size_style");
        button2.innerHTML="回复评论";
        button2.setAttribute("value",obj.val);
        button2.onclick=function(){
            gxhuifu(obj.val);
        };
        div1.appendChild(button2);


        document.getElementById("neirongqu").appendChild(div1);

    }

    function ceshi(){
        alert("ceshi");
        var params = {

        }
        $.ajax(
            {
                type:"POST",
                url:"ceshi",
                data:params,
                dataType:"text",
                success: function(json){
                    var obj = $.parseJSON(json);
                    console.info(obj);
                    for(var kk  in obj[0]){
                        alert(kk +"  "+ obj[0][kk]);
                    }


                }
            }

        );

    }

    function show_map(){
        document.getElementById("mapContainer").style.display = "block";
    }


</script>
</body>


</html>
