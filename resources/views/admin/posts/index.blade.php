@extends('admin.index')

@section('title', 'Posts |')

@section('stylesheets')
    {!! Html::style('bower_components/select2/dist/css/select2.min.css')!!}
@endsection

@section('main')
<div class="container">
    {{-- @include('admin.posts.create') --}}
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @can('post.create')
                    <button class="btn btn-info" data-toggle="modal" data-target="#createPost"> + {{ trans('language.Create new post') }}
                    </button>
                    @endcan    
                    <button class="btn btn-info pull-right " id="read-posts-data">{{ trans('language.Show list posts') }}</button>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>{{ trans('language.ID') }}</th>
                                <th>{{ trans('language.Title') }}</th>
                                <th>{{ trans('language.Slug') }}</th>
                                <th>{{ trans('language.Body') }}</th>
                                <th>{{ trans('language.Published') }}</th>
                                <th>{{ trans('language.Image') }}</th>
                                <th>{{ trans('language.User') }}</th>
                                <th>{{ trans('language.Vote') }}</th>
                                <th>{{ trans('language.View') }}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="post-info">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    //load posts
    $('#read-posts-data').on('click', function(){
        $.get("{{ URL::to('manager/posts/read-data') }}", function(data){
            $('#post-info').empty().html(data);
    
        })
    })
</script>

@endsection
