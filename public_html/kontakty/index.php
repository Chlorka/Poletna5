<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "��� �������� � ����������, ��������");
$APPLICATION->SetTitle("��������");
?><div class="ww-area">
	<p class="text">
		�� �������� � ������������� �� ������, �� ������ � ��������. ���� � ��� �������� ������� ���������� ������� ��� �������� ������� �� ��������� ��� ������ ������ ��������� - ����� �������! ���� � ���� ������ �� �� ��������� � �������, �� ����������� �������! ����� �� ������ �������� ���, ���������������� ������ �������� �����.
	</p>
	<table class="contact">
	<tbody>
	<tr>
		<td>
			<h3>�� ���� �������� ����������:</h3>
			<p class="name">
				�������� �������� ���������
			</p>
			<p class="phone">
				+7 (918) 787-35-66, +7 (918) 772-08-16
			</p>
			<p class="mail">
				<a href="mailto:an.lomovtsev@gmail.com">an.lomovtsev@gmail.com</a>
			</p>
			<h3>�� ��������:</h3>
			<p class="day">
				- � 9.00 �� ������
			</p>
			<p class="rain">
				- �������� ��� �� ������
			</p>
		</td>
		<td>
			<h3>�������� �����:</h3>
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"web-form",
	Array(
		"USE_CAPTCHA" => "N",
		"OK_TEXT" => "�������, ���� ��������� �������.",
		"EMAIL_TO" => "an.lomovtsev@gmail.com",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
		"EVENT_MESSAGE_ID" => ""
	)
);?>
		</td>
	</tr>
	</tbody>
	</table>
</div>
<div class="contact-bg">
	<div class="ww-area">
		<h4>��� ���� ���������� � �������� ��������� ��� ��������������� ����:</h4>
		<p class="blue">
			�������������� ����, ���. ���, ���� ����� ������ (���)
		</p>
		<p class="blue_area">
			����������: <b>43�58�25� N 043�01�54� E</b>
		</p>
		<p class="alert">
			����������, ��� �� ��������� � �������� �� ������! ����������� ��������� ����� ��������!
		</p>
		<div id="content_tab">
 <b>��� ���������:</b> <a >���������</a> <a >�������</a> <a >�� ����������</a>
		</div>
		<div class="content_tab_div">
			<div>
 <b>���������</b> �� ��������� ����������� ����, ����� �� �������� ��� ���������� �� ������ ���������.<br>
				����� (�� �������� �����) �� ������� ��� �� ���������� ����� ����� 110.<br>
				� ������� ��� ����� �� ��������� ������. ������ ����� ��������� � ������ �� ������� �����, ���, ���� �� ��������� � ������ ����� �������� �� ������ ������� � ������ (����� 30).
			</div>
			<div>
 <b>�������:</b> �� ���������������� ������� ��������� (������ ������ ������� �� �����������, � ������� � ���������� �� ��������� 5 �����).<br>
				����� �� ���������� ����� 110 �� ������� ���. ��������� ������������ �� �������� �����.<br>
				� ������� ��� ����� �� ��������� ������. ����� � �� ����� �� ������, ��� ������.
			</div>
			<div>
 <b>�� ����������:</b> ���� ��������� � ����� ��������� �� ��������� �������� (����� ����� �������), �� ���������� �� ���� � ������� ����������� ������ ����. �� ��������� ��������� ����� ����������� (����� 9-�� �����) ������������� ������� � ����� �� ������� ������ � ����������� ������� ���. ���� ��������� � ��������� �� ��. �����������, ���������� �� ��� �� ����������� � ��. ������������, �� �-�������� ����������� ������������ ������ � ����������� ���� �� �����������. ��������� �� �������� ��������, �� ������ ����� ���������������� � �������� ����������� � ����� �� ��������� �� �������� �� ���. ������ � �������, ���������� ��� ����� ����� �� ������ �������. ����� ������ ������� ������ ������ �������, �� �� ����������� ����� �����, ����� �� ��� �������������� ������ �� ������������� �����, ������ ������ ������������ ����������. ����� �� ��� ��������� ������ �� ��������� ������, ������� �������� ��� � ������. � ������� ������ ������ ������ ��������� ��� �������� ����. ���� �������������� ������ ������ �����, ��� ������ ���� � ������������ ��� ����� ���������������, �� ������ �� ������ ������.
			</div>
		</div>
	</div>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"INIT_MAP_TYPE" => "SATELLITE",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:43.97342750482366;s:10:\"yandex_lon\";d:43.02684305002672;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:43.03239448192907;s:3:\"LAT\";d:43.973581364200975;s:4:\"TEXT\";s:48:\"�������������� ����, ���. ���, ���� ����� ������\";}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "560",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>