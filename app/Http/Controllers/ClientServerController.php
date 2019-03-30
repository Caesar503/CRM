<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicePost;
use DB;
class ClientServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res=request()->input();
        $where=[];
        if(isset($res['service_type'])?$res['service_type']:''){
            $where[]=['service_type',$res['service_type']];
        }
        if(isset($res['service_name'])?$res['service_name']:''){
            $where[]=['service_name','like',"%$res[service_name]%"];
        }
        if(isset($res['link_name'])?$res['link_name']:''){
            $where[]=['link_name','like',"%$res[link_name]%"];
        }
        if(isset($res['service_content'])?$res['service_content']:''){
            $where[]=['service_content','like',"%$res[service_content]%"];
        }
        $data=\App\Service::where($where)->paginate(2);
        return view('client/list',compact('data','res'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServicePost $request)
    {
        $data=$request->all();
        unset($data['_token']);
        $service=new \App\Service;
        $res=$service->insert($data);
        if($res){
            $arr=[
                'font'=>'成功',
                'code'=>1
            ];
            echo json_encode($arr);
        }else{
            $arr=[
                'font'=>'失败',
                'code'=>2
            ];
            echo json_encode($arr);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$id){
            return;
        }
        $res=\App\Service::where(['service_id'=>$id])->first();
        //dd($res);
        return view('client/edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreServicePost $request)
    {

        $data=$request->all();
        unset($data['_token']);
        $res=\App\Service::where(['service_id'=>$data['service_id']])->update($data);
        if($res===false){
            $arr=[
                'font'=>'失败',
                'code'=>2
            ];
            echo json_encode($arr);
        }else{
            $arr=[
                'font'=>'成功',
                'code'=>1
            ];
            echo json_encode($arr);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$id){
            return;
        }
        $res=\App\Service::where(['service_id'=>$id])->delete();
        if($res){
            return redirect('client/list');
        }
    }
}
