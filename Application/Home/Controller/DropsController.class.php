<?php
namespace Home\Controller;
use Think\Controller;
class DropsController extends Controller {
    public function index($key = ""){
       	if ($key === "") {
			$model = M('Drops');
			//默认情况下显示全部
		} /*else {//搜索功能的时候搜索特定的文章
			$where['articlescrap.title'] = array('like', "%$key%");
			$where['member.username'] = array('like', "%$key%");
			$where['category.title'] = array('like', "%$key%");
			$where['_logic'] = 'or';
			$model = M('drops') -> where($where);
		}*/
		// 查询满足要求的总记录数
		$count = $model -> where($where) -> count();//分页
		$Page = new \Extend\Page($count, 10);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page -> show();
		// 分页显示输出
		$data = $model ->limit($Page -> firstRow . ',' . $Page -> listRows)-> order('id ASC') -> select();
		$this -> assign('data', $data);
		//var_dump($data);
		$this -> assign('page', $show);
		$this -> display();
    }
    public function show($id = ''){
    	$id = I('get.id');
    	$data = M('Drops')-> where("id = ".intval($id))->select();
    	$this -> assign('data', $data[0]);
    	$this -> display();
    }
}