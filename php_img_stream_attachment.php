<?php
//�o�͂���t�@�C����ǂݍ���(�����ł�PNG��O��Ƃ���)
$file_name = "./sample.png";
$contents = file_get_contents($file_name);

//�摜���o�͂���O�ɖ����I�Ƀ��X�|���X�w�b�_���o�͂���
header("Content-Type: image/png");
//inline�L�[���[�h��attachment�ɕς���Ƃ�Web�u���E�U�ł̓t�@�C����ۑ����܂����H�_�C�A���O���o��悤�ɂȂ�
header('Content-Disposition: attachment; filename="sample.png"');

//PNG�C���[�W�ŃX�g���[���o��
echo $contents;
?>
