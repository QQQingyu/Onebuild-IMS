<br><!DOCTYPE html>
<html lang="utf-8">
<head>
    <meta charset="UTF-8" />
    <title>form��֮select����</title>
<script type="text/javascript">
var arr_province = ["��ѡ��ʡ/����","bj","sh","�����","������","������","�㶫ʡ","����ʡ"];
var arr_city = [
                ["��ѡ�����/����"],
                ["dcq","xcq","������","������","��ƽ��","������","��̨��","������"],
                ['bsq','������','������', '�����','������','������','�ϻ���','�����','¬����'],
                ['��ƽ��', '������', '�Ͽ���', '�ӱ���', '�Ӷ���', '������', '������', '������'],
                ['������', '�ϰ���', '������', 'ɳƺ����', '��������', '�山��', '��ɿ���', '������'],
                ['������', '�޺���', '������', '������', '������', '��ɽ��', '�����ܱ�'],
                ['������','������','��ͷ��','�麣��','��ɽ��','��ɽ��','��ݸ��'],
                ['֣����']
            ];
 
onload = function() {
    var oForm = document.getElementById('form1');
    var oProvince = oForm.children[0];
    var oCity = oForm.children[1];
 
    // ��ӵ�� onchange �¼�
    oProvince.onchange = function() {
        var _this = this.selectedIndex;
        // Ĭ�Ͻ����߶�����
        oCity.length = 0;
        // ָ�����������ĸ߶�
        initCity(_this);
    };
 
    // ��ʼ�������б�
    init();
    // init select
    function init(){
        var index = 0;
        // ָ�������ĸ߶�
        oProvince.length = arr_province.length;
 
        // ѭ������, ������д�������б���ȥ
        for( var i = 0; i < arr_province.length; i++ ){
            oProvince.options[i].text = arr_province[i];
            oProvince.options[i].value = arr_province[i];
        }
 
        // ָ��Ĭ��������
        oProvince.selectedIndex = index;
        // ָ�����������ĸ߶�
        initCity(index);
    }
 
    // �����������ݸ߶�
    function initCity(index){
        // ָ�����������ĸ߶�
        oCity.length = arr_city[index].length;
 
        // ѭ������, ������д�������б���ȥ
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
    ʡ��: <select name="province" style="width:130px;"></select>
 
    ����: <select name="city" style="width:130px;"></select>
	<button type="submit">
</form>
</body>
</html>