<form action="{{route('anh')}}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="file" name="myFile">
	<input type="submit">
</form>
<!-- đây cái 3 tap tôi bật ấy làm nó k in ra echo ông hiểu ý tôi k -->