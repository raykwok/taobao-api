<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.time.get request
 * 
 * @author auto create
 * @since 1.0, 2014-06-25 16:37:06
 */
class TimeGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "taobao.time.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
