<?php namespace Raypower\Taobao\Top\Request;
/**
 * TOP API: taobao.ruqin.test.two request
 * 
 * @author auto create
 * @since 1.0, 2015.04.24
 */
class RuqinTestTwoRequest
{
	/** 
	 * 错误码
	 **/
	private $errorCode;
	
	/** 
	 * 错误消息
	 **/
	private $errorMessage;
	
	/** 
	 * 是否成功
	 **/
	private $isSuccess;
	
	private $apiParas = array();
	
	public function setErrorCode($errorCode)
	{
		$this->errorCode = $errorCode;
		$this->apiParas["error_code"] = $errorCode;
	}

	public function getErrorCode()
	{
		return $this->errorCode;
	}

	public function setErrorMessage($errorMessage)
	{
		$this->errorMessage = $errorMessage;
		$this->apiParas["error_message"] = $errorMessage;
	}

	public function getErrorMessage()
	{
		return $this->errorMessage;
	}

	public function setIsSuccess($isSuccess)
	{
		$this->isSuccess = $isSuccess;
		$this->apiParas["is_success"] = $isSuccess;
	}

	public function getIsSuccess()
	{
		return $this->isSuccess;
	}

	public function getApiMethodName()
	{
		return "taobao.ruqin.test.two";
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
