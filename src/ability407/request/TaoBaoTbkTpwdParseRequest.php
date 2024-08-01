<?php
	/**
	 * Created by:
	 * User: wangs
	 * Date: 2024/7/27
	 */
	declare (strict_types=1);

	namespace Topsdk\Topapi\Ability407\Request;
	use Topsdk\Topapi\TopUtil;

	class TaoBaoTbkTpwdParseRequest
	{
		/**
		需要解析的淘口令
		 **/
		private $passwordContent;

		public function getPasswordContent() : string{
			return $this->passwordContent;
		}

		public function setPasswordContent(string $passwordContent){
			$this->passwordContent = $passwordContent;
		}

		public function getApiName() : string {
			return "taobao.tbk.tpwd.parse";
		}

		public function toMap() : array{
			$requestParam = array();
			if (!TopUtil::checkEmpty($this->passwordContent)) {
				$requestParam["password_content"] = TopUtil::convertBasic($this->passwordContent);
			}

			return $requestParam;
		}

		public function toFileParamMap() : array{
			$fileParam = array();
			return $fileParam;
		}

	}