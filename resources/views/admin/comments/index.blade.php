@extends('admin.index')

@section('title', __('language.comments'))

@section('stylesheets')
    {!! Html::style('public/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
@endsection

@section('main')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{ __('language.manage_comment') }}</h3>
              <div class="alert none-div" id="message"></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('language.post') }}</th>
                                <th>{{ __('language.comments') }}</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody id="comment-info">
                            @foreach ($posts as $post)
                            <tr id="{{ $post->post_id }}">
                                <th>{{ $post->post_id }}</th>
                                <td>{{ $post->slug }}</td>
                                <td>{{ $post->comment_number }}</td>
                                <td>
                                    <a href="{{ route('home.single', ['slug' => $post->slug]) }}" class="btn btn-info btn-xs" id="view">{{ __('language.view') }}</a>
                                    @can('user.update')
                                    <a href="#" class="btn btn-success btn-xs" id="edit" data-id="{{ $post->post_id }}">{{ __('language.edit') }}</a>
                                    @endcan
                                    @can('user.delete')
                                    <a href="#" class="btn btn-danger btn-xs" id="delete" data-id="{{ $post->post_id }}">{{ __('language.delete') }}</a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    @include('admin.comments.pagination_comment')
            </div>

                
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 </section>
@endsection

@section('javascript')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
