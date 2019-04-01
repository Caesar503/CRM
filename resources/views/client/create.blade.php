@include('public/top')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>客户服务基本信息</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{asset('layui/css/layui.css')}}"  media="all">
    <script src="{{asset('layui/layui.js')}}"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="layui-form" action="">
    @csrf
    <div class="layui-form-item">
    <div class="layui-inline">
        <label class="layui-form-label">服务类型</label>
        <div class="layui-input-inline">
            <select name="service_type">
                <option value="1">上门服务</option>
                <option value="2">解决客户投诉</option>
                <option value="3">客户培训</option>
            </select>
        </div>
    </div>
        <div class="layui-inline">
            <label class="layui-form-label">服务日期</label>
            <div class="layui-input-inline">
                <input type="date" name="service_date" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
            </div>
            <div class="layui-form-mid layui-word-aux"></div>
        </div>
    </div>
    <div class="layui-form-item" >
        <div class="layui-inline">
            <label class="layui-form-label">客户名称</label>
            <div class="layui-input-inline">
                {{--lay-verify="required|checkServiceName"--}}
                <input type="text" name="service_name"  autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">联系人</label>
            <div class="layui-input-inline">
                {{--lay-verify="required|checkLinkName"--}}
                <input type="text" name="link_name"  autocomplete="off" class="layui-input">
            </div>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">服务预估成本</label>
            <div class="layui-input-inline">
                {{--lay-verify="required|checkServiceMoney"--}}
                <input type="text" name="service_money"  autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-inline">
            <label class="layui-form-label">时间成本</label>
            <div class="layui-input-inline">
                {{--lay-verify="required|checkServiceTime"--}}
                <input type="text" name="service_time"  autocomplete="off" class="layui-input" placeholder="天">
            </div>
        </div>
    </div>
    <div class="layui-form-item layui-form-text" style="padding: 15px; width:600px">
        <label class="layui-form-label">服务内容描述</label>
        <div class="layui-input-block">
            {{--lay-verify="required|checkServiceContent"--}}
            <textarea placeholder="请输入内容" class="layui-textarea" name="service_content" ></textarea>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-inline">
            <label class="layui-form-label">客服满意度</label>
            <div class="layui-input-inline">
                <select name="client_degree">
                    <option value="1">非常满意</option>
                    <option value="2">满意</option>
                    <option value="3">不满意</option>
                </select>
            </div>
        </div>
    </div>
    <div class="layui-form-item layui-form-text" style="padding: 15px; width:600px">
        <label class="layui-form-label">客户反馈意见</label>
        <div class="layui-input-block">
            {{--lay-verify="required|checkClientBackOpinion"--}}
            <textarea placeholder="请输入内容" class="layui-textarea" name="client_back_opinion" ></textarea>
        </div>
    </div>
    <!--<div class="layui-form-item layui-form-text">
      <label class="layui-form-label">编辑器</label>
      <div class="layui-input-block">
        <textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="LAY_demo_editor"></textarea>
      </div>
    </div>-->
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type='button' class="layui-btn" lay-submit lay-filter="Demo" value="立即提交">
            <input type="reset" class="layui-btn layui-btn-primary" value="重置">
        </div>
    </div>
</form>
@include('public/foot')
<script>
    $(function () {
        layui.use(['form','layer'],function () {
            var form = layui.form;
            var layer = layui.layer;
            //console.log(form);
            form.verify({
                checkServiceName:function(value,item){
                    var reg=/^([\u4e00-\u9fa5]|[a-zA-Z]){3,12}$/;
                    if(!reg.test(value)){
                        return "客户名称3-12位非数字组成";
                    }
                },
                checkLinkName:function(value,item){
                    var reg=/^([\u4e00-\u9fa5]|[a-zA-Z]){3,12}$/;
                    if(!reg.test(value)){
                        return "联系人3-12位非数字组成";
                    }
                },
                checkServiceMoney:function(value,item){
                    var reg=/^([0-9]){3,12}$/;
                    if(!reg.test(value)){
                        return "服务预估成本3-12位数字组成";
                    }
                },
                checkServiceTime:function(value,item){
                    var reg=/^([0-9]){3,12}$/;
                    if(!reg.test(value)){
                        return "时间成本3-12位数字组成";
                    }
                },
                checkServiceContent:function(value,item){
                    var reg=/^([\u4e00-\u9fa5]|[a-zA-Z0-9]){2,12}$/;
                    if(!reg.test(value)){
                        return "服务内容描述数字字母中文任意组成2-12位";
                    }
                },
                checkClientBackOpinion:function(value,item){
                    var reg=/^([\u4e00-\u9fa5]|[a-zA-Z0-9]){2,12}$/;
                    if(!reg.test(value)){
                        return "客户反馈意见数字字母中文任意组成2-12位";
                    }
                },
            });
            form.on('submit(Demo)',function(data){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post(
                    "/CRM/public/client/serverdo",
                    data.field,
                    function(res){
                        if(res.code==1){
                            layer.msg(res.font, {icon:res.code});
                            location.href="/CRM/public/client/list";
                        }else{
                            layer.msg(res.font, {icon:res.code});
                        }
                    },
                    'json'
                );
                return false; //阻止表单跳转。如果需要表单跳转，去掉这段即可。
            });
        })
    })
</script>
