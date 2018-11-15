@extends('backend.app')

@section('icerik')
<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h2>Ayarlar</h2>
							<div class="subtitle">Ayarlarınızı buradan yapabilirsiniz</div>
						</div>
						<div class="tbl-cell tbl-cell-action button">
							<button type="button" class="btn btn-rounded btn-block">Create</button>
						</div>
					</div>
				</div>
			</header>

			<section class="tabs-section">
				<div class="tabs-section-nav">
					<div class="tbl">
						<ul class="nav" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#tabs-2-tab-1" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Genel Ayarlar
										<span class="label label-pill label-danger">4</span>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-2" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Kullanıcı Ayarları
										<span class="label label-pill label-success">2</span>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-3" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Sosyal Medya
										<span class="label label-pill label-info">4</span>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-4" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Google APi
										<span class="label label-pill label-warning">4</span>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-5" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										E-Posta Ayarları
										<span class="label label-pill label-default">4</span>
									</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tabs-2-tab-6" role="tab" data-toggle="tab">
									<span class="nav-link-in">
										Banka İşlemleri
										<span class="label label-pill label-primary">4</span>
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div><!--.tabs-section-nav-->

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active show" id="tabs-2-tab-1">Genel Ayarlar</div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-2-tab-2">Kullanıcı Bilgileri</div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-2-tab-3">Sosyal Medya</div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-2-tab-4">Google APi</div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-2-tab-5">E-Posta Ayarları</div><!--.tab-pane-->
					<div role="tabpanel" class="tab-pane fade" id="tabs-2-tab-6">Banka İşlemleri</div><!--.tab-pane-->
				</div><!--.tab-content-->
			</section><!--.tabs-section-->

		</div><!--.container-fluid-->
	</div><!--.page-content-->
    @endsection()
