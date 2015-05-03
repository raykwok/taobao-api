<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.sp.service.site.get request
 * 
 * @author auto create
 * @since 1.0, 2015.04.24
 */
class SpServiceSiteGetRequest
{
	/** 
	 * 优站站点ID
	 **/
	private $siteId;
	
	private $apiParas = array();
	
	public function setSiteId($siteId)
	{
		$this->siteId = $siteId;
		$this->apiParas["site_id"] = $siteId;
	}

	public function getSiteId()
	{
		return $this->siteId;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.service.site.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->siteId,"siteId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
