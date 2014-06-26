<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.brandservice.isfan.query request
 * 
 * @author auto create
 * @since 1.0, 2014-06-25 17:04:23
 */
class BrandserviceIsfanQueryRequest
{
	/** 
	 * 站长用户id
	 **/
	private $siteOwnerId;
	
	/** 
	 * 用户nick
	 **/
	private $userNick;
	
	private $apiParas = array();
	
	public function setSiteOwnerId($siteOwnerId)
	{
		$this->siteOwnerId = $siteOwnerId;
		$this->apiParas["site_owner_id"] = $siteOwnerId;
	}

	public function getSiteOwnerId()
	{
		return $this->siteOwnerId;
	}

	public function setUserNick($userNick)
	{
		$this->userNick = $userNick;
		$this->apiParas["user_nick"] = $userNick;
	}

	public function getUserNick()
	{
		return $this->userNick;
	}

	public function getApiMethodName()
	{
		return "taobao.brandservice.isfan.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->siteOwnerId,"siteOwnerId");
		RequestCheckUtil::checkNotNull($this->userNick,"userNick");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
