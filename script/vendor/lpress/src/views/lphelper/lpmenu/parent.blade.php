@if(!empty($menus))
	@php
	$mainMenus=json_decode($menus->data);
	@endphp
	@foreach ($mainMenus as $row) 

	<li  class="{{ $li }}" >
	
		<a href="{{ url($row->href) }}" @if(!empty($row->target)) target="{{ $row->target }}" @endif>{{ $row->text }} @if (isset($row->children))<span class="iconify" data-icon="ri:arrow-down-s-line" data-inline="false"></span>  @endif</a>

		
		@if (isset($row->children)) 
		<ul  class="{{ $ul }}" >
			@foreach($row->children as $childrens)
			 @include('lphelper::lphelper.lpmenu.child', ['childrens' => $childrens])
			@endforeach
		</ul>
		@endif
		</li>		
	@endforeach
@endif