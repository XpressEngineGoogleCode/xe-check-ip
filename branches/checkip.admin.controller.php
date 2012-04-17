<?php
/**
 * @class checkipAdminController
 * @author CMD (webmaster@comcorea.com)
 * @brief checkip 모듈의 admin controller class
 **/

class checkipAdminController extends checkip {
	/**
	 * @brief 초기화
	 */
	function init() {
	}

	/**
	 * @brief 설정 저장
	 */
	function procCheckipAdminInsertConfig() {
		$config = Context::getRequestVars();
		if(!$config->delete_reg_ip) $config->delete_reg_ip = 'N';
		if(!$config->check_ip) $config->check_ip = 'N';
		if(!$config->expiration_period) $config->expiration_period = 0;

		$oModuleController = &getController('module');
		$oModuleController->insertModuleConfig('checkip', $config);

		$this->setMessage('success_saved');
	}

	/**
	 * @brief 기록 초기화
	 */

	function procCheckipAdminInitLogs() {
		$msg_code = 'success_reset';

		$output = executeQuery('checkip.initRegIP');
		if(!$output->toBool()) $msg_code = 'msg_failed_reset_logs';

		$this->setMessage($msg_code);
	}

}