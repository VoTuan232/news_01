<div class="modal fade" id="deleteTag" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">{{ trans('language.delete-tag') }}</h4>
            </div>
            {!! Form::open(array('route' => 'tags.destroy', 'id'=> "frm-delete")) !!}
            <div class="modal-body">
                {{ Form::label('name', "Name") }}
                {{ Form::text('name', null, array('class'=>'form-control', 'readonly' => 'true')) }}
                {{ Form::hidden('id', null, array('class'=>'form-control', 'id' => 'id')) }}
                <br>
                <p>{{ trans('language.question') }}</p>
            </div>
            <div class="modal-footer">
                {{ Form::submit(trans('language.yes'), array('class'=>'btn danger')) }}
                <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">{{ trans('language.no') }}</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

