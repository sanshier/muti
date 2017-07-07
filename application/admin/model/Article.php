<?php
namespace app\admin\model;

use think\Config;
use think\Db;
use think\Loader;
use think\Model;
use traits\model\SoftDelete;

class Article extends Base
{
	use SoftDelete;
    protected $deleteTime = 'deletetime';

	public function getList( $request )
	{
		$request = $this->fmtRequest( $request );
		$data = $this->order('create_time desc')->where( $request['map'] )->limit($request['offset'], $request['limit'])->select();
		return $this->_fmtData( $data );
	}

	public function saveData( $data )
	{
		if( isset( $data['admin_id']) && !empty($data['admin_id'])) {
			$result = $this->edit( $data );
		} else {
			$result = $this->add( $data );
		}
		return $result;
	}


	public function add(array $data = [])
	{
		$userValidate = validate('Admin');
		if(!$userValidate->scene('add')->check($data)) {
			return info(lang($userValidate->getError()), 4001);
		}
		$user = Admin::get(['account' => $data['account']]);
		if (!empty($user)) {
			return info(lang('Account already exists'), 0);
		}
		if($data['password2'] != $data['password']){
            return info(lang('The password is not the same twice'), 0);
        }
		unset($data['password2']);
		$data['password'] = mduser($data['password']);
		//$data['create_time'] = time();
		$this->allowField(true)->save($data);
		if($this->id > 0){
            return info(lang('Add succeed'), 1, '', $this->id);
        }else{
            return info(lang('Add failed') ,0);
        }
	}

	public function edit(array $data = [])
	{
		$userValidate = validate('Admin');
		if(!$userValidate->scene('edit')->check($data)) {
			return info(lang($userValidate->getError()), 4001);
		}
		$account = $this->where(['account'=>$data['account']])->where('admin_id', '<>', $data['admin_id'])->value('account');
		if (!empty($account)) {
			return info(lang('Account already exists'), 0);
		}

		if($data['password2'] != $data['password']){
            return info(lang('The two passwords No match!'),0);
        }
        //$data['update_time'] = time();

		$data['password'] = mduser($data['password']);
		$res = $this->allowField(true)->save($data,['admin_id'=>$data['admin_id']]);
		if($res == 1){
            return info(lang('Edit succeed'), 1);
        }else{
            return info(lang('Edit failed'), 0);
        }
	}

	public function deleteById($id)
	{
		$result = User::destroy($id);
		if ($result > 0) {
            return info(lang('Delete succeed'), 1);
        }   
	}

	//格式化数据
	private function _fmtData( $data )
	{
		if(empty($data) && is_array($data)) {
			return $data;
		}

		foreach ($data as $key => $value) {
			$data[$key]['create_time'] = date('Y-m-d H:i:s',$value['createtime']);
			$data[$key]['status'] = $value['status'] == 1 ? lang('Start') : lang('Off');
		}

		return $data;
	}

}
