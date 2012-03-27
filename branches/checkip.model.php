<?php
/**
 * @class checkipModel
 * @author CMD (webmaster@comcorea.com)
 * @brief checkip 모듈의 model class
 **/

class checkipModel extends checkip {
	/**
	 * @brief 초기화
	 */
	function init() {
	}

	/**
	 * @brief 모듈의 global 설정 구함
	 */
	function getModuleConfig() {
		static $config = null;
		if(is_null($config)) {
			$oModuleModel = &getModel('module');
			$config = $oModuleModel->getModuleConfig('checkip');
		}

		return $config;
	}
}