<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.tmc.user.cancel request
 * 
 * @author auto create
 * @since 1.0, 2014-06-25 17:04:23
 */
class TmcUserCancelRequest
{
	/** 
	 * 用户昵称，支持子账号
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.tmc.user.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
