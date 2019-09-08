@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					馬を編集する
				</div>

				<div class="panel-body">
            @if(count($errors) > 0)
            <div>
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
					<!-- 馬を追加するフォーム -->
					<form action="/edit" method="POST" class="form-horizontal"　enctype="multipart/form-data">
						@csrf
            <input type="hidden" name="id" value="{{$form->id}}">
						<!-- 馬のタイトル -->
						<div class="form-group">
							<label for="title1" class="col-sm-3 control-label">タイトル</label>

							<div class="col-sm-6">
								<input type="text" name="title" id="title1" class="form-control" value="{{ $form->title }}">
							</div>
            </div>

            <!-- 馬のコンテンツ -->
            <div class="form-group">
							<label for="content1" class="col-sm-3 control-label">本文</label>

							<div class="col-sm-6">
                <textarea class="form-control" name="content" id="content1" rows="8">{{ $form->content }}</textarea>
							</div>
            </div>

            <!-- 馬の画像url -->
            <div class="form-group">
							<label for="image_url1" class="col-sm-3 control-label">馬の画像</label>

							<div class="col-sm-6">
								<input type="file" name="image_url" id="image_url1" class="form-control-file">
							</div>
						</div>

						<!-- 馬の情報投稿ボタン -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
                  <i class="fa fa-plus"></i>編集する
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
