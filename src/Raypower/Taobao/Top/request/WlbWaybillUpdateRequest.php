<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.wlb.waybill.update request
 * 
 * @author auto create
 * @since 1.0, 2014-06-25 17:04:23
 */
class WlbWaybillUpdateRequest
{
	/** 
	 * cpcode
	 **/
	private $cpCode;
	
	/** 
	 * 订单数据
	 **/
	private $tradeOrderInfo;
	
	private $apiParas = array();
	
	public function setCpCode($cpCode)
	{
		$this->cpCode = $cpCode;
		$this->apiParas["cp_code"] = $cpCode;
	}

	public function getCpCode()
	{
		return $this->cpCode;
	}

	public function setTradeOrderInfo($tradeOrderInfo)
	{
		$this->tradeOrderInfo = $tradeOrderInfo;
		$this->apiParas["trade_order_info"] = $tradeOrderInfo;
	}

	public function getTradeOrderInfo()
	{
		return $this->tradeOrderInfo;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.waybill.update";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cpCode,"cpCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
