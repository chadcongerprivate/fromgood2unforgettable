<?php
$time = array('0:00:05', '0:00:06', '0:00:13', '0:00:15', '0:00:17', '0:00:23', '0:00:30', '0:00:54', '0:01:04', '0:01:10', '0:01:11', '0:01:14', '0:01:19', '0:01:41', '0:01:54', '0:01:59', '0:02:19', '0:02:30', '0:02:45', '0:02:56', '0:03:09', '0:03:19', '0:03:31', '0:03:41', '0:03:58', '0:04:07', '0:04:19', '0:04:47', '0:04:53', '0:04:59', '0:05:14', '0:06:00', '0:06:54', '0:07:03', '0:07:19', '0:07:33', '0:07:44', '0:08:14', '0:08:49', '0:09:19', '0:09:50', '0:10:30', '0:11:03', '0:11:26', '0:11:48', '0:11:50', '0:12:20', '0:12:26', '0:12:40', '0:12:56', '0:13:26', '0:14:00', '0:14:30', '0:15:10', '0:16:02', '0:16:32', '0:17:40', '0:18:24', '0:19:43', '0:19:50', '0:20:16', '0:20:58', '0:21:35', '0:22:11', '0:22:28', '0:23:13', '0:24:08', '0:25:11', '0:25:30', '0:26:30', '0:27:04', '0:27:50', '0:28:56', '0:29:24', '0:30:02', '0:30:53', '0:31:33', '0:32:01', '0:33:16', '0:34:10', '0:34:44', '0:35:00', '0:35:54', '0:36:45', '0:37:25', '0:37:45', '0:38:00', '0:38:46', '0:39:47', '0:40:20', '0:42:00', '0:41:41', '0:42:40', '0:43:04', '0:43:28', '0:44:06', '0:44:38', '0:46:06', '0:46:53', '0:47:45', '0:48:50', '0:49:20', '0:50:22', '0:50:52', '0:52:00', '0:52:32', '0:53:34', '0:54:33', '0:54:40', '0:55:21', '0:55:53', '0:56:22', '0:57:07', '0:58:00', '0:58:24', '0:59:07', '0:59:39', '1:00:23', '1:00:58', '1:01:16', '1:01:42', '1:02:21', '1:03:00', '1:04:06', '1:05:50', '1:06:38', '1:07:10', '1:07:52', '1:08:40', '1:08:52', '1:09:45', '1:11:16', '1:11:41', '1:12:15', '1:12:45', '1:13:27', '1:14:23', '1:15:16', '1:16:02', '1:16:42', '1:17:23', '1:17:49', '1:18:32', '1:19:13', '1:20:03', '1:21:05', '1:21:49', '1:22:15', '1:22:59', '1:23:34', '1:24:30', '1:25:37', '1:26:41', '1:27:21', '1:27:57', '1:28:48', '1:29:24', '1:29:56', '1:30:00', '1:30:15', '1:31:22', '1:31:57', '1:32:20', '1:33:37', '1:34:33', '1:35:00', '1:34:25', '1:36:15', '1:37:20', '1:37:53', '1:38:28', '1:40:00', '1:40:17', '1:40:53', '1:41:20', '1:41:44', '1:42:57', '1:43:25', '1:44:19', '1:45:00', '1:45:18', '1:45:20', '1:45:23');

foreach($time as $stamp){
	$data = explode(':', $stamp);
	$hour = intval($data[0]);
	$min = intval($data[1]);
	$sec = intval($data[2]);
	
	echo (($hour * 60) * 60) + ($min * 60) + $sec.'
';
}