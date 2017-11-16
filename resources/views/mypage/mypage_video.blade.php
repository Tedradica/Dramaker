@extends('layout')

@section('title','마이페이지')

@section('content')

<div id="main">
  <!-- <section id="mypage_title" class="two">
    <header>
      <h2>내 동영상</h2>
    </header>
  </section> -->

  <section id="mypage" class="three">

    <div class="ibox-mypage-pr">
      <div class="ibox-content-mypage-pr">
        <form action="{{ route('Video') }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group pr_video">
            <!-- <label>파일업로드</label> -->
            <input type="file" name="mypage_video">
          </div>
          <button class="btn btn-success video_upload" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Files&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        </form>
      </div>
    </div>

    @foreach ($videos as $video)
    <div class="panel panel-default panel-video">
      <div class="panel-video-body">
        <video class="video_mypage" width="200" height="200" data-link="{{ url('/video_play') }}" onclick="video_play({{$video->file_no}})">
          <source src="{{ asset('storage/'.$video->path.'/'.$video->save_name) }}" type="video/mp4">
          <source src="{{ asset('storage/'.$video->path.'/'.$video->save_name) }}" type="video/webm">
          <source src="{{ asset('storage/'.$video->path.'/'.$video->save_name) }}" type="video/ogg">
        </video>
      </div>
      <div class="panel-video-heading">
        <div class="video-heading">
          {{$video->original_name}}
        </div>
        <div class="video-added">
          <label>Added:</label>
        </div>
      </div>
    </div>
    @endforeach
  </section>
  </div>
</div>

<div class="modal fade" id="mypage_video" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content-mypage">
      <div class="modal-body-mypage">
        <div class="modal-mypage-video">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
