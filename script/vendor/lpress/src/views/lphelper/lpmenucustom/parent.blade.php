@if(!empty($menus))
<div class="footer-menu-title">
	<h4>{{ $menus->name }}</h4>
</div>
<div class="footer-menu-content">
	<nav>
		<ul>
			@php
			$mainMenus=json_decode($menus->data);
			@endphp
			@foreach ($mainMenus as $row) 
			<li  class="{{ $li }}">
				<a href="{{ url($row->href) }}" @if(!empty($row->target)) target="{{ $row->target }}" @endif>{{ $row->text }}</a>

				@if($icon_position=='right') <i class="{{ $row->icon }}"></i>@endif
				@if (isset($row->children)) 
				<ul  class="{{ $ul }}" >
					@foreach($row->children as $childrens)
					@include('lphelper::lphelper.lpmenucustom.child', ['childrens' => $childrens])
					@endforeach
				</ul>
				@endif
			</li>		
			@endforeach
		</ul>
	</nav>
</div>
@endif
