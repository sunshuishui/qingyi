<?php
error_reporting(E_ALL & ~E_NOTICE);
require './Smarty/Smarty.class.php';
$smarty = new Smarty;				//ʵ����smarty����
$smarty->template_dir="./templates";	//ָ��ģ����Ŀ¼
$smarty->compile_dir="./templates_c";	//ָ�������ļ����Ŀ¼
$smarty->config_dir="./config";	//ָ�������ļ����Ŀ¼
$smarty->cache_dir="./cache";	//ָ��������Ŀ¼
$smarty->caching=false;	//�رջ��棨����Ϊtrue��ʾ���û��棩
$smarty->cache_lifetime = 120;	//�ƶ�����ʱ��
$smarty->left_delimiter="{";	//ָ�����ǩ
$smarty->right_delimiter="}";	//ָ���ұ�ǩ
$smarty->debugging = false;		//��������ģʽ

$cacheId=md5($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);


