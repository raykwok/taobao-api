<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.wlb.item.map.get request
 * 
 * @author auto create
 * @since 1.0, 2014-06-25 17:04:23
 */
class WlbItemMapGetRequest
{
	/** 
	 * 要查询映射关系的物流宝商品id
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.item.map.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
