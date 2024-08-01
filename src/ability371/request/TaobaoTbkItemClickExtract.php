<?php
	declare (strict_types=1);
	/**
	 * Created by:
	 * User: wangs
	 * Date: 2024/7/27
	 */
	namespace Topsdk\Topapi\Ability371\Request;

	use Topsdk\Topapi\TopUtil;

	class TaobaoTbkItemClickExtract
	{

		private $click_url;

		public function getClickUrl() : string{
			return $this->click_url;
		}


		public function setClickUrl(string $click_url) : string{
			return $this->click_url=$click_url;
		}


		public function getApiName() : string {
			return "taobao.tbk.item.click.extract";
		}

		public function toMap() : array{
			$requestParam = array();
			if (!TopUtil::checkEmpty($this->click_url)) {
				$requestParam["click_url"] = TopUtil::convertBasic($this->click_url);
			}
			return $requestParam;
		}

		public function toFileParamMap() : array{
			$fileParam = array();
			return $fileParam;
		}


	}