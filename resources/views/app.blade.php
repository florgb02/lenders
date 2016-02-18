<!DOCTYPE html>
<html lang="en">

@include('common.head')

<body>
	@include('common.header')

	@yield('content')

	@inlcude('common.footer')

	@include('common.scripts')

</body>