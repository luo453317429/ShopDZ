	<!--<div class="tip-remind">收起提示</div>-->
		<div class="tipsbox">
		    <div class="tips boxsizing radius3">
		        <div class="tips-titbox">
		            <h1 class="tip-tit"><i class="tips-icon-lamp"></i>{$Think.lang.operation_tips}</h1>
		            <span class="open-span span-icon"><i class="open-icon"></i></span>
		        </div>
		    </div>
			<ol class="tips-list" id="tips-list">
				<li>1.商品订单退款申请及审核处理。</li>
			</ol>
		</div>
		<div class="iframeCon">
		<div class="iframeMain">
			<div class="white-shadow2">
				<div class="details-box">
					<h1 class="details-tit">退款处理</h1>
					<div class="jurisdiction boxsizing">
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">支付单号：</dt>
							<dd class="left text-l">
								{$list.order_sn}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款单号：</dt>
							<dd class="left text-l">
								{$list.refund_sn}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">申请时间：</dt>
							<dd class="left text-l">
								{:date('Y-m-d H:i:s',$list['dateline'])}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款原因：</dt>
							<dd class="left text-l">
								{$list.causes_name}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款说明：</dt>
							<dd class="left text-l">
								{$list.causes}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款金额：</dt>
							<dd class="left text-l">
								{$list.refund_amount}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款凭证：</dt>
							<dd class="left text-l">
								<div class="evalute-tableImg">
									<foreach name="list.refund_images" item="v" key="k">
										<i class="evalute-icon view_img" id="refund-img{$k}" url="{$v}"></i>
									</foreach>
								</div>
							</dd>
						</dl>
					</div>
					<h1 class="details-tit">商城退款处理</h1>
					<div class="jurisdiction boxsizing marginT0">
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">处理结果：</dt>
							<dd class="left text-l">
								<switch name="list['status']" >
								<case value="4">拒绝退款</case>
								<case value="1">待处理</case>
								<!-- <case value="2">正在退款</case> -->
								<case value="3">已退款</case>
								</switch>
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">处理人：</dt>
							<dd class="left text-l">
								{$list.user_name}
							</dd>
						</dl>
						<dl class="juris-dl boxsizing remarks-dl">
							<dt class="left text-r boxsizing">处理备注：</dt>
							<dd class="left text-l">
								<div class="remarks">{$list.remark}</div>
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">处理时间：</dt>
							<dd class="left text-l">
								<notempty name="list['enddate']">{:date('Y-m-d H:i:s',$list['enddate'])}</notempty>
							</dd>
						</dl>
					</div>
					<h1 class="details-tit">退款方式</h1>
					<form method="get" name="settingForm" action="{:U('Presales/refund_pay')}" enctype="multipart/form-data" id="refunttrue_form">
				     	<input type="hidden" name="id" value="{$list.refund_sn}"/>
						<div class="jurisdiction boxsizing marginT0">
							<dl class="juris-dl boxsizing remarks-dl">
								<dt class="left text-r boxsizing"><span class="redstar">*</span>退款方式：</dt>
								<dd class="left text-l">
									<div class="button-holder" localrequired="">
										<div class="radio i-checks">
											<p class="radiobox"><input type="radio" id="radio-1-a" name="status" value="1" class="regular-radio"/><label for="radio-1-a"></label><span class="radio-word">原路退款</span></p>
											<p class="radiobox"><input type="radio" id="radio-1-b" name="status" value="2" class="regular-radio"/><label for="radio-1-b"></label><span class="radio-word">人工打款</span></p>
										</div>
										<p class="remind1">原路退款：退回支付的帐号中，人工打款：网站外的退款</p>
									</div>
								</dd>
							</dl>
							<dl class="juris-dl boxsizing  remarks-dl">
								<dt class="left text-r boxsizing"><span class="redstar">*</span>处理说明：</dt>
								<dd class="left text-l">
									<textarea type="text" name="remark" class="com-textarea1 radius3 boxsizing" placeholder="" localrequired=""></textarea>
									<p class="remind1">同意或拒绝退款，请在上面输入处理说明</p>
								</dd>
							</dl>
						</div>
						<div class="btnbox3 boxsizing">
							<a type="button" class="btn1 radius3 marginT10  btn3-btnmargin form_data">确认退款</a>
							<a type="button" class="btn1 radius3 marginT10" href="{:U('/Presales/refunds')}">返回列表</a>
						</div>
					</from>
				</div>
			</div>
		</div>
	</div>
		<!--<script type="text/javascript" src="__PUBLIC__/admin/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="__PUBLIC__/admin/js/common.js"></script>-->
		<script type="text/javascript">
			$(function(){
				$(document).posi({class:'view_img'});
			})
		</script>
