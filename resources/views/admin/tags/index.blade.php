@extends('admin.index')

@section('title', '|Tags Manager')

@section('main')

    @include('admin.tags.delete')
    @include('admin.tags.edit')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>
                        <div class="alert" id="message" style="display: none"></div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-6">
                            <h1></h1>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('language.Name') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="tag-info">
                                    @foreach ($tags as $tag)
                                    <tr id="{{ $tag->id }}">
                                        <th>{{ $tag->id }}</th>
                                        <td><a href="#">{{ $tag->name }}</a></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-xs" id="view">{{ trans('language.view-crud') }}</a>
                                            <a href="#" class="btn btn-success btn-xs" id="edit" data-id="{{ $tag->id }}">{{ trans('language.edit-crud') }}</a>
                                            <a href="#" class="btn btn-danger btn-xs" id="delete" data-id="{{ $tag->id }}">{{ trans('language.delete-crud') }}</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4 pull-right">
                            <div class="well">
                                {!! Form::open(['route' => 'tags.store', 'method' => 'POST', 'id' => 'frm-create']) !!}
                                <h2>{{ trans('language.new-tag') }}</h2>
                                {{ Form::label('name', 'Name:') }}
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                                {{ Form::submit(trans('language.create-new-tag'), ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                                {!! Form::close() !!}
                            </div>
                        </div>
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

    @include('admin.tags.create_js')
    @include('admin.tags.delete_js')
    @include('admin.tags.edit_js')

@endsection

