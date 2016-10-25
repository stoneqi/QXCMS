<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Columns */
/* @var $form yii\widgets\ActiveForm */
// $this->registerJs('
//     $("#from_submit").on("click", function () {
//     $("#w0").data("yiiActiveForm").validated?$(this).button("loading"):""}
//   })',\yii\web\View::POS_LOAD);


?>

<div class="columns-form ">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pid')->dropdownList($columns)->label('上级栏目（必须填写）'); ?>

    <?= $form->field($model, 'column_name')->textInput(['maxlength' => true])->label('栏目名字（必须填写）'); ?>

    <?= $form->field($model, 'column_link')->textInput(['maxlength' => true])->label('栏目链接（当你需要链接到其他页面时设置）') ?>

    <?= $form->field($model, 'column_layout')->dropdownList(['list'=>'新闻中心','img_list'=>'产品展示','SGP-aboutus'=>'单页布局--关于我们','cooperate'=>'单页布局--合作平台'])->label('栏目布局（根据需要指定该栏目的布局方式）'); ?>

    <?= $form->field($model, 'column_image')->textInput(['maxlength' => true])->label('栏目图像（可不设置，如要设置请先在文件管理功能里取得图片地址复制到此）') ?>

    <?= $form->field($model, 'column_content')->widget('kucha\ueditor\UEditor',[
    'clientOptions' => [
        //编辑区域大小
        'initialFrameHeight' => '200',
        //设置语言
        'lang' =>'zh-cn', //中文为 zh-cn
        //定制菜单
        'toolbars' => [
            [
           //             'anchor', //锚点
        'undo', //撤销
        'redo', //重做
        'bold', //加粗
        'indent', //首行缩进
     //   'snapscreen', //截图
        'italic', //斜体
        'underline', //下划线
        'strikethrough', //删除线
        'subscript', //下标
     //   'fontborder', //字符边框
        'superscript', //上标
        'formatmatch', //格式刷
        'source', //源代码
        'blockquote', //引用
        'pasteplain', //纯文本粘贴模式
        'selectall', //全选
     //   'print', //打印
        'preview', //预览
        'horizontal', //分隔线
        'removeformat', //清除格式
        'time', //时间
        'date', //日期
        'unlink', //取消链接
        'insertrow', //前插入行
        'insertcol', //前插入列
        'mergeright', //右合并单元格
        'mergedown', //下合并单元格
        'deleterow', //删除行
        'deletecol', //删除列
        'splittorows', //拆分成行
        'splittocols', //拆分成列
        'splittocells', //完全拆分单元格
        'deletecaption', //删除表格标题
        'inserttitle', //插入标题
        'mergecells', //合并多个单元格
        'deletetable', //删除表格
        'cleardoc', //清空文档
        'insertparagraphbeforetable', //"表格前插入行"
        'insertcode', //代码语言
        'fontfamily', //字体
        'fontsize', //字号
        'paragraph', //段落格式
        'simpleupload', //单图上传
        'insertimage', //多图上传
        'edittable', //表格属性
        'edittd', //单元格属性
        'link', //超链接
        'emotion', //表情
        'spechars', //特殊字符
       // 'searchreplace', //查询替换
       // 'map', //Baidu地图
       // 'gmap', //Google地图
        'insertvideo', //视频
        'help', //帮助
        'justifyleft', //居左对齐
        'justifyright', //居右对齐
        'justifycenter', //居中对齐
        'justifyjustify', //两端对齐
        'forecolor', //字体颜色
        'backcolor', //背景色
        'insertorderedlist', //有序列表
        'insertunorderedlist', //无序列表
        'fullscreen', //全屏
        'directionalityltr', //从左向右输入
        'directionalityrtl', //从右向左输入
        'rowspacingtop', //段前距
        'rowspacingbottom', //段后距
       // 'pagebreak', //分页
      //  'insertframe', //插入Iframe
        'imagenone', //默认
        'imageleft', //左浮动
        'imageright', //右浮动
        'attachment', //附件
        'imagecenter', //居中
      //  'wordimage', //图片转存
        'lineheight', //行间距
        'edittip ', //编辑提示
        'customstyle', //自定义标题
        'autotypeset', //自动排版
      //  'webapp', //百度应用
        'touppercase', //字母大写
        'tolowercase', //字母小写
        'background', //背景
       // 'template', //模板
      //  'scrawl', //涂鸦
       // 'music', //音乐
        'inserttable', //插入表格
        'drafts', // 从草稿箱加载
        'charts', // 图表
            ],
        ]]])->label('栏目内容（一般栏目布局为单页模版时设置）'); ?>

    <?= $form->field($model, 'column_content_layout')->dropdownList(['1'=>'默认'])->label('栏目内容布局（指定该栏目下文章布局方式）'); ?>

    <?= $form->field($model, 'column_sort')->textInput()->label('栏目排序（输入数字，按由小到大排序）') ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary','data-loading-text'=>'提交中'])  ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
