<div class="modal fade" id="deleteCategory" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ __('language.delete_category') }}</h4>
            </div>
            {!! Form::open(array('route' => 'categories.destroy', 'id' => "frm-delete")) !!}
            <div class="modal-body">
                {{ Form::label('name', {{ __('language.name_category') }}) }}
                {{ Form::text('name', null, array('class'=>'form-control', 'readonly' => 'true')) }}
                {{ Form::hidden('id', null, array('class'=>'form-control', 'id' => 'id')) }}
                <br>
                {{ Form::label('parent_id', {{ __('language.category_parent') }}) }}
                {{ Form::text('parent_id', null, ['class' => 'form-control', 'readonly' => 'true', 'id' => 'parent_id']) }}
                <br>
                <p>{{ __('language.question_process') }}</p>
            </div>
            <div class="modal-footer">
                {{ Form::submit({{ __('language.yes') }}, array('class' => 'btn danger'))}}
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">{{ __('language.no') }}</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
