<br><!DOCTYPE html>
<html lang="utf-8">
<head>
    <meta charset="UTF-8" />
    <title>form表单之select操作</title>
<script type="text/javascript">
var arr_province = ["请选择省/城市","bj","sh","天津市","重庆市","深圳市","广东省","河南省"];
var arr_city = [
                ["请选择城市/地区"],
                ["dcq","xcq","朝阳区","宣武区","昌平区","大兴区","丰台区","海淀区"],
                ['bsq','长宁区','丰贤区', '虹口区','黄浦区','青浦区','南汇区','徐汇区','卢湾区'],
                ['和平区', '河西区', '南开区', '河北区', '河东区', '红桥区', '塘古区', '开发区'],
                ['俞中区', '南岸区', '江北区', '沙坪坝区', '九龙坡区', '渝北区', '大渡口区', '北碚区'],
                ['福田区', '罗湖区', '盐田区', '宝安区', '龙岗区', '南山区', '深圳周边'],
                ['广州市','惠州市','汕头市','珠海市','佛山市','中山市','东莞市'],
                ['郑州市']
            ];
 
onload = function() {
    var oForm = document.getElementById('form1');
    var oProvince = oForm.children[0];
    var oCity = oForm.children[1];
 
    // 添加点击 onchange 事件
    oProvince.onchange = function() {
        var _this = this.selectedIndex;
        // 默认进来高度清零
        oCity.length = 0;
        // 指定城市下拉的高度
        initCity(_this);
    };
 
    // 初始化下拉列表
    init();
    // init select
    function init(){
        var index = 0;
        // 指定下拉的高度
        oProvince.length = arr_province.length;
 
        // 循环数组, 把内容写到下拉列表中去
        for( var i = 0; i < arr_province.length; i++ ){
            oProvince.options[i].text = arr_province[i];
            oProvince.options[i].value = arr_province[i];
        }
 
        // 指定默认索引号
        oProvince.selectedIndex = index;
        // 指定城市下拉的高度
        initCity(index);
    }
 
    // 城市下拉内容高度
    function initCity(index){
        // 指定城市下拉的高度
        oCity.length = arr_city[index].length;
 
        // 循环数组, 把内容写到下拉列表中去
        for( var i = 0; i < arr_city[index].length; i++ ){
            oCity.options[i].text = arr_city[index][i];
            oCity.options[i].value = arr_city[index][i];
        }
    }
 
};
 
 
</script>
</head>
 
<body>
<form id="form1" method="get" action="testadd.php">
    省份: <select name="province" style="width:130px;"></select>
 
    城市: <select name="city" style="width:130px;"></select>
	<button type="submit">
</form>
</body>
</html>