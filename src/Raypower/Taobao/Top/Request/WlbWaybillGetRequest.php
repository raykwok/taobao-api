<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.wlb.waybill.get request
 * 
 * @author auto create
 * @since 1.0, 2014-06-25 17:04:23
 */
class WlbWaybillGetRequest
{
	/** 
	 * 物流服务商编码
	 **/
	private $cpCode;
	
	/** 
	 * 发货 地址
	 **/
	private $shippingAddress;
	
	/** 
	 * 订单数据
	 **/
	private $tradeOrderInfoCols;
	
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

	public function setShippingAddress($shippingAddress)
	{
		$this->shippingAddress = $shippingAddress;
		$this->apiParas["shipping_address"] = $shippingAddress;
	}

	public function getShippingAddress()
	{
		return $this->shippingAddress;
	}

	public function setTradeOrderInfoCols($tradeOrderInfoCols)
	{
		$this->tradeOrderInfoCols = $tradeOrderInfoCols;
		$this->apiParas["trade_order_info_cols"] = $tradeOrderInfoCols;
	}

	public function getTradeOrderInfoCols()
	{
		return $this->tradeOrderInfoCols;
	}

	public function getApiMethodName()
	{
		return "taobao.wlb.waybill.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cpCode,"cpCode");
		RequestCheckUtil::checkNotNull($this->shippingAddress,"shippingAddress");
		RequestCheckUtil::checkNotNull($this->tradeOrderInfoCols,"tradeOrderInfoCols");
		RequestCheckUtil::checkMaxListSize($this->tradeOrderInfoCols,1000,"tradeOrderInfoCols");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
