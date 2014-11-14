<?php

class UserController extends BaseController {


    public function __construct()
    {
                
        
    }
    
    
    
    /**
     * 用户登录
     * {"resubmitToken":"75ab02a27427499f8a2dabcf8db4028e","requestId":null,"code":0,"success":false,"msg":"该帐号不存在或密码错误，请重新输入","content":null}
     */
	public function postLogin()
	{
		$email = Input::get('email');
        $password = Input::get('password');
        $user = DB::table('kk_user')->where('email', $email)->first();
        if(empty($user)){
            $return['success']=false;
            $return['msg']="该邮箱未注册，请先注册";
            $return['content']=''; 
        }
        elseif($user->password!=$password){
            $return['success']=false;
            $return['msg']="该帐号不存在或密码错误，请重新输入";
            $return['content']=''; 
        }
        else{
            $return['success']=true;
            $return['msg']="登录成功";
            $return['content']='http://www.kkvote.com'; 
        }
        return Response::json($return);
	}
    /**
     * 用户注册
     * {"requestId":null,"code":0,"success":false,"msg":"该邮箱已被注册，请重新输入或直接登录","resubmitToken":"6a76a440164f4449a21dd0716b7da413","content":null}
     */
    public function postRegister()
    {
        $info['email'] = $email = Input::get('email');
        $info['password'] = Input::get('password');
        $user = DB::table('kk_user')->where('email', $email)->first();
        if(empty($user)){
            $info['create_time'] = $info['update_time'] = time();
            $result_id = DB::table('kk_user')->insert($info);
            $return['requestId']=$result_id;
            $return['code']=1;
            $return['success']=true;
            $return['msg']='';
            $return['content']='http://www.kkvote.com';            
        }else{
            $return['requestId']='';
            $return['code']=0;
            $return['success']=false;
            $return['msg']="该邮箱已被注册，请重新输入或直接登录";
            $return['content']='';
        }
        return Response::json($return);
        
    }
    /**
     * 用户详情
     */
    public function getDetails()
    {
        echo 'details';
        
    }


}
