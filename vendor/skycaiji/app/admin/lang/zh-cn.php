<?php
/*
 |--------------------------------------------------------------------------
 | SkyCaiji (蓝天采集器)
 |--------------------------------------------------------------------------
 | Copyright (c) 2018 https://www.skycaiji.com All rights reserved.
 |--------------------------------------------------------------------------
 | 使用协议  https://www.skycaiji.com/licenses
 |--------------------------------------------------------------------------
 */

return array(
	'admincp'=>'后台',
	
	'sign_wildcard'=>'(*)',
	'sign_match'=>'[内容{:id}]',
	'tips_sign_wildcard'=>'通配符可匹配任意字符',
	'tips_sign_match'=>'匹配任意字符并保存为标签以供调用，等同于捕获组：(?&lt;nr标识&gt;.*?)',
	'tips_sign_match_global'=>'匹配任意字符并保存为标签以供全局调用，等同于捕获组：(?&lt;nr标识&gt;.*?)',
	'tips_sign_group'=>'捕获组：(?&lt;nr标识&gt;[\s\S]*?)，匹配正则并保存为[内容]标签以供调用',
	'tips_sign_group_global'=>'捕获组：(?&lt;nr标识&gt;[\s\S]*?)，匹配正则并保存为[内容]标签以供全局调用',
	
	'tips_regular'=>'可使用正则表达式',
    'tips_export_ipt_pwd'=>'加密文件并且导入时需要输入该密码（请牢记密码否则无法解密），默认无密码不加密',
	
	'setting'=>'设置',
    'setting_site'=>'站点设置',
	'set_site_verifycode'=>'开启图片验证码',
		
	'setting_caiji'=>'采集设置',
	'set_caiji_auto'=>'开启自动采集',
	'set_caiji_run'=>'自动采集运行方式',
	'set_caiji_interval'=>'采集运行间隔',
	'set_caiji_num'=>'最大采集数量',
	'set_caiji_timeout'=>'最大执行时间',
	
	'setting_email'=>'邮件设置',
	'set_email_sender'=>'发件人名称',
	'set_email_email'=>'发件人邮箱账号',
	'set_email_pwd'=>'发件人邮箱密码',
	'set_email_smtp'=>'SMTP服务器',
	'set_email_port'=>'SMTP端口',
	'set_email_port_tips'=>'TLS一般为25，SSL一般为465，咨询邮箱服务商获取',
	'set_email_type'=>'SMTP端口类型',
	'set_email_test_subject'=>'测试发送邮件',
	'set_email_test_body'=>'恭喜，发送邮件成功！',
    
    
    'setting_store'=>'云端设置',
    'store_authkey_error'=>'通信密钥只能由字母和数字组成且长度在6-100位之间',
    
    'down_file_name_'=>'按时间生成（方便日期归类）',
    'down_file_name_time'=>'按时间生成（方便日期归类）',
    'down_file_name_url'=>'按网址生成（防止重复下载）',
    'down_file_name_custom'=>'自定义',
    
    'down_file_name_custom_name_'=>'文件网址MD5码',
    'down_img_name_custom_name_'=>'图片网址MD5码',
    
	'config_error_none_email'=>'没有邮箱服务器配置，请在后台设置！',	


	'user'=>'用户',
	'user_list'=>'用户列表',
	'user_add'=>'添加用户',
	'user_edit'=>'编辑用户',
	'user_username'=>'用户名',
	'user_password'=>'密码',
	'user_repassword'=>'确认密码',
	'user_newpwd_tips'=>'如需修改密码，请输入旧密码和新密码，否则留空',
	'user_email'=>'邮箱',
	'user_email_tips'=>'用于找回账号密码',
	'user_groupid'=>'用户组',
    
    'user_error_has_username'=>'用户名已经存在！',
	'user_error_edit_not_allow'=>'只有创始人才能编辑他人的账号！',
	'user_error_delete_not_allow'=>'只有创始人才能删除账号！',
	'user_error_groupid'=>'不是允许的用户组！',
	'user_error_del_founder'=>'不能删除创始人账号！',

	'user_error_null_uid'=>'UID不能为空',
	'user_error_empty_user'=>'用户不存在',
	'user_error_login'=>'用户名或密码不正确！',
	'user_error_sublogin'=>'登录提交失败',
	'user_error_is_not_admin'=>'抱歉，请登录管理员账号！',
	'user_login_in'=>'登录中...',
	'user_auto_login'=>'正在自动登录...',
	
	'usertoken_error'=>'用户token错误，请刷新页面或重新登录！',
	
	'task'=>'任务',
	'task_add'=>'添加任务',
	'task_edit'=>'编辑任务',
	'task_list'=>'任务列表',
	'task_change_list'=>'列表模式',
	'task_change_folder'=>'分组模式',

	'task_name'=>'任务名称',
	'task_tg'=>'任务分组',
	'task_sort'=>'排序',
	'task_sort_help'=>'数字越大越靠前',
	'task_module'=>'采集模块',
	'task_module_'=>'无',
	'task_module_pattern'=>'规则采集',
	'task_module_keyword'=>'关键词采集',
	'task_module_weixin'=>'微信采集',
    'task_auto'=>'自动采集',
    'task_auto_'=>'否',
    'task_auto_0'=>'否',
    'task_auto_1'=>'循环',
    'task_auto_2'=>'定时',
	'task_addtime'=>'添加时间',
    'task_caijitime'=>'采集时间',
    'task_collected'=>'采集量',
	'task_edit_collector'=>'下一步：编辑采集器',
	'task_root'=>'根目录',
	'task_loading'=>'正在载入数据',
	'task_none_data'=>'无数据',
	'task_set_task'=>'任务设置',
	'task_set_collector'=>'采集器设置',
	'task_set_release'=>'发布设置',
	
	
	'task_error_null_id'=>'请输入任务id',
	'task_error_empty_task'=>'不存在任务',
	'task_error_null_tgid'=>'请输入分组id',
	'task_error_empty_tg'=>'不存在分组',	
	'task_error_null_name'=>'请输入名称！',
	'task_error_has_name'=>'名称已经存在！',
	'task_error_null_module'=>'未设置采集模块',
		
	'taskgroup_add'=>'添加分组',
	'taskgroup_edit'=>'编辑分组',
	'taskgroup'=>'任务分组',
	'taskgroup_list'=>'任务分组列表',
	'taskgroup_name'=>'分组名称',
	'taskgroup_sort'=>'排序',
	'taskgroup_sort_help'=>'数字越大越靠前',
	'taskgroup_parent_id'=>'父分组',
		
	'tg_add_sub'=>'添加子分组',
	'tg_move'=>'移动分组',
	'tg_exist_sub'=>'存在子分组！',
	'tg_none'=>'分组不存在！',
	'tg_is_parent'=>'存在子分组，请先清空子分组，才能移动分组！',
	'tg_deleteall_has_sub'=>'有子分组的不能删除，需先清空子分组！',
	'tg_no_checked'=>'没有选中的记录！',
		
	'tg_error_null_name'=>'请输入名称！',	
	'tg_error_has_name'=>'名称已经存在！',	

		
		
	'coll_set'=>'采集器设置',		
	'coll_edit_task'=>'上一步：编辑任务',
	'coll_name'=>'采集规则名称',

	'coll_error_invalid_module'=>'无效的采集模块',
	'coll_error_empty_coll'=>'采集器设置不存在',
	'coll_error_empty_effective'=>'页面脚本不可用，保存失败！',


	'field_module_rule'=>'规则匹配',
	'field_module_auto'=>'自动获取',
	'field_module_xpath'=>'XPath匹配',
	'field_module_words'=>'固定文字',
    'field_module_num'=>'随机数字',
    'field_module_no'=>'自增数字',
	'field_module_time'=>'时间',
	'field_module_list'=>'列表抽取',
	'field_module_json'=>'JSON提取',
	'field_module_merge'=>'字段组合',
	'field_module_extract'=>'字段提取',
    'field_module_sign'=>'内容标签',
    
    'process_module_extract'=>'提取内容',
    'process_module_html'=>'html标签过滤',
    'process_module_insert'=>'插入内容',
	'process_module_replace'=>'内容替换',
    'process_module_filter'=>'关键词过滤',
    'process_module_if'=>'条件判断',
    'process_module_download'=>'本地化',
	'process_module_translate'=>'翻译',
	'process_module_tool'=>'工具箱',
	'process_module_batch'=>'批量替换',
	'process_module_substr'=>'截取字符串',
	'process_module_func'=>'使用函数',
    'process_module_api'=>'调用接口',
    'process_module_apiapp'=>'接口插件',

	'p_m_if_1'=>'满足条件继续操作',	
	'p_m_if_2'=>'满足条件中断操作',
	'p_m_if_3'=>'不满足条件继续操作',
	'p_m_if_4'=>'不满足条件中断操作',
    
    'p_m_if_c_has'=>'包含',
    'p_m_if_c_nhas'=>'不包含',
    'p_m_if_c_eq'=>'等于',
    'p_m_if_c_neq'=>'不等于',
    'p_m_if_c_heq'=>'恒等于',
    'p_m_if_c_nheq'=>'不恒等于',
    'p_m_if_c_gt'=>'大于',
    'p_m_if_c_egt'=>'大于等于',
    'p_m_if_c_lt'=>'小于',
    'p_m_if_c_elt'=>'小于等于',
    'p_m_if_c_time_eq'=>'时间等于',
    'p_m_if_c_time_egt'=>'时间大于等于',
    'p_m_if_c_time_elt'=>'时间小于等于',
    'p_m_if_c_regexp'=>'正则表达式',
    'p_m_if_c_func'=>'使用函数',
    
	
    'page_front_url'=>'前置页',
    'page_source_url'=>'起始页',
    'page_level_url'=>'多级页',
    'page_url'=>'内容页',
    'page_relation_url'=>'关联页',
    
    'render_wait_end'=>'等待页面完全渲染',
    'render_wait_time'=>'等待时间（秒）',
    'render_scroll_half'=>'滚动到中间',
    'render_scroll_end'=>'滚动到底部',
    'render_scroll_top'=>'滚动到指定位置',
    'render_val'=>'赋值',
    'render_click'=>'点击',
    
	'rele_set'=>'发布设置',
	'rele_error_detect_null'=>'没有检测到本地CMS程序，您可以手动绑定数据',
	'rele_error_empty_rele'=>'发布设置不存在',
	'rele_error_null_module'=>'请选择发布方式',
	'rele_error_db'=>'数据库错误：',
	'rele_error_no_table'=>'该数据库没有表',
	'rele_success_db_ok'=>'数据库连接成功',
    'rele_module'=>'发布方式',
    'rele_module_dataset'=>'数据集',
	'rele_module_cms'=>'本地CMS程序',
	'rele_module_db'=>'数据库',
	'rele_module_api'=>'生成API',
	'rele_module_toapi'=>'调用接口',
	'rele_module_file'=>'文件存储',
	'rele_module_diy'=>'自定义插件',
    'rele_m_name_cms'=>'CMS',
    'rele_m_name_diy'=>'自定义',
    
	'rele_btn_detect'=>'开始检测',
	'rele_cms_path'=>'CMS路径',

	'rele_db_type'=>'数据库类型',
	'rele_db_host'=>'数据库主机',
	'rele_db_name'=>'数据库名称',
	'rele_db_charset'=>'数据库编码',
	'rele_db_port'=>'数据库端口',
	'rele_db_user'=>'数据库用户',
	'rele_db_pwd'=>'数据库密码',
		
	'error_unknown_database'=>'未知的数据库',
	'error_null_input'=>'请输入{:str}',
    'error_open_basedir'=>'您的网站开启了目录访问限制(open_basedir)，请检查是否因该问题导致目录无法读写！',
	
	'collected'=>'已采集数据',	
	'collected_list'=>'已采集数据列表',

    'COLLECTED_RELE_'=>'无',
    'collected_rele_dataset'=>'数据集',
	'collected_rele_cms'=>'CMS',
	'collected_rele_db'=>'数据库',
	'collected_rele_file'=>'文件',
	'collected_rele_toapi'=>'接口',
	'collected_rele_api'=>'API',
	'collected_rele_diy'=>'插件',
		
	'verifycode'=>'验证码',
	'verifycode_error'=>'验证码错误！',


	'find_password'=>'找回密码',
	'find_pwd_username'=>'请输入邮箱/用户名',
	'find_pwd_yzm'=>'请输入激活码',
	'find_pwd_resend'=>'重新发送',
	'find_pwd_next_step'=>'下一步',
	'find_pwd_pwd'=>'请输入新密码',
	'find_pwd_repwd'=>'确认新密码',
	'find_pwd_sended'=>'已向邮箱{:email}发送了激活码！',
	'find_pwd_email_failed'=>'发送邮件失败，请检查后台发送邮件配置！',
	'find_pwd_email_wait'=>'需等待{:seconds}秒才能再次发送',
	'find_pwd_email_subject'=>'找回密码 - 蓝天采集器',
	'find_pwd_email_body'=>'您的激活码为：{:yzm}，有效时间{:minutes}分钟',
	'find_pwd_error_username'=>'请输入邮箱/用户名',
	'find_pwd_error_step'=>'步骤错误，请重新操作！',
	'find_pwd_error_post'=>'表单提交失败',
	'find_pwd_error_none_email'=>'邮箱不存在！',
	'find_pwd_error_multiple_emails'=>'存在多个用户使用此邮箱，请输入用户名！',
	'find_pwd_error_none_user'=>'用户不存在！',
	'find_pwd_success'=>'密码修改成功',
	
		
	'yzm_error_please_send'=>'请发送激活码',
	'yzm_error_please_input'=>'请输入激活码',
	'yzm_error_timeout'=>'激活码已过期！请重新发送',
	'yzm_error_yzm'=>'激活码错误',
		
	'admincp_style'=>'界面',	
	'admincp_sidebar_mini'=>'菜单最小化',
	'admincp_skins'=>'设置皮肤',
	'skin_blue'=>'蓝',
	'skin_black'=>'黑',
	'skin_purple'=>'紫',
	'skin_green'=>'绿',
	'skin_red'=>'红',
	'skin_yellow'=>'黄',
	'skin_blue_light'=>'蓝亮',
	'skin_black_light'=>'黑亮',
	'skin_purple_light'=>'紫亮',
	'skin_green_light'=>'绿亮',
	'skin_red_light'=>'红亮',
	'skin_yellow_light'=>'黄亮',
	
		
	'store'=>'云平台',

	'rule_collect'=>'采集规则',
		
		
	'empty_data'=>'数据不存在',
	'invalid_op'=>'无效的操作！',
	'submit'=>'提交',
	'search'=>'搜索',
	'op_success'=>'操作成功',
	'op_failed'=>'操作失败',
	'sort'=>'排序',
	'select'=>'选择',
	'select_all'=>'全选',
	'select_first'=>'请选择',
	'save'=>'保存',
	'op'=>'操作',
	'delete'=>'删除',
	'deleted'=>'已删除',
	'edit'=>'编辑',
	'test'=>'测试',
	'confirm_delete'=>'确定删除？',
	'delete_success'=>'删除成功',
	'none'=>'无',
	'caiji'=>'采集',
	'more'=>'更多',
	'yes'=>'是',
	'no'=>'否',
	'all'=>'全部',
	'login'=>'登录',
	'logout'=>'退出',
	'login_auto'=>'下次自动登录',
	'separator'=>'：',
	'redirecting'=>'跳转中...',
	'close'=>'关闭',
		
	'tips_match'=>'示例：&lt;div id=&quot;a&quot;&gt;[内容1]&lt;/div&gt;(*)&lt;div id=&quot;b&quot;&gt;[内容2]&lt;/div&gt;',
	'tips_matchn'=>'示例：[内容1] [内容2]',
    'tips_match_only'=>'示例：&lt;div id=&quot;content&quot;&gt;[内容]&lt;/div&gt;',
    'tips_match_area'=>'示例：&lt;div id=&quot;a&quot;&gt;[内容123]&lt;/div&gt;(*)&lt;div id=&quot;b&quot;&gt;[内容abc]&lt;/div&gt;',
    'tips_matchn_area'=>'示例：[内容123] [内容abc]',
	'tips_match_url'=>'示例：&lt;a href=&quot;http://demo.com/[内容123]/[内容abc]&quot;&gt;(*)&lt;/a&gt;',
	'tips_matchn_url'=>'示例：http://www.demo.com/[内容123]-[内容abc].html',
    
    'ds_f_type_bigint'=>'数字',
    'ds_f_type_double'=>'小数',
    'ds_f_type_varchar'=>'字符串',
    'ds_f_type_mediumtext'=>'文本',
    'ds_f_type_datetime'=>'时间',
    
    'ds_ix_type_index'=>'普通索引',
    'ds_ix_type_unique'=>'唯一索引',
    'ds_ix_type_fulltext'=>'全文索引',
    
    'apiapp_op_variable'=>'变量',
    'apiapp_op_request'=>'请求',
    'apiapp_variable_m_'=>'直接输入',
    'apiapp_variable_m_user'=>'用户输入',
    'apiapp_variable_m_extract'=>'提取内容',
    'apiapp_variable_m_time'=>'时间',
    'apiapp_variable_m_num'=>'随机数字',
    'apiapp_variable_m_list'=>'列表抽取',
    
	'release_upgrade'=>'插件版本过低，请升级插件 <a href="https://www.skycaiji.com/manual/doc/release_upgrade" target="_blank">升级教程</a>',
);
?>