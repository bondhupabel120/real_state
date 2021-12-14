@if ($childrens)
  	<li  class="{{ $li }}" >  			
  			<a href="{{ url($childrens->href) }}" @if(!empty($childrens->target)) target={{ $childrens->target }} @endif>{{ $childrens->text }}</a> 
		@if (isset($childrens->children)) 
		<ul  class="{{ $ul }}" >
			@foreach($childrens->children as $row)
			 @include('lphelper::lphelper.lpmenucustom.child', ['childrens' => $row])
			@endforeach
		</ul>	
		@endif
	</li>
@endif


