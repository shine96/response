<?php
namespace Response;
/**
 * Created by PhpStorm.
 * User: qianchao
 * Date: 2019/9/16
 * Time: 4:40 PM
 */

class ResponseLayout
{
    public static function apply($bool=true,$msg='',$data=array())
    {
        try{
            $result = [];
            $result['status'] = $bool ? 1 : 0;
            if (empty($msg)){
                $result['msg'] = $bool ? '成功！' : '失败！';
            }else{
                $result['msg'] = $msg;
            }
            $result['data'] = !empty($data) ? $data : '';

            return response() -> json($result);
        }catch (Exception $exception){
            throw new Exception('System Error!');
        }

    }

}