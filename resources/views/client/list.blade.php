<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{asset('css/page.css')}}" rel="stylesheet">
    <title>客户服务基本信息列表</title>
</head>
<body>
    <form action="" method="">
        服务类别：<select name="service_type">
            <option value="1">上门服务</option>
            <option value="2">解决客户投诉</option>
            <option value="3">客户培训</option>
        </select>
        <input type="text" name="service_name" placeholder="客户名称"><br>
        <input type="text" name="link_name" placeholder="联系人">
        <input type="text" name="service_content" placeholder="服务内容描述">
        <button style="background-color: #00CC66">搜索</button>
    </form><br>
    <table border="1">
        <tr>
            <td>id</td>
            <td>服务类型</td>
            <td>服务日期</td>
            <td>客户名称</td>
            <td>联系人</td>
            <td>服务内容描述</td>
            <td>客户反馈意见</td>
            <td>操作</td>
        </tr>
        @foreach($data as $k=>$v)
        <tr>
            <td>{{$v->service_id}}</td>
            <td>
                @if($v->service_type==1)上门服务
                @elseif($v->service_type==2)解决客户投诉
                @elseif($v->service_type==3)客户培训
                @endif
            </td>
            <td>{{$v->service_date}}</td>
            <td>{{$v->service_name}}</td>
            <td>{{$v->link_name}}</td>
            <td>{{$v->service_content}}</td>
            <td>{{$v->client_back_opinion}}</td>
            <td><a href="/CRM/public/client/delete/{{$v->service_id}}">删除</a>|<a href="/CRM/public/client/edit/{{$v->service_id}}" class="update">修改</a></td>
        </tr>
        @endforeach
    </table>
    {{ $data->appends($res)->links() }}
</body>
</html>