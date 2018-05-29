// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2018 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://think.ctolog.com
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | github开源项目：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

/**
 * jQuery后台初始化
 * @version 1.0
 */
if (typeof layui !== 'undefined') {
    var form = layui.form,
        layer = layui.layer,
        laydate = layui.laydate;
    if (typeof jQuery === 'undefined') {
        var $ = jQuery = layui.$;
    }
}

function esAjax(url,type,data,callback,error_callback=''){
    $.ajax({
        url:url,
        type:type,
        dataType:'json',
        data:data,
        success:callback,
        error:error_callback
    });
};

function formToJson($form) {
    var fields = $form.serializeArray();
    var o={};
    jQuery.each(fields, function(i, fields){
         if(o[this.name]){
             if(!o[this.name].push){
                 o[this.name]=[o[this.name]];     // 将o[label]初始为嵌套数组，如o={a,[a,b,c]}
             }
             o[this.name].push(this.value || ''); // 将值插入o[label]
         }else{
             o[this.name]=this.value || '';       // 第一次在o中插入o[label]
         }
     });
    return o;
}

function editOpen(title,$formHtml){
    var index=layer.open({
        type: 2,
        title: title,
        shadeClose: true,
        shade: 0.8,
        area: ['800px', '500px'],
        content: $formHtml
    });
}

