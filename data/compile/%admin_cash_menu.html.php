 		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_1',this)">+</a></span><strong><a href="#" >提现管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_1">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/cash&status=0&a=cash" id="">提现待审核</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/cashCK&status=0&a=cash" id="">提现参考</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/cash&status=1&a=cash" id="">提现成功</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/cash&status=2&a=cash" id="">提现失败</a></li>

				</ul>
			</div>
		</div>
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_2',this)">+</a></span><strong><a href="#" >充值管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_2">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/recharge_new&a=cash" id="">添加线下充值</a></li>
					<!--<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/rechargefromexcel&a=cash" id="">批量导入线下充值</a></li>-->
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/recharge&status=-1&a=cash" id="">线下充值复审</a></li>
 					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/recharge&status=-2&a=cash" id="">充值记录</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/deduct&a=cash" id="">费用扣除</a></li>
				</ul>
			</div>
		</div>
 		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_3',this)">+</a></span><strong><a href="#" >资金记录</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_3">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/log&a=cash" id="">资金使用记录</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/vipTC&a=cash" id="">会员邀请记录</a></li>
 
				</ul>
			</div>
		</div>
		
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_4',this)">+</a></span><strong><a href="#" >账户管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_4">
 					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/list&a=cash" id="">帐户列表</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/ticheng&a=cash" id="">用户提成</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/moneyCheck&a=cash" id="">资金对账</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/fs_list&a=cash" id="">负数监控</a></li>
				</ul>
			</div>
		</div>
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_5',this)">+</a></span><strong><a href="#" >账户管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_5">
 					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/return_reward&status=2&a=cash">回款续投奖励审核</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/return_account&a=cash">回款续投账户查看</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/account/return_log&a=cash">回款续投日志</a></li>
				</ul>
			</div>
		</div>
 