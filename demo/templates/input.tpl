<!DOCTYPE html>
<html>
<head>
    <title>csv转在线表格</title>
	<meta charset="UTF-8"/>
</head>
<body>
	<form action="/upload" method="post" enctype="multipart/form-data">
		<input type="file" name="file" />
		<input type="submit"/>
	</form>
	{if $state eq 1}
		<p>success:链接地址如下</p>
		<a href="{$link}">点击这里</a>
	{elseif $state eq 2}
		<p>fail：请仔细查看注意事项，再试一次</p>
	{/if}
	<div>
		<h3>注意事项：</h3>
		<p>1. 每个表格的格式</p>
		<ul>
			<li>第一行为表格标题（不可为空）</li>
			<li>第二行为列表头</li>
			<li>第三行开始为每行数据</li>
		</ul>

		<p>2. 多个表格之间用空行分割</p>
		<p>3. 只支持window转存为cvs</p>
		<p>4. 以上传的csv文件名区分url</p>
	</div>
    <script type="text/javascript" src="./static/common/js/jquery-1.11.3.min.js"></script>
</body>
</html>
