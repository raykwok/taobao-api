<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.weitao.menu.create request
 * 
 * @author auto create
 * @since 1.0, 2014-06-25 16:37:06
 */
class WeitaoMenuCreateRequest
{
	/** 
	 * [{
    "name": "来吧少年",
    "sub_button": [
    {
        "features": 
        {
            "3": "1388726770350003001",
            "2": "1388726770350003001",
            "1": "1388726770350003001",
            "0": "1388726770350003001",
            "4": "1388726770350003001"
        },
        "name": "来吧少年快点击",
        "type": "click"
    },
    {
        "name": "来吧少年新网面",
        "type": "view",
        "url": "http://www.taobao.com"
    }]
}, 
{
    "name": "来吧妹纸",
    "sub_button": [
    {
        "features":
         {
            "3": "1388726414653004002",
            "2": "1388726414653004002",
            "1": "1388726414653004002",
            "0": "1388726414653004002",
            "4": "1388726414653004002"
        },
        "name": "来吧妹纸快点",
        "type": "click"
    }, 
    {
        "name": "来吧妹纸新网页",
        "type": "view",
        "url": "http://www.taobao.com"
    }]
 },
 {
    "name": "阿加西",
    "type": "view",
    "url": "http://www.taobao.com"
}]
	 **/
	private $menuString;
	
	private $apiParas = array();
	
	public function setMenuString($menuString)
	{
		$this->menuString = $menuString;
		$this->apiParas["menu_string"] = $menuString;
	}

	public function getMenuString()
	{
		return $this->menuString;
	}

	public function getApiMethodName()
	{
		return "taobao.weitao.menu.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->menuString,"menuString");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
