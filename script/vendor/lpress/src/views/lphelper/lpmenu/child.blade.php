@if ($childrens)
  	<li  class="{{ $li }}">
  			
  			<a  href="{{ url($childrens->href) }}" @if(!empty($childrens->target)) target={{ $childrens->target }} @endif>{{ $childrens->text }} @if (isset($childrens->children))<span class="iconify" data-icon="ri:arrow-down-s-line" data-inline="false"></span> @endif</a> 
		@if (isset($childrens->children)) 
		<ul  class="{{ $ul }}" >
			@foreach($childrens->children as $row)
			 @include('lphelper::lphelper.lpmenu.child', ['childrens' => $row])
			@endforeach
		</ul>	
		@endif
	</li>
@endif


