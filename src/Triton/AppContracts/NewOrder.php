<?php

namespace Triton\AppContracts;

use Triton\DataContractProtocol\BaseEventContract;


class NewOrder extends BaseEventContract {

	public function __construct()
	{
		$this->setDescription('My new order event')
             ->defineVar('order_num', 89, 'Order unique id')
			 ->defineVar('amount', 5700.07, 'Order amount');
	}

}