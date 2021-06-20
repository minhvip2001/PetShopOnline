<section class="bread-crumb  ">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">					
					<li class="home">
						<a itemprop="url" href="/"><span itemprop="title">Trang chủ</span></a>						
						<span><i class="fa">/</i></span>
					</li>
					@if($element != 'hidden')
					<li>
						<a itemprop="url" href="{{$url}}"><span itemprop="title">{{$name}}</span></a>
						<span><i class="fa">/</i></span>
					</li>
          @endif
					<li><strong itemprop="title">{{$param}}</strong></li>
					
				</ul>
			</div>
		</div>
	</div>
</section>