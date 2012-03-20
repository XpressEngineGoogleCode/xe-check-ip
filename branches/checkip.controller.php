<?php
/**
 * @class checkipController
 * @author CMD (webmaster@comcorea.com)
 * @brief checkip 모듈의 controller class
 **/

class checkipController extends checkip {
	/**
	 * @brief 초기화
	 */
	function init() {
	}
	/**
	 * @brief 가입시 IP 기록
	 */
	function triggerInsertMember(&$args) {
		
		// 가입 IP를 기록
		$args->reg_ip = $_SERVER['REMOTE_ADDR'];
		$args->regdate = date('YmdHis');
		$output = executeQuery('checkip.insertRegIP', $args);
		if(!$output->toBool()) return $output;

		return new Object();
	}
}