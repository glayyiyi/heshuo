<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/modal.css" rel="stylesheet" type="text/css" /> 
<link href="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/media/css/about.css" rel="stylesheet" type="text/css" /> 
<div id="main" class="clearfix">
<div class="cor_divtop">
<div id="left" class="left">
<div class="NavLinkHeader"><span>咨询服务中心</span></div>
<div class="NavLinkContent">
		<? $this->magic_vars['query_type']='GetSiteList';$data = array('var'=>'var','epage'=>'20','pid'=>'21','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','status'=>'1');$default = '';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetSiteList($data);if(!isset($this->magic_vars['magic_result'])) $this->magic_vars['magic_result']= array(); $_from = $this->magic_vars['magic_result']; if (!is_array($_from) && !is_object($_from)) {$_from =array(); } if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] => $this->magic_vars['var']):
?>
		<div id="item5" class="page" onClick="showsubmenu(1, 12)"><span class="txtspan"><a href="/<? if (!isset($this->magic_vars['var']['nid'])) $this->magic_vars['var']['nid'] = ''; echo $this->magic_vars['var']['nid']; ?>/index.html"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></span></div>
		<div style="display: none" id="open_item5"></div>
		<? endforeach;else:echo $default; endif; unset($_from);unset($_magic_vars); ?>
</div>
</div>
<div class="site_id" style="display: none"><? if (!isset($this->magic_vars['_G']['site_result']['nid'])) $this->magic_vars['_G']['site_result']['nid'] = ''; echo $this->magic_vars['_G']['site_result']['nid']; ?></div>
	<script>
	
		function showSecond(){
			var $ = jQuery;
			var siteId = $(".site_id").text();
			var oBox = $(".NavLinkContent");
			var oA = $("a" ,oBox);
			var Rel = "";
			oA.each(function(){
				var index = oA.index(this);
				Rel = $(oA[index]).attr("rel");
				console.log(Rel,siteId)
				if(Rel == siteId){
					$(oA[index]).addClass("hover");
				}
				
			})
		}
		showSecond();
		
	</script>
<div id="right" class="right">
<div>
<div id="MainBanner">
<div style="border-bottom:2px solid #c51e0b;" class="box_name">
				<a href="#" class="btn-action" style="margin-top:8px;text-decoration:none;color:#fff;"  ><? if (!isset($this->magic_vars['_G']['site_result']['name'])) $this->magic_vars['_G']['site_result']['name'] = ''; echo $this->magic_vars['_G']['site_result']['name']; ?> </a>
		</div>
</div>
<div style="clear: both"></div>
<div id="myTabContent" class="content">
			<div class="info" id="lxjs">
			
			 <!--$_G.site_result.content}-->

            <? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','page'=>'20','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','status'=>'1','site_id'=>$this->magic_vars['_G']['site_result']['site_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/article/article.class.php');$this->magic_vars['magic_result'] = articleClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>

			<!--列表开始-->
			<div class="content_list">
				<ul class="list_li_1">
					<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
					<li>
					<a href="a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" style="color:#000000; text-decoration:none;"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a></li>
					<? endforeach; endif; unset($_from); ?>
				</ul>
			</div>
			<!--兼职列表结束-->
			<!--分页开始-->
				<div>
					<table align="center" class="list_table_page">
						<tr align="center">
							<td height="25px" ><div align="center"><? if (!isset($this->magic_vars['loop']['show"page"'])) $this->magic_vars['loop']['show"page"'] = ''; echo $this->magic_vars['loop']['show"page"']; ?></div></td>
						</tr>
					</table>
				</div>
				<!--分页结束-->

                        <? unset($_magic_vars); ?>			
</div></div></div></div></div></div></div>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>