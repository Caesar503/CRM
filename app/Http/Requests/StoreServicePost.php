<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreServicePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'service_name'=>[
                'required',
                'regex:/^([\x7f-\xff]|[a-zA-Z]){2,12}$/',
                Rule::unique('service')->ignore(request()->service_id, 'service_id')
            ],
            'link_name'=>[
                'required',
                'regex:/^([\x7f-\xff]|[a-zA-Z]){2,12}$/',
                Rule::unique('service')->ignore(request()->service_id, 'service_id')
            ],
            'service_money'=>[
                'required',
                'regex:/^([0-9]){3,12}$/',
            ],
            'service_time'=>[
                'required',
                'regex:/^([0-9]){1,12}$/',
            ],
            'service_content'=>[
                'required',
                'regex:/^([\x7f-\xff]|[a-zA-Z0-9]){2,12}$/',
            ],
            'client_back_opinion'=>[
                'required',
                'regex:/^([\x7f-\xff]|[a-zA-Z0-9]){2,12}$/',
            ],
        ];
    }
    public function messages()
    {
        return [
            'service_name.required'=>'客户名必填哦',
            'service_name.regex' => '客户名称2-12位非数字组成哦',
            'link_name.required'=>'联系人必填哦',
            'link_name.regex' => '联系人2-12位非数字组成哦',
            'service_money.required'=>'服务预估成本必填哦',
            'service_money.regex'=>'服务预估成本3-12位数字组成哦',
            'service_time.required'=>'时间成本必填哦',
            'service_time.regex'=>'时间成本1-12位数字组成哦',
            'service_content.required'=>'服务内容描述必填哦',
            'service_content.regex'=>'服务内容描述数字字母中文任意组成2-12位哦',
            'client_back_opinion.required'=>'客户反馈意见必填哦',
            'client_back_opinion.regex'=>'客户反馈意见数字字母中文任意组成2-12位哦',
        ];
    }
}
