<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.sp.content.graphic.publish request
 * 
 * @author auto create
 * @since 1.0, 2015.04.24
 */
class SpContentGraphicPublishRequest
{
	/** 
	 * 内容的自定义分类，数值为文本内容，主要用于区分内容的分类（譬如连衣裙、T恤、阿迪达斯等），分类名称的长度限制为(0,5] (单位是字符，不区分中英文)，分类名称中不能包含非法内容，且一个站点下所拥有的总自定义分类数量不能超过16个
	 **/
	private $classname;
	
	/** 
	 * 图文内容，Json格式的数据。
必须是数组类型元素列表。展示时每一个元素会单独一行显示。
type: 表示图文元素的类型，目前支持3种类型的元素
1:text;文本元素；
2:image;图片元素；
3:item;宝贝元素；

value:表示图文类型的元素值。
当类型为text时，value值就是文本类型字符串；
当类型为image时，value值就是图片地址;
当类型为item时，value值就是宝贝ID;
	 **/
	private $contents;
	
	/** 
	 * 封面图片地址（推送到微淘必须设置这个属性，且尺寸不能小于（750*750）） 图文的封面尺寸不能低于680*680，否则该条图文将无法同步至微淘 图片地址必须匹配正则表达式:http://(img01|img02|img03|img04|img1|img2|img3|img4)\.(taobaocdn|tbcdn)\.(com|net|cn).*
	 **/
	private $coverpicurl;
	
	/** 
	 * 内容的detail页面地址，数值为html链接，主要用于展现内容的detail信息的
	 **/
	private $detailurl;
	
	/** 
	 * 是否要发送到微淘广播流
	 **/
	private $intimeline;
	
	/** 
	 * 站长Key
	 **/
	private $siteKey;
	
	/** 
	 * 内容的自定义标签，数值为文本内容，多个标签以逗号“,”分割。
主要用于细化内容的分类（譬如小清新，棉质、雪纺等），标签名称的长度限制为[0,6] (单位是字符，不区分中英文)，标签名称中不能包含非法内容，且一个内容关联的标签数目不能超过6个
	 **/
	private $tags;
	
	/** 
	 * 内容标题,标题的长度限制为(0,22](单位是字)
	 **/
	private $title;
	
	private $apiParas = array();
	
	public function setClassname($classname)
	{
		$this->classname = $classname;
		$this->apiParas["classname"] = $classname;
	}

	public function getClassname()
	{
		return $this->classname;
	}

	public function setContents($contents)
	{
		$this->contents = $contents;
		$this->apiParas["contents"] = $contents;
	}

	public function getContents()
	{
		return $this->contents;
	}

	public function setCoverpicurl($coverpicurl)
	{
		$this->coverpicurl = $coverpicurl;
		$this->apiParas["coverpicurl"] = $coverpicurl;
	}

	public function getCoverpicurl()
	{
		return $this->coverpicurl;
	}

	public function setDetailurl($detailurl)
	{
		$this->detailurl = $detailurl;
		$this->apiParas["detailurl"] = $detailurl;
	}

	public function getDetailurl()
	{
		return $this->detailurl;
	}

	public function setIntimeline($intimeline)
	{
		$this->intimeline = $intimeline;
		$this->apiParas["intimeline"] = $intimeline;
	}

	public function getIntimeline()
	{
		return $this->intimeline;
	}

	public function setSiteKey($siteKey)
	{
		$this->siteKey = $siteKey;
		$this->apiParas["site_key"] = $siteKey;
	}

	public function getSiteKey()
	{
		return $this->siteKey;
	}

	public function setTags($tags)
	{
		$this->tags = $tags;
		$this->apiParas["tags"] = $tags;
	}

	public function getTags()
	{
		return $this->tags;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.sp.content.graphic.publish";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->classname,5,"classname");
		RequestCheckUtil::checkNotNull($this->contents,"contents");
		RequestCheckUtil::checkNotNull($this->detailurl,"detailurl");
		RequestCheckUtil::checkNotNull($this->siteKey,"siteKey");
		RequestCheckUtil::checkMaxLength($this->siteKey,32,"siteKey");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkMaxLength($this->title,44,"title");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
