<div class="modal fade" id="editCategory" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ __('language.update_category') }}</h4>
            </div>
            {!! Form::open(array('route' => 'categories.update', 'id'=> "frm-update")) !!}
            <div class="modal-body">
               {{ Form::label('name', {{ __('language.name_category') }}) }}
               {{ Form::text('name', null, array('class'=>'form-control', 'id' => 'name-update')) }}
               {{ Form::hidden('id-update', null, array('class'=>'form-control', 'id' => 'id-update')) }}
                <br>
                <br>
                <span class="btn btn-info" data-toggle="modal" data-target="#showTreeCategory"><i class="far fa-eye"></i>{{ __('language.choose_category_parent') }}</span>
                <span class="btn btn-info btn-info" id="clear-category"><i class="fas fa-eraser"></i>{{ __('language.delete') }}</span>
                {{ Form::text('parent_id', null, ['class' => 'form-control', 'readonly' => 'true', 'id' => 'parent_id']) }}
                <br>
                <br>
            <div class="alert none-div" id="message-fail"></div>

            <p>{{ __('language.question_process') }}</p>
            </div>
            <div class="modal-footer">
                    {{ Form::submit({{ __('language.yes') }},array('class'=>'btn danger'))}}
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">{{ __('language.no') }}</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
