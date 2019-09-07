@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					馬を追加する
				</div>

				<div class="panel-body">
					@include('common.errors')

					<!-- 馬を追加するフォーム -->
					<form action="/house" method="POST" class="form-horizontal">
						@csrf

						<!-- 馬のタイトル -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">タイトル</label>

							<div class="col-sm-6">
								<input type="text" name="title" class="form-control" value="{{ old('title') }}">
							</div>
            </div>

            <!-- 馬のコンテンツ -->
            <div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">本文</label>

							<div class="col-sm-6">
								<input type="text" name="content" class="form-control" value="{{ old('content') }}">
							</div>
            </div>

            <!-- 馬の画像url -->
            <div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">馬の画像</label>

							<div class="col-sm-6">
								<input type="file" name="image_url" class="form-control">
							</div>
						</div>

						<!-- 馬の情報投稿ボタン -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-plus"></i>投稿する
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
