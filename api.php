<?php
// �洢���ݵ��ļ�
$filename = 'data.dat';        
 
// ָ��ҳ�����
header('Content-type: text/html; charset=utf-8');
 
if(!file_exists($filename)) {
    die($filename . ' �����ļ�������');
}
 
$data = array();
 
// ���ĵ�
$fh = fopen($filename, 'r');
 
// ���ж�ȡ������������
while (!feof($fh)) {
    $data[] = fgets($fh);
}
 
// �ر��ĵ�
fclose($fh);
 
// �����ȡһ������
$result = $data[array_rand($data)];
 
echo 'document.write("'.htmlspecialchars($result).'");';