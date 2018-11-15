@extends('admin.index')

@section('title', '|Categories')

@section('stylesheets')
{!! Html::style('public/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
{!! Html::style('bower_components/select2/dist/css/select2.min.css') !!}
{!! Html::style('bower_components/Font-Awesome/web-fonts-with-css/css/fontawesome-all.min.css') !!}
@endsection

@section('main')

    @include('admin.categories.edit')
    @include('admin.categories.tree')
    @include('admin.categories.delete')

    <section class="content">
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{ __('language.manage_category') }}</h3>
                    <div class="alert none-div" id="message"></div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="col-md-6">
                        <button class="btn btn-info" data-toggle="modal" data-target="#showTreeCategory"><i class="far fa-eye"></i>{{ __('language.show_category') }}</button>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('language.name') }}</th>
                                    <th>{{ __('language.parent_category') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="category-info">
                                @foreach ($categories as $category)
                                <tr id = "{{ $category->id }}">
                                    <th>{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        @if (is_null($category->parent))
                                        null
                                        @else
                                            {{ $category->parent->name }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-info btn-xs" id="view">{{ __('language.view') }}</a>
                                        @can('category.update')
                                            <a href="#" class="btn btn-success btn-xs" id="edit" data-id="{{ $category->id }}">{{ __('language.edit') }}</a>
                                        @endcan
                                        @can('category.delete')
                                            <a href="#" class="btn btn-danger btn-xs" id="delete" data-id="{{ $category->id }}">{{ __('language.delete') }}</a>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @can('category.create')
                        <div class="col-md-4 pull-right">
                            <div class="well">
                                {!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'id' => 'frm-create']) !!}
                                <h2>{{ __('language.delete') }}</h2>
                                {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'category_id', 'placeholder' => {{ __('language.placeholder_name_category') }}]) }}
                                <br>
                                <span class="btn btn-info" data-toggle="modal" data-target="#showTreeCategory">
                                    <i class="far fa-eye"></i> 
                                    {{ __('language.select_category_parent') }}
                                </span>
                                <span class="btn btn-info btn-sm" id="clear-category">{{ __('language.delete') }}</span>
                                <br>
                                {{ Form::text('parent_id', null, ['class' => 'form-control', 'readonly' => 'true']) }}
                                {{ Form::submit({{ __('language.create') }}, ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    @endcan
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
        var category_id = {{ $category->id }};
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
    </script>
    <script src="{{ asset('bower_components/select2/dist/js/select2.min.js') }}"></script>
    {!! Html::script('js/category/create.js') !!}
    {!! Html::script('js/category/edit.js') !!}
    {!! Html::script('js/category/delete.js') !!}
    {!! Html::script('js/category/search.js') !!}
@endsection
