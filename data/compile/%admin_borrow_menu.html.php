  		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_1',this)">+</a></span><strong><a href="#" >审核管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_1">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow&status=0&site_id=8&a=borrow" id="adminlist">发标初审</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow/full&status=1&site_id=8&a=borrow" id="adminlist">满标复审</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow/amount&site_id=8&a=borrow" id="adminlist">信用额度审批</a></li>

				</ul>
			</div>
		</div>
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_4',this)">+</a></span><strong><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow&site_id=8&a=borrow" >贷款管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_4">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow&status=1&site_id=8&a=borrow" id="adminlist">正在招标的借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow&status=2&site_id=8&a=borrow" id="adminlist">初审未通过的借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow/full&status=3&site_id=8&a=borrow" id="adminlist">满标复审状态</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow/liubiao&site_id=8&a=borrow" id="adminlist">流标</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow&site_id=8&a=borrow" id="admintype">所有借款</a></li>
 					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow/tongji&site_id=8&a=borrow" id="adminlist">贷款统计</a></li>

				</ul>
			</div>
		</div>

 
		
		
		<div class="fenlan">
			<div class="fenlan_title"><span><a href="javascript:void(0);" onclick="change_menu('site_menu_5',this)">+</a></span><strong><a href="#" >还款管理</a></strong></div>
			<div class="fenlan_content">
				<ul id="site_menu_5">
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow/lateFast&site_id=8&a=borrow" id="adminlist">即将到期借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow/repayment&site_id=8&a=borrow&status=1" id="adminlist">已还款借款</a></li>
					<li><a href="<? if (!isset($this->magic_vars['_A']['admin_url'])) $this->magic_vars['_A']['admin_url'] = ''; echo $this->magic_vars['_A']['admin_url']; ?>&q=module/borrow/late&site_id=8&a=borrow" id="adminlist">当前逾期借款</a></li>
					
				</ul>
			</div>
		</div>
		
 