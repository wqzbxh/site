/*************定义地图**************/

var map;

/****初始化地图******/
function initMap(Lat = 31.230001534076,Lng =  121.47400095893,zoom = 16, pitch = 30,rotation=30) {
    //定义地图中心点坐标
    var center = new TMap.LatLng(Lat, Lng)
    //定义map变量，调用 TMap.Map() 构造函数创建地图
     map = new TMap.Map(document.getElementById('container'), {
        center: center,//设置地图中心点坐标
        zoom: zoom,   //设置地图缩放级别
        pitch:pitch,  //设置俯仰角
        rotation: rotation,    //设置地图旋转角度
        viewMode:'3D',//3D / 2D 显示模式控制
        baseMap: {			//底图设置（参数为：VectorBaseMap对象）
            type: 'vector',	//类型：失量底图
            // features: ['base', 'building2d']
            //仅渲染：道路及底面(base) + 2d建筑物(building2d)，以达到隐藏文字的效果
        }
    });
    // 获取缩放控件实例
    control = map.getControl(TMap.constants.DEFAULT_CONTROL_ID.ZOOM);
    setPosition('bottomRight')
//创建并初始化MultiMarker
    createMarker()
    //修改地图中心点
    // map.setCenter(new TMap.LatLng(lat,lng));
    //方法可获取地图中心点坐标
    // var centerLatLng=map.getCenter();
    // 点击拾取坐标（地图事件）
    map.on("click",clickHandlers);
    //监听marker点击事件

    // /通过off方法解绑点击事件
    // map.off("click",clickHandler)
//定义事件处理方法
//     var coords=[
//         new TMap.LatLng(38.954104, 116.357503),
//         new TMap.LatLng(39.994104, 116.287503),
//     ]
//
//     var latlngBounds = new TMap.LatLngBounds();
//
//     for(var i = 0;i<coords.length; i++){
//         latlngBounds.extend(coords[i]);
//     }
//
//     map.fitBounds(latlngBounds);
}
// 把存储的缩放控件添加到地图上
function addControl() {
    map.addControl(control);
}

setPosition=(position)=>{
    if (!control) {
        return;
    }
    switch (position) {
        case 'center':
            control.setPosition(TMap.constants.CONTROL_POSITION.CENTER);
            break;
        case 'bottomRight':
            control.setPosition(TMap.constants.CONTROL_POSITION.BOTTOM_RIGHT);
            break;
    }
}
 clickHandlers=(evt)=>{
    var lat = evt.latLng.getLat().toFixed(6);
    var lng = evt.latLng.getLng().toFixed(6);
    console.log("您点击的的坐标是："+ lat + "," + lng);
}
//监听回调函数（非匿名函数）
clickHandler =  (evt) => {
    console.log(evt.geometry)
    console.log(map.zoom)
    $('#site_modal').modal('show');
    $('#site_modal .site_info').text(evt.geometry.site_info);
    $('#site_modal .site_price').text(evt.geometry.site_price);
    $('#site_modal .site_title').text(evt.geometry.site_title);
    // alert(evt.geometry.properties.title)
}
//解绑点击事件，要求事件处理方法不能是匿名方法
function eventOff(){
    marker.off("click", clickHandler)
}
//创建并初始化MultiMarker

createMarker =()=>{
   var marker =  new TMap.MultiMarker({
        map: map,  //指定地图容器
        //样式定义
        styles: {
            //创建一个styleId为"myStyle"的样式（styles的子属性名即为styleId）
            "myStyle": new TMap.MarkerStyle({
                "width": 48,  // 点标记样式宽度（像素）
                "height": 48, // 点标记样式高度（像素）
                "src": '../public/image/site5.png',  //图片路径
                //焦点在图片中的像素位置，一般大头针类似形式的图片以针尖位置做为焦点，圆形点以圆心位置为焦点
            }),  //创建一个styleId为"myStyle"的样式（styles的子属性名即为styleId）
            "myStyle2": new TMap.MarkerStyle({
                "width": 48,  // 点标记样式宽度（像素）
                "height": 48, // 点标记样式高度（像素）
                "src": '../public/image/site6.png',  //图片路径
                //焦点在图片中的像素位置，一般大头针类似形式的图片以针尖位置做为焦点，圆形点以圆心位置为焦点
            }),
        },
        //点标记数据数组
        geometries: [ {//第二个点标记
            "id": "2",
            "styleId": 'myStyle2',
            "title": '落魄山的日常',
            "site_title": '哑巴湖大水怪',
            "site_info": '网站导航页面',
            "site_price": '3288:00',
            "position": new TMap.LatLng(31.230001534076, 121.47400095893),
            "properties": {
                "src": '../public/image/site3.png',  //图片路径
                "title": "marker2"
            }
        }
        ]
    });

    marker.on("click", clickHandler)
}
