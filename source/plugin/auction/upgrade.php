<?php
/*
 *	Author: IAN - zhouxingming
 *	Last modified: 2011-09-01 16:01
 *	Filename: upgrade.php
 *	Description: ��������
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

/*
$sql = <<<SQL
ALTER TABLE pre_plugin_auction ADD `virtual` TINYINT(1) NOT NULL AFTER `typeid`;
ALTER TABLE pre_plugin_auction CHANGE `extra` `extra` TINYINT(1) NOT NULL;
CREATE TABLE  pre_plugin_auction_message (
 `mid` MEDIUMINT( 8 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `tid` INT( 10 ) UNSIGNED NOT NULL ,
 `message` TEXT NULL ,
 `uid` MEDIUMINT( 8 ) UNSIGNED NOT NULL
) ENGINE = MYISAM ;

CREATE TABLE pre_plugin_auction_xml (
  `clientid` smallint(8) unsigned NOT NULL auto_increment,
  `sign` char(32) NOT NULL,
  PRIMARY KEY  (`clientid`)
) ENGINE=MyISAM;
SQL;
$upgrade_pluginid = DB::result_first("SELECT pluginid FROM ".DB::table('common_plugin')." WHERE identifier='auction'");

$sql .= <<<SQL
UPDATE pre_common_pluginvar SET value='���۹��򣺲����û�����������Ʒ��������Ϊ�׼ۻ��߸��ڵ׼ۡ������û���������Ʒ������������������ǰʱ���ܻ����Ʒ����ͼ۸���ͬ�����ȵ��ȵá� <br /> ���۳ɹ���ϵͳ���Զ����������һ�γ��۵Ľ�ң����Ľ������ٿ۳��򷵻���������Ʒ�Ŀ��ܽ����Զ����ͣ����۳ɹ����û������ھ���ҳ��鿴���ܡ�' WHERE pluginid='$upgrade_pluginid' AND variable='auc_type2_tips';
UPDATE pre_common_pluginvar SET value='�齱�����û����շ����ļ۸���ۣ���Ʒ�����м��������վ��ڳ����û��������ȡ��λ�н���<br />���۳ɹ���ϵͳ���Զ�������۵Ľ�ң����Ľ������ٿ۳��򷵻���������Ʒ�Ŀ��ܽ����Զ����ͣ��н��û������ڳ齱ҳ��鿴���ܡ�' WHERE pluginid='$upgrade_pluginid' AND variable='auc_type1_tips_1';
UPDATE pre_common_pluginvar SET value='�һ������û����շ����ļ۸���۶һ�����Ʒ�����м��������ȳ��۵ļ�λ�û����һ��ɹ���������Ʒ�Ŀ��ܽ����Զ����ͣ��ɹ��һ����û������ڶһ�ҳ��鿴����' WHERE pluginid='$upgrade_pluginid' AND variable='auc_type1_tips_2';
UPDATE pre_common_plugin SET name='�����̳�' WHERE pluginid='$upgrade_pluginid';
SQL;

if(strtolower(CHARSET) != 'gbk') {
	include_once libfile('class/chinese');
	$c = new Chinese('GBK', 'UTF-8', true);
	$sql = $c->Convert($sql);
}
runquery($sql);
 */
$finish = true;
?>
